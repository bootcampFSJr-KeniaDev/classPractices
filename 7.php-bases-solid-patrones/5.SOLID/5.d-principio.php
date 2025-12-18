<?php

interface Usuario {
    public function obtenerPerfil(): string;
}

class Estudiantes implements Usuario {
    public $nombre;
    public $carnet;

    public function __construct($nombre, $carnet)
    {
        $this->nombre = $nombre;
        $this->carnet = $carnet;
    }

    public function obtenerPerfil(): string {
        return "Estudiante: $this->nombre<br>Carnet: $this->carnet";
    }
}

class Profesor implements Usuario {
    public $nombre;
    public $especialidad;

    public function __construct($nombre, $especialidad)
    {
        $this->nombre = $nombre;
        $this->especialidad = $especialidad;
    }

    public function obtenerPerfil(): string {
        return "Profesor: $this->nombre<br>Especialidad: $this->especialidad";
    }
}

class GestorInscripciones {
    private Usuario $usuario;

    public function __construct(Usuario $usuario) {
        $this->usuario = $usuario;
    }

    public function getInscripcion(){
        return $this->usuario->obtenerPerfil();
    }
}

// Ejemplo de inscripción para un estudiante
$estudiante = new Estudiantes("Kenia","KP2024");
$inscripcion = new GestorInscripciones($estudiante);
echo $inscripcion->getInscripcion();

echo "<br><br>";
// Ejemplo de inscripción para un profesor
$profesor = new Profesor("Luis Martínez", "Gramática Avanzada");
$inscripcionProfesor = new GestorInscripciones($profesor);
echo $inscripcionProfesor->getInscripcion();