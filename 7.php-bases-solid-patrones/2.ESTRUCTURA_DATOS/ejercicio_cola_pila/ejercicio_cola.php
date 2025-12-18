<?php

# Procesamiento de pedidos en una tienda online
// Cada pedido contiene informacion del cliente y los productos. Los pedidos se atienden en orden de llegada
echo "<h2>Ejercicio Cola - Procesamiento de pedidos</h2>";
echo "<h4>Pedidos Actuales</h4>";
$pedidos = [
    [
        "cliente" => "Carlos",
        "productos" => ["Camiseta","Pantalon"]
    ],
    [
        "cliente" => "Laura",
        "productos" => ["Vestido rosa","Blusa"]
    ],
    [
        "cliente" => "Juanito",
        "productos" => ["Gorra","Falda floreada"]
    ],
];

# Iterando la lista de productos
foreach($pedidos as $item){
    echo "<p><strong>Cliente:</strong> " . $item['cliente'] . "</p>";
    echo "<p><strong>Lista de Productos: </strong> " . implode(", ", $item['productos'])  . "</p>";
}

# Procesar el primer pedido
$procesando = array_shift($pedidos);
echo "<hr>";
echo "<p><strong>Procesando Pedido del Cliente:</strong> ". $procesando['cliente'] ."</p>";
echo "<hr>";

# Pedidos Pendiente
echo "<h4>Pedidos Pendientes</h4>";

foreach($pedidos as $item){
    echo "<p><strong>Cliente:</strong> " . $item['cliente'] . "</p>";
    echo "<p><strong>Lista de Productos: </strong> " . implode(", ", $item['productos'])  . "</p>";
}