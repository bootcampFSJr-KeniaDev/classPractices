@extends('home')

@section('content')
    <section class="container">
        <h1 class="title text-center mt-5">Listado de Pacientes</h1>

        @if(session('success'))
            <div class="position-fixed top-0 end-0 p-3" style="z-index: 1055">
                <div id="toastSuccess" class="toast align-items-center text-white bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                    {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                </div>
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center my-4">
            <a href="{{url('/patients/create')}}" class="btn btn-patient"><i class="bi bi-person-fill-add"></i> Nuevo Paciente</a>

            <a href="{{url('/report')}}" class="btn btn-patient">Generar Reporte</a>
        </div>
        <div class="my-4">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Paciente</th>
                    <th>Genero</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach ($patients as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->gender}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->email}}</td>
                            <td>
                                <a href="{{route('patients.edit', $item->id)}}" class="btn btn-warning">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection