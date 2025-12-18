<?php
require_once "./composicion.php";

class Usuario {
    private string $nombre;
    private array $prestamos = []; // Asociación (simple relación)

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    public function prestarLibro(Libro $libro): void {
        $this->prestamos[] = $libro;
    }

    public function getPrestamos(): array {
        return $this->prestamos;
    }
}

// Ejemplo de uso
$usuario = new Usuario("Carlos");
$usuario->prestarLibro($libro1);
$usuario->prestarLibro($libro2);

