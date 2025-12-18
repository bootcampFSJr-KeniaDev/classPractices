<?php

require "../models/TaskModel.php";
require "../controllers/ManagerController.php";

// $tarea = new TaskModel(1, "random","random...",1);
// $tarea->save();

// echo json_encode(TaskModel::all(), true);

$tarea = new TaskModel(2, "Refactorizar codigo","refactorizar las ventas",2);
//$response = ManagerController::create($tarea);
//echo $response;

echo json_encode(ManagerController::getTask(), true);