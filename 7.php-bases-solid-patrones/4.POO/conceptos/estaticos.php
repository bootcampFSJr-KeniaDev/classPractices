<?php

#Metodos Estaticos
/**son funciones que pertenecen a la clase en sí y no a las instancias u objetos creados de esa clase. 
 * Estos métodos se pueden invocar directamente usando el nombre de la clase sin necesidad de crear un objeto de la misma. 
 * Esto es útil cuando necesitas una función que no depende de los datos de una instancia específica, sino de una funcionalidad que la clase puede ofrecer en general. */

class Calculadora{
    public static function sumar($a, $b){
        return $a + $b;
    }

    public static function restar($a, $b){
        return $a - $b;
    }

    public static function multiplicar($a, $b){
        return $a * $b;
    }

    public static function dividir($a, $b){
        return $a / $b;
    }
}

#Invocamos el metodo desde fuera de la clase
$sumar = Calculadora::sumar(50,45);
echo "La suma es: $sumar";
echo "<br>";
$restar = Calculadora::restar(20,12);
echo "La resta es: $restar";
