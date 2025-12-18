<?php

function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

$numero = 5;
$resultado = factorial($numero);
echo "El factorial de $numero es $resultado.";

?>
