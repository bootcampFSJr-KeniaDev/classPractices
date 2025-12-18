<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Pacientes</title>
</head>
<body>
    <main>
        <h1>Listado General de Pacientes</h1>
        <p><strong>Fecha de generación del reporte:</strong> {{$date}}</p>

        <table>
            <thead>
                <th>Id</th>
                <th>Nombre Completo</th>
                <th>Fecha de Nacimiento</th>
                <th>Direccion</th>
                <th>Telefono</th>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                    <tr>
                        <td>{{ $patient->id }}</td>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->date_born }}</td>
                        <td>{{ $patient->address }}</td>
                        <td>{{ $patient->phone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>