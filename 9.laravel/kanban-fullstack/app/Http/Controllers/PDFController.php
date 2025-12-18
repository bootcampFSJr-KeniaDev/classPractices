<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePdfReport(Request $request)
    {
        $status = $request->get('status_id');
        $priority = $request->get('priority_id');

        // Construir la consulta de tareas
        $tasks = Task::query()
            ->when($status, function ($query, $status) {
                return $query->where('status', $status);
            })

            ->when($priority, function ($query, $priority) {
                return $query->where('priority', $priority);
            })
            
            ->orderBy('due_date', 'asc')
            ->get();

        $data = [
            'tasks' => $tasks,
            'title' => 'Reporte de Tareas por Estado y Prioridad'
        ];

        $pdf = PDF::loadView('reports.pdf_template', $data);

        return $pdf->stream('reporte_filtrado_' . now()->format('Ymd_His') . '.pdf');
    }
}
