<?php
require_once "./Empleado.php";

class Gerente extends Empleado {
    protected $equipo;

    public function __construct($nombre, $edad, $salario, $equipo) {
        parent::__construct($nombre, $edad, $salario);
        $this->equipo = $equipo;
    }

    public function calcularBonificacion() {
        return $this->salario * 0.2;
    }
}


?>