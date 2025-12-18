<?php

require "../models/TaskModel.php";
require "../controllers/ManagerController.php";
require_once "../models/EmployeeModel.php";
require_once "../controllers/AuthenticationController.php";

// $result = EmployeeModel::all();
// print_r($result);

AuthenticationController::login("karlita@gmail.com","karla123");

