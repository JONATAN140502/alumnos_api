<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoUpdateRequest extends FormRequest
{
   
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
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
