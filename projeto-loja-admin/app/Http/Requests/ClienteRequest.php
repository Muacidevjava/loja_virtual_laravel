<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            "tipo_cliente"      => "required",
            "nome_razao_social" => "required",
            "cpf_cnpj"          => "required",
            "indFinal"          => "required",
            "logradouro"        => "required",
            "numero"            => "required",
            "bairro"            => "required",
            "uf"                => "required"
        ];


        return $rules;
    }
}
