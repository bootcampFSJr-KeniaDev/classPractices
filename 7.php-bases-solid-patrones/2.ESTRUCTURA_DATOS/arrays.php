<?php
/**
 * Arrays:
*Los arrays son estructuras de datos fundamentales en PHP y se utilizan para almacenar una colección de elementos. Puedes crear arrays indexados (numéricos) y asociativos (usando claves personalizadas). Aquí tienes ejemplos de ambos:
 */


// Array indexado
$numeros = array(1, 2, 3, 4, 5);
//echo $numeros[0]; //1

// Array asociativo
$persona = array(
    "nombre" => "Juan",
    "edad" => 30,
    "ciudad" => "Madrid"
);

//echo $persona["ciudad"]; //Madrid

/**
 * Matrices:
*Las matrices en PHP son arrays multidimensionales que permiten organizar datos en filas y columnas. Puedes acceder a elementos de la matriz utilizando índices múltiples. Aquí tienes un ejemplo:
 */

$matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

print_r($matriz[0]); //[1,2,3]


/**
 * LISTAS = ARREGLOS
 */

$lista = array("Elemento1", "Elemento2", "Elemento3");
//Agregar un elemento al final de la lista
array_push($lista, "Elemento4"); 
echo $lista[0]; // Imprimirá "Elemento1"


?>