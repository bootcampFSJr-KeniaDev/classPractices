<?php

require_once "./composicion.php";

class Autor {
    private string $nombre;
    private array $libros = []; // Agregación (los libros existen por separado)

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    public function agregarLibro(Libro $libro): void {
        $this->libros[] = $libro;
    }

    public function getLibros(): array {
        return $this->libros;
    }
}

// Ejemplo de uso
$autor = new Autor("Gabriel García Márquez");
$libro1 = new Libro("Cien años de soledad", "Random House");
$libro2 = new Libro("El amor en los tiempos del cólera", "Plaza & Janés");

$autor->agregarLibro($libro1);
$autor->agregarLibro($libro2);

/**
 * 📌 Explicación:

*   Un autor puede tener varios libros.
*   Sin embargo, los libros pueden existir sin estar asociados a un autor.
*   Esto es una agregación, porque los objetos pueden existir independientemente.
 */