<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
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
            'title' => 'required|string|max:50',
            'description' => 'required|string',
            'due_date' => 'nullable|date|after_or_equal:today'
        ];
    }

    /**
     * Get custom error messages for validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'El título es obligatorio.',
            'title.string'   => 'El título debe ser texto.',
            'title.max'      => 'El título no debe superar los 50 caracteres.',

            'description.required' => 'La descripción es obligatoria.',
            'description.string'   => 'La descripción debe ser texto.',

            'due_date.date' => 'La fecha de vencimiento debe tener un formato válido.',
            'due_date.after_or_equal' => 'La fecha de vencimiento no puede ser anterior a la fecha actual.'
        ];
    }
}
