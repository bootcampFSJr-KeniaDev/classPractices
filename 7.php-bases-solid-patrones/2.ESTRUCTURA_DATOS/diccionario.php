<?php

$diccionario = array(
    "nombre" => "Juan",
    "edad" => 30,
    "ciudad" => "Madrid"
);

echo $diccionario["nombre"]; // Imprime "Juan"
echo $diccionario["edad"];   // Imprime 30

$diccionario["edad"] = 31; 

unset($diccionario["ciudad"]); // Elimina la clave "ciudad" del mapa


?>