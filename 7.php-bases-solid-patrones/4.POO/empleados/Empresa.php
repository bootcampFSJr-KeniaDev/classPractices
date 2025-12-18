<?php
require_once "./Empleado.php";

class Empresa {
    private $empleados = [];

    public function agregarEmpleado(Empleado $empleado) {
        $this->empleados[] = $empleado;
    }

    public function listarEmpleados() {
        foreach ($this->empleados as $empleado) {
            echo "Nombre: " . $empleado->nombre . "<br>";
            echo "Edad: " . $empleado->edad . "<br>";
            echo "Salario: " . $empleado->salario . "<br>";
            echo "Bonificación: " . $empleado->calcularBonificacion() . "<br>";
            echo "<br>";
        }
    }
}

?>
