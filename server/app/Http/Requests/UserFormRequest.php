<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserFormRequest extends FormRequest
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
        $rules =  [
            'name' => [
                'required',
                'min:2'
            ],
            'cpf' => [
                'required',
                'min:11',
                'max:11',
                'unique:users'
            ],
            'email' => [
                'required',
                'email',
                'unique:users'
            ],
            'profile_id' => [
                'required',
                'integer',
                Rule::exists('profiles', 'id')
            ],
            // posteriormente adicionar aqui as validações de endereço.
        ];

        if ($this->method() === 'PUT' || $this->method() === 'PATCH') {
            $rules['cpf'] = [
                'required',
                'min:11',
                'max:11',
                Rule::unique('users')->ignore($this->user),
            ];

            $rules['email'] = [
                'required',
                'email',
                Rule::unique('users')->ignore($this->user),
            ];
        }

        return $rules;
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Erros de validação',
            'data'      => $validator->errors()
        ]));
    }
}
