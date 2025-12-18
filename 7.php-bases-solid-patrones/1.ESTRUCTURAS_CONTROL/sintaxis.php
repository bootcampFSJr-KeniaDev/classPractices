<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Introduccion a PHP</h1>

    <?php
        //primer comentario
        #segundo comentario
        /**
         * tercer comentario
         * parrafo....
         */

        #Asignacion de variables y constantes

        $subtitulo = "Asignacion de variables"; //string
        $numero = 23; //int
        $numero2 = 34.5; //double o float
        $boolean = true; //booleano
        $booelan2 = FALSE;
        //undefined vs null
        $undefined;
        $nulo = null;

        $array1 = ["cadena",12,54.67,false,null];

        $array2 = array("computadora","telefonos","tablet",100);

        #imprimiendo variables
        /**
         * echo
         * print_r
         * var_dump
         */

        echo $subtitulo;
        echo $numero;
        echo "Hola";
        echo "<h2>Bienvenidos FSJ19</h2>";

        echo "<br>";
        #print_r visualiza el arreglo con su posicion
        print_r($array2);
        echo "<br>";
        #var_dump visualiza el arreglo con su posicion y tipo de dato
        var_dump($array2);
        
        #constantes
        /**
         * define()
         * const
         */

        define("PI", 3.1416);
        const DUI = 18572673;
        echo "<br>";
        #concatenar (.)
        echo "El valor de PI es de: " . PI;
        echo "<br>";
        echo DUI;

        $saludo = "Gusto de conocerte";
        echo "Hola, buenas noches $saludo";

        echo 'Hola, buenas noches $saludo';

        #Declarando un objeto
        /**
         * persona: {
         *     nombre: "Diego",
         *      apellido: "Hernan"
         * }
         */

        #clases
        class Persona{
            //public, private, protected
            public $nombre;
            public $apellido;

            //metodos

        }

        echo "<br>";
        #llamamos la clase
        $persona = new Persona();
        $persona->nombre = "Diego";
        $persona->apellido = "Hernan";
        print_r($persona);
    ?>
    <h2></h2>
</body>
</html>