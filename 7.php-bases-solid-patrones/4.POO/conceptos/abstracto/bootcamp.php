<?php

/** una clase abstracta es una clase que no puede ser instanciada directamente. Su propósito es servir como plantilla para que otras clases hereden su funcionalidad. 
 * Las clases abstractas pueden contener métodos abstractos, métodos concretos, o ambos. 
 * Un método abstracto es un método declarado en la clase abstracta sin ninguna implementación */

abstract class Bootcamps{
    public $nombre;
    protected $coach;
    private $duracion;

    public function __construct($nombre, $coach) {
        $this->nombre = $nombre;
        $this->coach = $coach;
        $this->duracion = "6 meses";
    }

    // Método concreto que puede ser usado por las clases hijas
    public function getDuracion() {
        return $this->duracion;
    }

    public function setDuracion($duracion){
        $this->duracion = $duracion;
    }

    // Método abstracto: cada clase hija debe definir su propio temario
    abstract public function temario();
}