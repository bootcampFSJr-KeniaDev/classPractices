<?php

require_once "../models/TaskModel.php";

interface ICRUDTask{
    public static function getTasks();
    public static function create(TaskModel $task);
    public static function edit($id, $title, $description);
    public static function delete($id_task);
}