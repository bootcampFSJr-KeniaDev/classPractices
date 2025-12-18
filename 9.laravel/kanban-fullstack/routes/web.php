<?php

use App\Http\Controllers\PDFController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/filter', function () {
    return view('tasks.filter');
});

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
//obteniendo la vista del formulario
Route::get('/tasks/create', [TaskController::class, 'formRegister'])->name('tasks.create');
Route::post('/tasks/save', [TaskController::class, 'store'])->name('tasks.save');
Route::get('/tasks/edit/{task}', [TaskController::class, 'edit'])->name('tasks.edit');
Route::patch('/tasks/update/{taskId}', [TaskController::class, 'update'])->name('tasks.update');

//Obteniendo un reporte por estado o prioridad
Route::get('/tasks/report', [PDFController::class, 'generatePdfReport'])->name('tasks.report');
