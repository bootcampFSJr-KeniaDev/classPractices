<?php

# Registro de acciones para deshacer cambios (undo)
// En un editor de texto o formulario, cada cambio del usuario se guarda como una acción. Si el usuario presiona "deshacer", se revierte el último cambio.

echo "<h2>Ejercicio Pila - Registro de acciones para deshacer cambios</h2>";
echo "<h4>Acciones Actuales</h4>";
$acciones = [
    ["tipo" => "escribir", "contenido" => "Hola"],
    ["tipo" => "borrar", "contenido" => "a"],
    ["tipo" => "escribir", "contenido" => "mundo"]
];

# Iteracion de acciones
echo "<ul>";
foreach($acciones as $item){
    echo "<li><strong>" . $item['tipo'] . "</strong> - " . $item['contenido'] . "</li>";
}
echo "</ul>";

// Deshacemos la ultima accion
$ultima_accion = array_pop($acciones);
echo "<hr>";
echo "<p><strong>Deshaciendo la accion:</strong> ". $ultima_accion['tipo'] . " - " . $ultima_accion['contenido'] . "</p>";
echo "<hr>";

echo "<h4>Acciones Pendientes</h4>";
echo "<ul>";
foreach($acciones as $item){
    echo "<li><strong>" . $item['tipo'] . "</strong> - " . $item['contenido'] . "</li>";
}
echo "</ul>";