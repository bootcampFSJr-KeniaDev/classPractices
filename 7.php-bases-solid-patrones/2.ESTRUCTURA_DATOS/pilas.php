<?php
/**
 * Pilas:
*Una pila es una estructura de datos que sigue el principio "último en entrar, primero en salir" (LIFO, por sus siglas en inglés). 
Puedes utilizar un array en PHP para simular una pila. Para agregar un elemento a la pila, puedes utilizar la función array_push, y para quitar el elemento superior de la pila, 
puedes usar la función array_pop.
 */

$pila = array();
//Agregamos elementos a la pila
array_push($pila, "elemento1");
array_push($pila, "elemento2");
array_push($pila, "elemento3");

//Extraemos el ultimo elemento de la pila
$elemento = array_pop($pila);

/**
 * Hablando de lo mas avanzado, tenemos la clase
 * SplStack para crear pilas
 */

// Crear una pila
$pila = new SplStack();

// Agregar elementos a la pila
$pila->push("elemento1");
$pila->push("elemento2");
$pila->push("elemento3");

// Obtener y quitar elementos de la pila
$elemento1 = $pila->pop(); // $elemento1 contendrá "elemento3"
$elemento2 = $pila->pop(); // $elemento2 contendrá "elemento2"


?>