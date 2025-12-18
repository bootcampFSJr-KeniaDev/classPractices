<?php

function busquedaLineal($arreglo, $valor) {
    for ($i = 0; $i < count($arreglo); $i++) {
        if ($arreglo[$i] == $valor) {
            return $i;
        }
    }
    return -1;
}

$arreglo = array(3, 5, 1, 4, 7, 9);
$valor = 7;
$resultado = busquedaLineal($arreglo, $valor);

if ($resultado != -1) {
    echo "El valor $valor se encuentra en el índice $resultado.";
} else {
    echo "El valor $valor no se encuentra en el arreglo.";
}

?>