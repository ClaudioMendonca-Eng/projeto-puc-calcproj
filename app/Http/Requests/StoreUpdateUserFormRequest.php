<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Unique;

class StoreUpdateUserFormRequest extends FormRequest
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

        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'funcao' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', "unique:users,email,{$id},id"],
            'password' => ['required', 'string', 'min:8'],

        ];

        if ($this->method() == 'PUT') {
            $rules['password'] = ['nullable', 'string', 'min:8', 'max:15'];
        }

        return $rules;
    }
}
