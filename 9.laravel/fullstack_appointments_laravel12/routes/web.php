<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('/patients', PatientController::class);
/** uso de rutas de citas */
Route::get('/appointments/calendar', [AppointmentController::class, 'index'])->name('appointments.calendar');

//rutas de reportes
Route::get('/report', [PDFController::class, 'getPatients'])->name('patients.report');
Route::get('/report/appointments/select', [PDFController::class, 'index']);
Route::post('/report/appointments', [PDFController::class, 'getAppointments'])->name('appointments.report');

