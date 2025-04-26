<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
            "nome"          => "required",
            "origem"        => "required",
            "preco_venda"   => "required",
            "ncm"           => "required",
            "imagem"        =>"nullable"
        ];

        if(!is_null(request()->imagem)){
            $rules['imagem']     = 'file|mimetypes:image/png,image/jpg,image/jpeg|image:jpg,png,jpeg';
        }
        return $rules;
    }
}
