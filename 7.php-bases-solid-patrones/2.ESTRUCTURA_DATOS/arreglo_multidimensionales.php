<?php

$estudiantes = array(
    array(
        "nombre" => "Juan",
        "apellido" => "Pérez",
        "edad" => 20,
        "notas" => array(8.5, 7.8, 9.2)
    ),
    array(
        "nombre" => "Ana",
        "apellido" => "García",
        "edad" => 22,
        "notas" => array(9.0, 8.8, 9.4)
    ),
    array(
        "nombre" => "Luis",
        "apellido" => "Martínez",
        "edad" => 19,
        "notas" => array(7, 8.2, 7.8)
    )
);

//array_push()
$nuevo_estudiante = array(
    "nombre" => "Katherin",
    "apellido" => "Chacon",
    "edad" => 24,
    "notas" => array(9,8.5,7)
);
array_push($estudiantes, $nuevo_estudiante);

//array_map()
echo "<h2>Uso de map()</h2>";
#Obtenemos el nombre y las edades de los estudiantes
$informacion = array_map(function($estudiante){
    return "Estudiante: " . $estudiante['nombre'] . "<br>" . "Edad: " . $estudiante['edad'] . "<br>";
}, $estudiantes);

print_r($informacion);

//array_filter()
echo "<h2>Uso de filter()</h2>";
#Obtenemos la informacion de los estudiantes mayores de 20
$informacion2 = array_filter($estudiantes, function($estudiante){
    return $estudiante['edad'] > 20;
});

print_r($informacion2);



?>