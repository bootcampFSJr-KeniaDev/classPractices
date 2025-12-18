<?php
    require_once 'Empleado.php';
    require_once 'Desarrollador.php';
    require_once 'Gerente.php';
    require_once 'Empresa.php';

    $empresa = new Empresa();

    $desarrollador = new Desarrollador("Alice", 30, 50000, "PHP");
    $gerente = new Gerente("Bob", 45, 70000, "Equipo de Desarrollo");

    $empresa->agregarEmpleado($desarrollador);
    $empresa->agregarEmpleado($gerente);

    $empresa->listarEmpleados();
?>