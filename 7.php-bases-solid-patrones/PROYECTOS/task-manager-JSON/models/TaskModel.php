<?php

class TaskModel{
    public int $id;
    public string $title;
    public string $description;
    public string $date;
    public string $status;
    public int $id_employee;

    private static $filePath = '../data/task.json';

    public function __construct($id, $title, $description, $id_employee){
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->date = date('Y-m-d');
        $this->status = 'Pendiente';
        $this->id_employee = $id_employee;
    }

    public function save(){
        $tasks = self::all();
        $tasks[] = [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'date' => $this->date,
            'status' => $this->status,
            'id_employee' => $this->id_employee
        ];

        //Guardando la tarea en un JSON
        self::loadJsonTasks($tasks);
    }

    //metodo para guardar y actualizar el json
    private static function loadJsonTasks($tasks){
        $json = json_encode($tasks, JSON_PRETTY_PRINT);
        file_put_contents(self::$filePath, $json);
    }

    //obtener todas las tareas
    public static function all(){
        if(file_exists(self::$filePath)){
            $json = file_get_contents(self::$filePath);
            return json_decode($json, true);
        }
        return [];
    }

    public static function update($id_task, $title, $description){
        $tasks = self::all();
        $task_found = false;

        foreach($tasks as &$task){
            if($task['id'] == $id_task){
                $task['title'] = $title;
                $task['description'] = $description;
                $task_found = true;
                break;
            }
        }

        if($task_found){
            self::loadJsonTasks($tasks);
            return "Tarea actuaizada correctamente";
        }
    }


    public static function change_status($id_task, $status){
        $tasks = self::all();
        $task_found = false;
        foreach($tasks as &$task){
            if($task['id'] == $id_task){
                $task['status'] = $status;
                $task_found = true;
                break;
            }
        }

        if($task_found){
            self::loadJsonTasks($tasks);
            return "Se actualizado la tarea";
        }
    }

}