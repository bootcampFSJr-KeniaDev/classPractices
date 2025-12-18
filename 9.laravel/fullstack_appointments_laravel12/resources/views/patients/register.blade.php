@extends('home')

@section('content')
    <section class="container">
        <h1 class="text-center title my-4">Formulario de Registro</h1>
        <form action="{{route('patients.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                @error('name')
                    <small class="text-danger fw-bold">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="date_born" name="date_born" value="{{old('date_born')}}">
                @error('date_born')
                    <small class="text-danger fw-bold">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Genero</label>
                <select name="gender" class="form-control">
                    <option value="Femenino">Femenino</option>
                    <option value="Masculino">Masculino</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Direccion</label>
                <input type="text" class="form-control" name="address" value="{{old('address')}}">
                @error('address')
                    <small class="text-danger fw-bold">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="phone" value="{{old('phone')}}">
                @error('phone')
                    <small class="text-danger fw-bold">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Correo Electronico</label>
                <input type="text" class="form-control" name="email" value="{{old('email')}}">
                @error('email')
                    <small class="text-danger fw-bold">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-dark" value="Guardar Datos">
            </div>
        </form>
    </section>
@endsection