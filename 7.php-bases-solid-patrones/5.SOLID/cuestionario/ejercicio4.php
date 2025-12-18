<?php

class ReportGenerator {
    public function generateReport($format) {
        if ($format === 'PDF') {
            // Generar reporte en PDF
        } elseif ($format === 'CSV') {
            // Generar reporte en CSV
        } else {
            throw new Exception("Formato no soportado");
        }
    }
}
