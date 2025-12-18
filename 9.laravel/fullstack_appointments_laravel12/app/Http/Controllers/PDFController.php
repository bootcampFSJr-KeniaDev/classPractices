<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function index(){
        $patients = Patient::all();
        return view('reports.select_patient', compact('patients'));
    }

    public function getPatients(){
        $patients = Patient::all();
        $date = now()->format('d-m-Y');

        $pdf = Pdf::loadView('reports.patients', compact('patients','date'));
        return $pdf->stream('patients.pdf');
    }

    public function getAppointments(Request $request){
        $appointments = Appointment::join('patients', 'appointments.patient_id', '=', 'patients.id')->where('appointments.patient_id', $request->patient_id)->select('appointments.*', 'patients.name as patient_name')->get();
        $date = now()->format('d-m-Y');
        $patient = Patient::find($request->patient_id);

        $pdf = Pdf::loadView('reports.appointments', compact('appointments','date','patient'));
        return $pdf->stream('appointments.pdf');
    }
}
