<?php

require_once "./bootcamp.php";

class BootcampINCAF extends Bootcamps{
    public $institucion;

    public function __construct($nombre, $coach, $institucion) {
        parent::__construct($nombre, $coach);
        $this->institucion = $institucion;
    }

    public function temario($nivel = null) {
        if ($nivel === "basico") {
            $temario = ["HTML", "CSS", "Bootstrap", "taller de github"];
            echo "Temario Basico del INCAF: " . implode(", ", $temario);
        }else if($nivel === "intermedio") {
            $temario = ["javascript", "react", "taller de scrum", "typescript"];
            echo "Temario Intermedio del INCAF: " . implode(", ", $temario);
        }else{
            $temario = ["PHP", "POO", "SOLID", "patrones","laravel"];
            echo "Temario Avanzado del INCAF: " . implode(", ", $temario);
        }
    }
}