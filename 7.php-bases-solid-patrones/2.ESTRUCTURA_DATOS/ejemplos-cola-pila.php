<?php

#EJERCICIO DE PILA: Simular cómo el usuario visita páginas y luego retrocede usando una pila (LIFO).
//Historial de Navegacion

echo "<h3>Ejemplo de pila - Historial de Navegacion</h3>";
// Crear una pila vacía
$historial = [];

// El usuario visita páginas
array_push($historial, "Inicio");
array_push($historial, "Productos");
array_push($historial, "Carrito");

// Mostrar historial actual
echo "Historial actual:<br>";
print_r($historial);
echo "<br>";
// Retroceder una página (como botón 'Atrás')
$ultimaPagina = array_pop($historial);
echo "Volviendo desde: $ultimaPagina<br>";

// Mostrar historial después de retroceder
echo "Historial después de retroceder:<br>";
print_r($historial);


echo "<h3>Ejemplo de cola - Atencion al Cliente</h3>";
// Crear una cola vacía
$cola = [];

// Llegan personas
array_push($cola, "Cliente 1");
array_push($cola, "Cliente 2");
array_push($cola, "Cliente 3");

// Mostrar la cola actual
echo "Cola actual:<br>";
print_r($cola);
echo "<br>";
// Atender al primer cliente
$atendido = array_shift($cola);
echo "Atendiendo a: $atendido<br>";

// Mostrar la cola después de atender
echo "Cola después de atender:<br>";
print_r($cola);