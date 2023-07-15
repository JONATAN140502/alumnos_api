<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoSaveRequest extends FormRequest
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
            "nombres" => "required",
            "apellidos"=>"required",
            "dni"=>"required",
            "codigo" => "required",
            "escuela_id"=>"required|exists:escuelas,id"


        ];
    }

    public function attributes()
    {
        return [
            "nombres" => "nombre",
            "apellidos"=>"apellidos",
            "dni"=>"dni",
            "codigo" => "codigo",
            "escuela_id"=>"escuela"
        ];
    }
}
