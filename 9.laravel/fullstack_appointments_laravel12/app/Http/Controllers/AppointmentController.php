<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(){
        $data = Appointment::select('patients.name as patient','users.name as doctor','appointments.date_appointment as date','appointments.time_appointment as time','appointments.reason', 'appointments.status')->join('users','appointments.user_id','users.id')->join('patients','appointments.patient_id','patients.id')->get();

        $appointments = [];
        foreach($data as $item){
            //es la estructura que pide el calendar
            $appointments[] = [
                'title' => 'Consulta médica',
                'patient' => $item->patient,
                'doctor' => $item->doctor,
                'start' => $item->date . 'T' . $item->time,
                'reason' => $item->reason,
                'status' => $item->status,
            ];
        }

        // dd($appointments);
        return view('appointments.calendar', compact('appointments'));
    }
}
