<?php

require_once "config/database.php";
require_once "models/EmployeeModel.php";

class AuthenticationController{

    public static function login($email, $password){
        $employee = EmployeeModel::findByEmailAndPassword($email, $password);
        
        if($employee){
            $role = $employee["id_role"];
            //creacion de sesiones
            $_SESSION["id_employee"] = $employee["id_employee"];
            $_SESSION["employee"] = $employee["name"];

            if($role == 1){
                header("Location: ./admin.php");
            }else{
                header("Location: ./views/home.php");
            }

        }else{
            echo "<div class='alert alert-danger mt-3'>Credenciales Incorrectas</div>";
        }
    }

    //cerrar sesion
    public static function logout(){
        // Iniciar la sesión (por si no se ha iniciado)
        session_start();
        // Destruir todas las variables de sesión
        session_unset();
        // Destruir la sesión
        session_destroy();
        
        //$_SERVER['PHP_SELF'] devuelve la ruta del script en ejecución.
        //dirname($_SERVER['PHP_SELF']) obtiene el directorio del script.
        header("Location: " . dirname($_SERVER['PHP_SELF']) . "/index.php");
        exit;
    }
}