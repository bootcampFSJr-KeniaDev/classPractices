<?php

class EmployeeModel{

    //obtener todos los empleados con rol 2
    public static function all(){
        $pdo = Connection::getInstance()->getConnection();
        $query = $pdo->prepare("SELECT * FROM employees WHERE id_role = 2");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //obtener tareas por empleado
    public static function findByEmployee(){
        $pdo = Connection::getInstance()->getConnection();
        $query = $pdo->prepare("SELECT * FROM tasks WHERE id_employee = ?");
        $query->execute([$_SESSION["id_employee"]]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //obtener la informacion del empleado por correo y contraseña
    public static function findByEmailAndPassword($email, $password){
        $pdo = Connection::getInstance()->getConnection();
        $query = $pdo->prepare("SELECT * FROM employees WHERE email = :email AND password = :password");
        $query->bindParam(":email", $email);
        $query->bindParam(":password", $password);
        $query->execute();
        $employee = $query->fetch(PDO::FETCH_ASSOC);

        return $employee;
    }

}