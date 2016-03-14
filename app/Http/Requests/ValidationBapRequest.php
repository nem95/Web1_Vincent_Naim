<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidationBapRequest extends Request
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
            'title' => 'required|min:10',
            'description' => 'required|min:10'
        ];
    }

    public function messages()
    {
        return  [
            'title.required' => 'titre obligatoire',
            'title.min' => 'Le titre doit etre superieur a 10 caracteres',
            'content.required' => 'Description obligatoire',
            'content.min' => 'La description doit etre superieur a 10 caractere'
        ];
    }
}
