<?php

interface Inscripcion {
    public function inscribirEstudiante();
}

interface Asignacion {
    public function asignarProfesor();
}

interface Pagos {
    public function registrarPago();
}

class Curso implements Inscripcion, Asignacion {
    public function inscribirEstudiante() {
        // Código para inscribir estudiante
    }

    public function asignarProfesor() {
        // Código para asignar profesor
    }
}
