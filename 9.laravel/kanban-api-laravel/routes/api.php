<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {
    Route::get('/tasks', [TaskController::class, 'index']);
    Route::post('/tasks', [TaskController::class, 'save']);
    Route::get('/tasks/filter', [TaskController::class, 'filterByStatusOrPriority']);
    Route::get('/tasks/{taskId}', [TaskController::class, 'show']);
    //ruta para consultar cuantos dias faltan para la fecha de vencimiento
    Route::get('/tasks/{taskId}/remaining-days', [TaskController::class, 'remainingDays']);

    //usuarios
    Route::post('/users', [UserController::class, 'store']);

    //iniciar sesion
    Route::post('/login', [AuthenticationController::class, 'login']);

    //validamos rutas que necesitan autenticacion y el usuario no esta logeado
    Route::get('/auth-required', function() {
        return response()->json(['message' => 'Access denied, please loin to continue'], 401);
    })->name('login');

    //agrupamos las rutas que necesitan autenticacion
    Route::middleware('auth:sanctum')->group(function () {
        Route::patch('/tasks/{taskId}', [TaskController::class, 'update']);
        //obtener tareas del usuario autenticado
        Route::get('/user/tasks', [UserController::class, 'tasksByAuthenticatedUser']);
        //cerrar sesion
        Route::post('/logout', [AuthenticationController::class, 'logout']);
    });

});

