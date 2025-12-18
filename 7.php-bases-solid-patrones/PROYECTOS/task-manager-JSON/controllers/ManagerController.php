<?php

require_once "../controllers/EmployeeController.php";
require_once "../interface/ITask.php";

class ManagerController extends Employee implements ICRUDTask{

    public static function create(TaskModel $task)
    {
        //guardamos una tarea
        try{
            $task->save();
            //return "Se ha guardado correctamente";
            header("Location: ../views/tasks.php");
            exit();
        }catch(Error $error){
            return "Error al guardar la tarea: " . $error;
        }
    }

    public static function edit($id, $title, $description)
    {
        try{
            TaskModel::update($id, $title, $description);
            //return "Se ha actualizado correctamente";
            echo "<script>
                window.location.href = 'tasks.php'
            </script>";
        }catch(Error $error){
            return "Error al editar la tarea: " . $error;
        }
    }

    public static function delete($id_task)
    {
        //code..
    }

    //ver todas las tareas
    public static function getTasks(){
        return TaskModel::all();
    }

    //cambiar el estado
    public static function update_status($id_task, $status){
        return TaskModel::change_status($id_task, $status);
    }
}