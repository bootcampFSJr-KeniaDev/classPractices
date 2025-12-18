@extends('home')

@section('content-home')

<div class="form-container">
    <h2 class="form-title">Crear Tarea</h2>
    <form method="POST" action="{{ route('tasks.save') }}">
        @csrf
        <label class="form-label" for="title">Titulo</label>
        <input class="form-input" type="text" id="title" name="title" placeholder="Enter task title" value="{{old('title')}}">
        @error('title')
            <small class="text-danger fw-bold">{{ $message }}</small>
        @enderror

        <label class="form-label" for="description">Descripcion</label>
        <textarea class="form-textarea" id="description" name="description" placeholder="Enter task description">{{old('description')}}</textarea>
        @error('description')
            <small class="text-danger fw-bold">{{ $message }}</small>
        @enderror

        <label class="form-label" for="due_date">Fecha Limite</label>
        <input class="form-input" type="date" id="due_date" name="due_date" value="{{old('due_date')}}">
        @error('due_date')
            <small class="text-danger fw-bold">{{ $message }}</small>
        @enderror

        <label class="form-label" for="assignee">Asignar Usuario</label>
        <select class="form-select" id="assignee" name="user_id">
            @foreach ($users as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>

        <label class="form-label" for="status">Estado</label>
        <select class="form-select" id="status" name="status" required>
            <option value="pendiente">pendiente</option>
            <option value="en proceso">en proceso</option>
            <option value="completada">completada</option>
        </select>

        <label class="form-label" for="priority">Prioridad</label>
        <select class="form-select" id="priority" name="priority" required>
            <option value="baja">baja</option>
            <option value="media">media</option>
            <option value="alta">alta</option>
        </select>

        <div class="form-actions">
            <a href="{{ route('tasks.index') }}" class="btn-cancel" type="button">Cancel</a>
            <button class="btn-submit" type="submit">Create Task</button>
        </div>
    </form>
</div>
@endsection