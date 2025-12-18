<?php

class Editorial{
    private string $nombre;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre(): string {
        return $this->nombre;
    }
}

class Libro {
    private string $titulo;
    private Editorial $editorial; // Composición

    public function __construct(string $titulo, string $editorial) {
        $this->titulo = $titulo;
        $this->editorial = new Editorial($editorial);
    }

    public function getEditorial(): string {
        return $this->editorial->getNombre();
    }
}

/**
 * 📌 Explicación:
*   La editorial forma parte del libro y no puede existir sin él.
*   Se crea dentro del constructor de Libro, lo que la hace una         composición.
 */