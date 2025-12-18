<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion de citas por paciente</title>
</head>
<body>
    <h2>Reporte de Citas</h2>
    <p><strong>Paciente:</strong> {{ $patient->name }}</p>
    <p><strong>Fecha de generación:</strong> {{ $date }}</p>
    <hr>
    @if (count($appointments) > 0)
        @foreach ($appointments as $item)
            <section>
                <h3>Fecha: {{ $item->date_appointment }}</h3>
                <p><strong>Hora:</strong> {{ $item->time_appointment }}</p>
                <p><strong>Estado:</strong> {{ $item->status }}</p>
                <p><strong>Descripción:</strong> {{ $item->description }}</p>
                <hr>
            </section>
        @endforeach
    @else
        <h3>No hay Citas</h3>
    @endif
    
</body>
</html>