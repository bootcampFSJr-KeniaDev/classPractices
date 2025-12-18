<?php

require_once "./Coach.php";
require_once "./Estudiante.php";

// INTERFAZ: define el contrato
interface EvaluacionBootcamp {
    public function evaluarEstudiante($estudiante);
    public function entregarCertificado($estudiante);
}

class Bootcamp {
    protected string $titulo;
    protected string $descripcion;
    protected int $duracion; // en semanas
    protected string $temario;
    protected bool $esGratuito;
    protected float $precio;
    protected Coach $coach;
    protected array $estudiantes = [];

    //contador estatico, queremos saber cuantos bootcamps se han creado
    private static $contador = 0;

    public function __construct($titulo, $descripcion, $duracion, $temario, $esGratuito, $precio, Coach $coach) {
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->duracion = $duracion;
        $this->temario = $temario;
        $this->esGratuito = $esGratuito;
        $this->precio = $precio;
        $this->coach = $coach;

        //contando el bootcamp
        self::$contador++;
    }

    public function mostrarResumen() {
        echo "📘 Bootcamp: {$this->titulo}<br>";
        echo "Descripción: {$this->descripcion}<br>";
        echo "Duración: {$this->duracion} semanas<br>";
        echo "Coach: " . $this->coach->getNombre() . "<br>";
        echo "Precio: " . ($this->esGratuito ? "Gratuito<br>" : "$" . $this->precio . "<br>");
        echo "Estudiantes inscritos: " . count($this->estudiantes) . "<br><br>";
    }

    public function agregarEstudiante(Estudiante $estudiante) {
        $this->estudiantes[] = $estudiante;
        echo "✅ Estudiante {$estudiante->getNombre()} inscrito en {$this->titulo}<br>";
    }

    public function cambiarCoach(Coach $nuevoCoach) {
        $this->coach = $nuevoCoach;
        echo "👨‍🏫 Nuevo coach asignado: " . $nuevoCoach->getNombre() . "<br>";
    }

    public function calcularCostoFinal(): float {
        return $this->esGratuito ? 0 : $this->precio;
    }

    //creamos el metodo estatico
    public static function obtenerTotalBootcamps() {
        return self::$contador;
    }
}

// Subclases para aplicar herencia y polimorfismo
class BootcampFullstack extends Bootcamp implements EvaluacionBootcamp {
    public function mostrarResumen() {
        echo "🚀 Bootcamp Fullstack - {$this->titulo}<br>";
        parent::mostrarResumen();
    }

    public function evaluarEstudiante($estudiante) {
        echo "Evaluando a $estudiante con un proyecto final.\n";
    }

    public function entregarCertificado($estudiante) {
        echo "Entregando certificado a $estudiante.\n";
    }
}

$coach1 = new Coach("Karen Martínez", ["JavaScript", "PHP"]);
$coach2 = new Coach("Carlos Gómez", ["Python", "Data Science"]);

$bootcamp = new BootcampFullstack(
    "Desarrollo Web Fullstack",
    "Aprende HTML, CSS, JS, PHP y bases de datos.",
    12,
    "Frontend + Backend + Proyecto final",
    false,
    150.00,
    $coach1
);

$est1 = new Estudiante("Luis López", "luis@example.com");
$est2 = new Estudiante("Ana Cruz", "ana@example.com");

$bootcamp->mostrarResumen();
$bootcamp->agregarEstudiante($est1);
$bootcamp->agregarEstudiante($est2);
$bootcamp->mostrarResumen();

// Consultamos el total SIN necesidad de un objeto específico
echo "<br>Se han creado " . BootcampFullstack::obtenerTotalBootcamps() . " bootcamps.<br>";