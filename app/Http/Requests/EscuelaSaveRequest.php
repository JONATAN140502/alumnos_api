<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EscuelaSaveRequest extends FormRequest
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
            "nombre" => "required",
            "codigo" => "required",
            "facultad_id"=>"required|exists:facultads,id"
        ];
    }

    public function attributes()
    {
        return [
            "nombre" => "nombre" ,
            "codigo" => "codigo"
        ];
    }
}
