<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransportadoraRequest extends FormRequest
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
        $id= request()->segment(2);
        $rules= [
            "razao_social"      => "required",
            "cnpj"              => "required",
            "logradouro"        => "required",
            "numero"            => "required",
            "bairro"            => "required",
            "uf"                => "required"
        ];

        return $rules;
    }

}
