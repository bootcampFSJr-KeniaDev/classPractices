<?php

/**
 * El polimorfismo se logra principalmente mediante 2 tecnicas 
 * sobreescritura (override)
 * sobrecarga     (overload)
 */

/**
 * sobreescritura de metodos: en una clase hija llamamos el mismo metodo para cambiar comportamiento
 * 
 * sobrecarga de metodos: En PHP, la sobrecarga de métodos como en otros lenguajes (con la misma función pero con diferentes parámetros) no es soportada de forma nativa. 
 * Sin embargo, se puede simular la sobrecarga utilizando argumentos opcionales o verificando el tipo y la cantidad de parámetros en un mismo método.
 */

class Bootcamp{
    public $nombre;
    protected $coach;
    private $duracion;
    
    public function __construct($nombre, $coach)
    {
        $this->nombre = $nombre;
        $this->coach = $coach;
        $this->duracion = "6 meses";
    }

    public function temario_bootcamp(){
        $temario = ["POO","SOLID","Base de datos"];
        echo "Temario del Modulo 5 POO<br>";
    }

    public function getDuracion(){
        return $this->duracion;
    }

    public function setDuracion($duracion){
        $this->duracion = $duracion;
    }
}

class BootcampINCAF extends Bootcamp{
    public $institucion;

    public function __construct($nombre, $coach, $institucion) {
        parent::__construct($nombre, $coach);
        $this->institucion = $institucion;
    }

    // Sobrescritura del método temario_bootcamp() con simulación de sobrecarga, se pone = null porque php no tiene soporte de sobrecarga
    public function temario_bootcamp($nivel = null) {
        if ($nivel === "avanzado") {
            $temario = ["javascript", "react", "taller de scrum avanzado", "taller de git avanzado", "devops"];
            echo "Temario Avanzado del INCAF: " . implode(", ", $temario);
        } else {
            $temario = ["javascript", "react", "taller de scrum", "taller de git", "applaudo"];
            echo "Temario Básico del INCAF: " . implode(", ", $temario);
        }
    }
}

$incaf = new BootcampINCAF("incaf-fsj14", "karla lopez", "Gobierno SV");
$incaf->temario_bootcamp(); // Imprime "Temario Básico del INCAF: javascript, react, taller de scrum, taller de git, applaudo"
echo "<br>";
$incaf->temario_bootcamp("avanzado"); // Imprime "Temario Avanzado del INCAF: javascript, react, taller de scrum avanzado, taller de git avanzado, devops"