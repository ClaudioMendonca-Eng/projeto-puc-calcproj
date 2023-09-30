<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateClienteFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $id =  $this->id ?? '';

        return [
            'empresa_sistemas_id' => 'nullable',
            'empresa' => "required|min:3|max:255|unique:clientes,empresa,{$id},id",
            'cnpj' => "required|min:3|max:255|unique:clientes,cnpj,{$id},id",
            'endereco' => "required|min:3|max:255|unique:clientes,endereco,{$id},id",
            'cep' => "required|min:3|max:255|unique:clientes,cep,{$id},id",
            'email' => ['required', 'email', "unique:users,email,{$id},id"],
            'telefone' => "required|min:3|max:255|unique:clientes,telefone,{$id},id",
            'responsavel' => "required|min:3|max:255|unique:clientes,responsavel,{$id},id",
            'logo' => 'nullable', 'image', 'max:1024',
            'ativo' => 'nullable',

        ];
    }



}
