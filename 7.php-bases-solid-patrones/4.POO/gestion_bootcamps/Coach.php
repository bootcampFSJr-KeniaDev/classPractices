<?php

class Coach {
    private string $nombre;
    private array $tecnologias;

    public function __construct($nombre, $tecnologias) {
        $this->nombre = $nombre;
        $this->tecnologias = $tecnologias;
    }

    public function getNombre(): string {
        return $this->nombre;
    }
}