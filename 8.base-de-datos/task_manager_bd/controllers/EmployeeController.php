<?php

require_once "../models/EmployeeModel.php";
require_once "../config/database.php";

class Employee{
    protected $id_employee;
    protected $name;
    protected $phone;
    protected $email;
    private $salary;
    private $password;

    public function __construct($id, $name, $phone, $email, $salary)
    {
        $this->id_employee = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->salary = $salary;
        $this->password = "Kodigo";
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public static function getEmployees(){
        return EmployeeModel::all();
    }

    //tareas por empleado
    public static function getTasksByEmployee(){
        return EmployeeModel::findByEmployee();
    }

}