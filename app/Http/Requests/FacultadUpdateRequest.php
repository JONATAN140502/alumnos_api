<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FacultadUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            "nombre" => "required",
            "codigo" => "required"
        ];
    }

    public function attributes()
    {
        return [
            "nombre" => "nombre", 
            "codigo" => "codigo"
        ];
    }
}
