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
            'required'  => 'O campo :attribute é obrigatório',
            'string'    => 'O campo :attribute contém dados incorretos',
            'max'       => 'O campo :attribute excedeu o número de caracteres permitidos',
            'min'       => 'O campo :attribute está parcialmente incompleto',
        ];
    }
}
