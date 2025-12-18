<?php

interface AssignableSchedule {
    public function assignSchedule($schedule);
}

class Profesor implements AssignableSchedule {
    public function assignSchedule($schedule) {
        // Código para asignar un horario
    }
}

class ProfesorInvitado {
    public $nombre;
    
    public function establecerDisponibilidad(array $horarios) {
        echo "Disponibilidad registrada para el profesor invitado {$this->nombre}: " . implode(", ", $horarios);
    }
}
