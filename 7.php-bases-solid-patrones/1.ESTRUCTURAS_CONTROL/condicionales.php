<?php

function terminarNumero($numero){
    if($numero % 10 == 4){
        echo "El numero $numero termina en 4 :)";
    }else{
        echo "El numero no termina en 4 :(";
    }

    #operador ternario
    return $numero % 10 == 4 ? "El numero $numero termina en 4 :)" : "El numero no termina en 4 :(";
}
terminarNumero(1024);


function rangoSalarios($salario){
    if($salario >= 501 && $salario <= 650){
        echo "Usted es cajero";
    }else if($salario >= 360 && $salario <= 500){
        echo "Usted es vendedor";
    }else if($salario > 650){
        echo "Usted es administrador";
    }else{
        echo "No esta en el rango";
    }
}
echo "<br>";
echo rangoSalarios(470);
echo "<br>";
echo rangoSalarios(100);

function calcularImpuesto($vehiculo, $pasajeros){
    if($vehiculo == "vehiculo particular"){
        $total = $pasajeros * 0.75;
        echo "El total de impuestos es $total";
    }else if($vehiculo == "autobus"){
        $total = $pasajeros * 1.50;
        echo "El total de impuestos es $total";
    }else if($vehiculo == "microbus"){
        $total = $pasajeros * 1.25;
        echo "El total de impuestos es $total";
    }else if($vehiculo == "moto taxi"){
        $total = $pasajeros * 0.50;
        echo "El total de impuestos es $total";
    }else if($vehiculo == "moto"){
        $total = $pasajeros * 0.30;
        echo "El total de impuestos es $total";
    }else{
        $total = $pasajeros * 3.00;
        echo "El total de impuestos es $total";
    }

}
echo "<br>";
calcularImpuesto(strtolower("MOTO"), 2);


function calcularImpuestoV2($tipo, $cantidad){
    switch($tipo){
        case "vehiculo particular":
            $total = $cantidad * 0.75;
            echo "El total de impuestos es $$total";
            break;

        case "autubus":
            $total = $cantidad * 1.50;
            echo "El total de impuestos es $$total";
            break;

        case "microbus":
            $total = $cantidad * 1.25;
            echo "El total de impuestos es $$total";
            break;

        case "moto":
            $total = $cantidad * 1.25;
            echo "El total de impuestos es $$total";
            break;

        default:
            $total = $cantidad * 3.00;
            echo "El total de impuestos es $$total";
            
    }
}

echo "<br>";
calcularImpuestoV2("microbus", 10);

?>