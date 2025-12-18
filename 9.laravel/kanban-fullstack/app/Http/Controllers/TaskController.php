<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::join('users', 'tasks.id','=','users.id')->select('tasks.id', 'tasks.title', 'tasks.status', 'tasks.priority', 'tasks.due_date', 'tasks.user_id','users.name')->get();
        return view('tasks.kanban', compact('tasks'));
    }

    //obtener la vista
    public function formRegister(){
        $users = User::select('id','name')->get();
        return view('tasks.register', compact('users'));
    }

    public function store(StoreTaskRequest $request){
        Task::create($request->all());
        return redirect()->route('tasks.index')->with('success', 'Tarea registrado exitosamente');
    }

    //metodo para obtener la vista para editar
    public function edit(Task $task){
        return view('tasks.edit', compact('task'));
    }

    public function update(UpdateTaskRequest $request, $taskId){
        $task = Task::find($taskId);
        $task->update($request->all());
        return redirect()->route('tasks.index')->with('success', 'Tarea actualizada exitosamente');
    }

}
