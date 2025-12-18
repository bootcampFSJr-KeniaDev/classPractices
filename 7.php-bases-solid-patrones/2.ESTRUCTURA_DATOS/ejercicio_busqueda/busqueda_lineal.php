<?php

$estudiantes = [
    ["id" => "A01", "nombre" => "Lucía Torres", "puntaje" => 78],
    ["id" => "A02", "nombre" => "Juan Pérez", "puntaje" => 92],
    ["id" => "A03", "nombre" => "Ana Martínez", "puntaje" => 65],
    ["id" => "A04", "nombre" => "Pedro López", "puntaje" => 92],
    ["id" => "A05", "nombre" => "Sofía Ramírez", "puntaje" => 83],
    ["id" => "A06", "nombre" => "Carlos Rivera", "puntaje" => 55],
    ["id" => "A07", "nombre" => "Laura Mejía", "puntaje" => 92],
    ["id" => "A08", "nombre" => "Andrés Castro", "puntaje" => 70],
];

#Busqueda lineal por puntaje
function busquedaLineal($lista, $valor_buscado){
    $resultado = [];
    foreach($lista as $estudiante){
        if($estudiante['puntaje'] == $valor_buscado){
            $resultado[] = $estudiante;
        }
    }
    return $resultado;
}

echo "<h2>📌 Estudiantes con puntaje 92 (búsqueda lineal)</h2>";
$encontrados_lineal = busquedaLineal($estudiantes, 92);
foreach($encontrados_lineal as $item){
    echo "{$item['nombre']}: {$item['puntaje']}<br>";
}