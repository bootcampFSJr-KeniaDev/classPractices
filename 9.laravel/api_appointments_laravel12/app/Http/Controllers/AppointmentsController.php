<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppointmentRequest;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AppointmentsController extends Controller
{
    //
    public function store(StoreAppointmentRequest $request){
        //validamos los datos
        $data = $request->validated();

        $data['status'] = 'pendiente';
        Appointment::create($data);
        return response()->json(['message' => 'Successfully registeres'], 201);
    }

    public function get_appointments(Request $request){
        $validator = Validator::make($request->all(), [
            'start_date' => 'date|nullable|date_format:Y-m-d',
            'end_date' => 'date|nullable|date_format:Y-m-d|after_or_equal:start_date'
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => 'Validation Error',
                'errors' => $validator->errors()
            ], 422);
        }

        //obtenemos las citas
        $query_appointments = Appointment::select('*');

        //creamos parametros opcionales
        $start_date = $request->query('start_date');
        $end_date = $request->query('end_date');

        //validamos si existe la fecha de inicio y fin
        if($start_date && $end_date){
            $query_appointments->whereBetween('date_appointment', [$start_date, $end_date]);
        }

        $data = $query_appointments->get();
        return response()->json($data, 200);
    }

    //metodo para obtener pacientes por doctor
    public function get_patients_by_doctor(Request $request){
        $user = $request->user();

        if($user->role_id !== 1){
            return response()->json(['message' => 'Access denied. This resource is only available to doctors.'], 403);
        }

        $data = Appointment::select('patients.name as patient','patients.date_born','patients.gender','users.name as doctor')->join('patients','appointments.patient_id','patients.id')->join('users','appointments.user_id','users.id')->where('users.id', $user->id)->get();

        return response()->json($data, 200);
    }
}
