<?php

/**
 * Colas:
*Una cola es una estructura de datos que sigue el principio "primero en entrar, primero en salir" (FIFO, por sus siglas en inglés). 
Puedes utilizar un array en PHP para simular una cola. Para agregar un elemento a la cola, puedes utilizar la función array_push, y 
para quitar el elemento en la parte delantera de la cola, puedes usar la función array_shift.
 */

$cola = array();
//Agregamos elementos a la cola
array_push($cola, "elemento1");
array_push($cola, "elemento2");
array_push($cola, "elemento3");

//Extraemos el primer elemento de la cola
$elemento = array_shift($cola); 

/**
 * Hablando de lo mas avanzado, tenemos la clase
 * SplQueue para crear colas
 */


// Crear una cola
$cola = new SplQueue();

// Agregar elementos a la cola
$cola->enqueue("elemento1");
$cola->enqueue("elemento2");
$cola->enqueue("elemento3");
print_r($cola);

// Obtener y quitar elementos de la cola
$elemento1 = $cola->dequeue(); // $elemento1 contendrá "elemento1"
$elemento2 = $cola->dequeue(); // $elemento2 contendrá "elemento2"

echo "\n";
echo $elemento1;
echo "\n";
print_r($cola);


?>