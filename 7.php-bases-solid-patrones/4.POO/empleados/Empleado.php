<?php

abstract class Empleado {
    public $nombre;
    public $edad;
    public $salario;

    public function __construct($nombre, $edad, $salario) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->salario = $salario;
    }

    abstract public function calcularBonificacion();
}

?>