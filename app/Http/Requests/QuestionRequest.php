<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'title'          => ['required','string','min:3','max:70'],
            'body'         => ['required','string','min:3','max:1000']
        ];
    }
    public function messages()
    {
        return [
            'required'  => 'Este campo é obrigatório',
            'string'    => 'Este campo contém dados incorretos',
            'max'       => 'Este campo excedeu o número de caracteres permitidos',
            'min'       => 'Campo vazio ou com pouca informação',
        ];
    }
}
