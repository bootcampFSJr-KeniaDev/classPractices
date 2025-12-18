<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style>
        body { font-family: sans-serif; }
        .header { margin-bottom: 20px; }
        .table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        .table th, .table td { border: 1px solid #ddd; padding: 8px; }
        .table th { background-color: #f2f2f2; text-align: left; }
        /* Clases CSS simples para resaltar estados/prioridades si lo deseas */
        .status-completada { background-color: #e6ffe6; }
        .priority-alta { color: #cc0000; font-weight: bold; }
    </style>
</head>
<body>
    <div class="header">
        <h1>{{ $title }}</h1>
        <p>Generado el: {{ now()->format('d/m/Y H:i:s') }}</p>
    </div>

    @if ($tasks->isEmpty())
        <p>No se encontraron tareas con los filtros seleccionados.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Estado</th>
                    <th>Prioridad</th>
                    <th>Fecha Límite</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    {{-- Asegúrate de usar la relación cargada (status) --}}
                    <td class="status-{{ strtolower($task->status ?? '') }}">
                        {{ $task->status ?? 'N/A' }}
                    </td> 
                    {{-- Asegúrate de usar la relación cargada (priority) --}}
                    <td class="priority-{{ strtolower($task->priority ?? '') }}">
                        {{ $task->priority ?? 'N/A' }}
                    </td>
                    <td>{{ $task->due_date ? \Carbon\Carbon::parse($task->due_date)->format('d/m/Y') : 'Sin fecha' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>