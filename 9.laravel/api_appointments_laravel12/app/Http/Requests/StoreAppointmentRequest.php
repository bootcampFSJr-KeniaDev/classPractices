<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //validamos que el id del paciente y el usuario existan en la bd
            'patient_id' => 'required|exists:patients,id',
            'user_id' => 'required|exists:users,id',
            //validamos que la fecha de la cita debe ser posterior a la fecha actual
            'date_appointment' => 'required|date_format:Y-m-d|after_or_equal:today',
            //valida el formato de horas por 24 horas
            'time_appointment' => 'required|date_format:H:i',
            'reason' => 'required|string'
        ];
    }
}
