<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    //metodo para mostrar todas las tareas
    public function index(){
        $tasks = Task::join('users', 'tasks.id','=','users.id')->select('tasks.id', 'tasks.title', 'tasks.status', 'tasks.priority', 'tasks.due_date', 'tasks.user_id','users.name')->get();
        if($tasks->isEmpty()){
            return response()->json(['message' => 'No tasks found'], 404);
        }
        return response()->json($tasks);
    }

    //metodo para guardar una nueva tarea
    public function save(StoreTaskRequest $request){

        Task::create($request->all());
        return response()->json(['message' => 'Task created successfully'], 201);
    }

    //metodo para mostrar una tarea por su id
    public function show($taskId){
        $validator = Validator::make(['task_id' => $taskId], [
            'task_id' => 'required|exists:tasks,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $task = Task::find($taskId);
        return response()->json($task, 200);
    }

    //metodo para actualizar una tarea
    public function update(UpdateTaskRequest $request, $taskId){
        $task = Task::find($taskId);

        $task->update($request->all());
        return response()->json(['message' => 'Task updated successfully'], 200);
    }

    //metodo para consultar cuantos dias faltan para la fecha de vencimiento
    public function remainingDays($taskId){
        $task = Task::find($taskId);

        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }

        $today = Carbon::today();
        $dueDate = Carbon::parse($task->due_date);
        // false para obtener un valor negativo si la fecha ya pasó
        $remainingDays = $today->diffInDays($dueDate, false); 

        return response()->json([
            'task_id' => $task->id,
            'title' => $task->title,
            'due_date' => $task->due_date,
            'remaining_days' => $remainingDays,
            'message' => $remainingDays < 0 ? 'La tarea ya venció' : 'Aún hay tiempo'
        ]);

    }

    //metodo para filtrar por estado (query params)
    public function filterByStatusOrPriority(Request $request){
        //agregamos validacion para el query param
        $status = $request->query('status');
        $priority = $request->query('priority');

        $validator = Validator::make(['status' => $status], [
            'status' => 'nullable|in:pendiente,en proceso,completada',
            'priority' => 'nullable|in:bajo,medio,alto'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        
        // Construir la consulta
        $query = Task::query();

        if ($status) {
            $query->where('status', $status);
        }

        if ($priority) {
            $query->where('priority', $priority);
        }

        $tasks = $query->select('id','title','description','status','priority','due_date','user_id')->get();
        if ($tasks->isEmpty()) {
            return response()->json(['message' => 'No tasks were found with those filters'], 404);
        }

        return response()->json($tasks, 200);
    }

}
