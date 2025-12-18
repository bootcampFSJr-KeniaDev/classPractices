@extends('home')

@section('content-home')

<div class="form-container">
    
    <h2 class="form-title">Editar Tarea</h2>
    <form method="POST" action="{{ route('tasks.update', $task->id) }}">
        @method('PATCH')
        @csrf
        <label class="form-label" for="title">Titulo</label>
        <input class="form-input" type="text" id="title" name="title" placeholder="Enter task" value="{{ $task->title }}">
        
        <label class="form-label" for="description">Descripcion</label>
        <textarea class="form-textarea" id="description" name="description" placeholder="Enter task description">{{ $task->description }}</textarea>
        

        <label class="form-label" for="due_date">Fecha Limite</label>
        <input class="form-input" type="date" id="due_date" name="due_date" value="{{ $task->due_date }}">

        <div class="form-actions">
            <a href="{{ route('tasks.index') }}" class="btn-cancel" type="button">Cancel</a>
            <button class="btn-submit" type="submit">Update Task</button>
        </div>
    </form>
</div>
@endsection