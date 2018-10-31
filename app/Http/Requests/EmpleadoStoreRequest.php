<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
        'p_nombre' => 'required', 
        's_nombre' => 'required', 
        'p_apellido' => 'required',
        's_apellido' =>' required', 
        'genero' => 'required', 
        'fecha_nac' => 'required',
        'lugar_nac' => 'required', 
        'estado_civil' => 'required',
        'inicio_labores' => 'required',
        'cui' => 'required', 
        'telefono' => 'required',
        'estado' => 'required', 
        'usuario_id' => 'required',
        'cargo_id' => 'required', 
        'centro_id' => 'required'

        ];
    }
}
