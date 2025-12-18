<?php

class Employee{
    protected $id_employee;
    protected $name;
    protected $phone;
    protected $email;
    private $salary;
    private $password;
    private static $filePath = '../data/employee.json';

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

    public static function all(){
        if(file_exists(self::$filePath)){
            $json = file_get_contents(self::$filePath);
            return json_decode($json, true);
        }
        return [];
    }

}