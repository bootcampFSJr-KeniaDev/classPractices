<?php

use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\PatientsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

#rutas protegidas
Route::middleware('auth:sanctum')->group((function (){
    Route::get('/v1/patients', [PatientsController::class, 'index']);
    Route::get('/v1/appointments/patients', [AppointmentsController::class, 'get_patients_by_doctor']);
    Route::post('/v1/logout', [AuthenticationController::class, 'logout']);
}));

#Ruta de pacientes
Route::post('/v1/patients', [PatientsController::class, 'store']);
Route::get('/v1/patients/{patientId}', [PatientsController::class, 'findById']);
Route::patch('/v1/patients/{patientId}', [PatientsController::class, 'update']);

#Ruta de citas
Route::post('/v1/appointments',[AppointmentsController::class, 'store']);
Route::get('/v1/appointments',[AppointmentsController::class, 'get_appointments']);

#Login
Route::post('/v1/login', [AuthenticationController::class, 'login']);

#redireccionando cuando la persona no coloca el token
Route::get('/v1/auth', function (){
    return response()->json([
        'message' => 'Access denied. Please log in to continue'
    ], 401);
})->name('login');