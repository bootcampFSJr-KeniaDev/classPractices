<?php

class Estudiante {
    private string $nombre;
    private string $correo;

    public function __construct($nombre, $correo) {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function getNombre(): string {
        return $this->nombre;
    }
}