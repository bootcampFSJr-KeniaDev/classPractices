<?php

function busquedaBinaria($arreglo, $valor) {
    $inicio = 0;
    $fin = count($arreglo) - 1;
    
    while ($inicio <= $fin) {
        $medio = intval(($inicio + $fin) / 2);
        
        // Comprobamos si el valor está en el punto medio
        if ($arreglo[$medio] == $valor) {
            return $medio;
        }
        
        // Si el valor es menor, ignoramos la mitad derecha
        if ($arreglo[$medio] > $valor) {
            $fin = $medio - 1;
        }
        // Si el valor es mayor, ignoramos la mitad izquierda
        else {
            $inicio = $medio + 1;
        }
    }
    
    // Si no encontramos el valor, retornamos -1
    return -1;
}

// Ejemplo de uso
$arreglo = array(1, 3, 5, 7, 9, 11, 13, 15);
$valor = 7;

$resultado = busquedaBinaria($arreglo, $valor);

if ($resultado != -1) {
    echo "El valor $valor se encuentra en el índice $resultado.";
} else {
    echo "El valor $valor no se encuentra en el arreglo.";
}
?>
