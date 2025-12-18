<?php

/**
 * Un palíndromo es una palabra o frase que se lee igual de izquierda a derecha y de derecha a izquierda. Por ejemplo, "anilina" es un palíndromo, ya que se lee igual en ambas direcciones.

*Para resolver este ejercicio, puedes utilizar una pila para almacenar los caracteres de la palabra o frase en orden inverso y una cola para almacenar los caracteres en su orden original. Luego, compararás los elementos de la pila y la cola para determinar si la palabra o frase es un palíndromo.
 */

function esPalindromo($palabra) {
    // Limpia la palabra eliminando espacios y convirtiéndola a minúsculas
    $palabra = strtolower(str_replace(' ', '', $palabra));
    //return $palabra;
    $pila = new SplStack();
    $cola = new SplQueue();

    // Llena la pila y la cola con los caracteres de la palabra
    for ($i = 0; $i < strlen($palabra); $i++) {
        //$caracter = $palabra[$i];

        //agregamos los elementos en el objeto pila y cola
        $pila->push($palabra[$i]);
        $cola->enqueue($palabra[$i]);
    }

    // Compara los elementos de la pila y la cola
    while (!$pila->isEmpty() && !$cola->isEmpty()) {
        if ($pila->pop() !== $cola->dequeue()) {
            return "No es palindromo"; // No es un palíndromo
        }
    }

    return "Es palindromo"; // Es un palíndromo
}

// Pruebas
$palabra1 = "anilina";
$palabra2 = "hola";
$palabra3 = "A mamá Roma le aviva el amor a mamá";

echo esPalindromo($palabra3);






?>