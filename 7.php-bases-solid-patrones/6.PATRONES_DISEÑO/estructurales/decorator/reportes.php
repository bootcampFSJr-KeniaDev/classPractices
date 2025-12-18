<?php 
//Sin aplicar
class Reportes {
    public function generar() {
        return "Contenido del reporte";
    }
}

class ReporteConCabecera {
    public function generar() {
        return "Cabecera\n" . "Contenido del reporte";
    }
}

class ReporteConPieDePagina {
    public function generar() {
        return "Contenido del reporte\n" . "Pie de página";
    }
}

// Uso sin Decorator
$reporte = new Reportes();
echo $reporte->generar();

// Si quiero agregar cabecera y pie de página, tendría que crear nuevas clases o métodos
$reporteConCabecera = new ReporteConCabecera();
echo $reporteConCabecera->generar();

$reporteConPieDePagina = new ReporteConPieDePagina();
echo $reporteConPieDePagina->generar();

#APLICANDO PATRON
interface Reporte {
    public function generar();
}

class ReporteBasico implements Reporte {
    public function generar() {
        return "Contenido del reporte";
    }
}

abstract class ReporteDecorator implements Reporte {
    protected $reporte;

    public function __construct(Reporte $reporte) {
        $this->reporte = $reporte;
    }
}

class CabeceraDecorator extends ReporteDecorator {
    public function generar() {
        return "Cabecera\n" . $this->reporte->generar();
    }
}

class PieDePaginaDecorator extends ReporteDecorator {
    public function generar() {
        return $this->reporte->generar() . "\nPie de página";
    }
}

// Uso con Decorator
$reporte = new ReporteBasico();
$reporteConCabecera = new CabeceraDecorator($reporte);
$reporteConPieDePagina = new PieDePaginaDecorator($reporteConCabecera);

echo $reporteConPieDePagina->generar();


?>