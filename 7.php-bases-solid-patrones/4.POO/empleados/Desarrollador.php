<?php
require_once "./Empleado.php";

class Desarrollador extends Empleado {
    protected $lenguaje;

    public function __construct($nombre, $edad, $salario, $lenguaje) {
        parent::__construct($nombre, $edad, $salario);
        $this->lenguaje = $lenguaje;
    }

    public function calcularBonificacion() {
        return $this->salario * 0.1;
    }
}


?>