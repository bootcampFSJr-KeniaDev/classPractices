@extends('home')

@section('content')
    <section class="container">
        <h1 class="title">Reporte de citas por paciente</h1>

        <div class="mt-4">
            <form action="{{route('appointments.report')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="paciente" class="form-label">Selecciona un paciente</label>
                    <select name="patient_id" id="paciente" class="form-select">
                        @foreach ($patients as $patient)
                            <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Generar reporte</button>
            </form>
        </div>
    </section>
@endsection