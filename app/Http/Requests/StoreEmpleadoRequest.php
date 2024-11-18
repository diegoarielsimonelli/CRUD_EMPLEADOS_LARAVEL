<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmpleadoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [
            'Nombre' => 'required|string',
            'Apellido' => 'required|string',
            'Email' => 'required|email|unique:empleados,Email,' . $this->empleado->id,
            'Edad' => 'required|integer',
            'Foto' => 'required|url',
        ];
    }
}
