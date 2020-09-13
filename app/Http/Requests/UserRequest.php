<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'          => ['required','string','min:3','max:70'],
            //'email'         => ['required','unique:users','email','max:70']
        ];
    }
    public function messages()
    {
        return [
            'required'  => 'O campo :attribute é obrigatório',
            'string'    => 'O campo :attribute contém dados incorretos',
            'max'       => 'O campo :attribute excedeu o número de caracteres permitidos',
            'min'       => 'O campo :attribute está parcialmente incompleto',
            'unique'    => 'Este :attribute já está sendo utilizado',
            'email'     => ':attribute não é um E-mail válido',
        ];
    }
}
