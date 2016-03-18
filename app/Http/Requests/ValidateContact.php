<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidateContact extends Request
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
            'name' => 'required|min:2',
            'mail' => 'required',
            'content' => 'required|min:10'

        ];

    }

    public function messages()
    {
        return  [
            'name.required' => 'Nom obligatoire',
            'name.min' => 'Le Nom doit etre superieur a 2 caracteres',
            'mail.required' => 'Mail obligatoire',
            'content.required' => 'Message obligatoire',
            'content.min' => 'La Message doit etre superieur a 10 caractere'
        ];
    }
}
