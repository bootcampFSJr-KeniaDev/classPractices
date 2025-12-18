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

//Ordenar el arreglo por puntaje
function quickSort($lista){
    if (count($lista) <= 1) return $lista;

    $pivote = $lista[0];
    $menores = [];
    $mayores = [];

    for ($i = 1; $i < count($lista); $i++) {
        if ($lista[$i]['puntaje'] <= $pivote['puntaje']) {
            $menores[] = $lista[$i];
        } else {
            $mayores[] = $lista[$i];
        }
    }

    return array_merge(quicksort($menores), [$pivote], quicksort($mayores));
}

function busquedaBinaria($listaOrdenada, $valorBuscado){
    $inicio = 0;
    $fin = count($listaOrdenada) - 1;

    while($inicio <= $fin){
        $posicion_medio = intval(($inicio + $fin) / 2);
        $puntaje_actual = $listaOrdenada[$posicion_medio]['puntaje'];

        if($puntaje_actual == $valorBuscado){
            return $listaOrdenada[$posicion_medio];
        }

        if($puntaje_actual > $valorBuscado){
            $fin = $posicion_medio - 1;
        }else{
            $inicio = $posicion_medio + 1;
        }
    }

    return -1;
}

echo "<h2>📌 Lista Ordena</h2>";
$lista_ordenada = quickSort($estudiantes);
print_r($lista_ordenada);

echo "<h2>📌 Búsqueda binaria de puntaje 83</h2>";
$encontrado = busquedaBinaria($lista_ordenada, 83);
if ($encontrado) {
    echo "✅ Encontrado: {$encontrado['nombre']} con {$encontrado['puntaje']}<br>";
} else {
    echo "❌ No se encontró ese puntaje.\n";
}
