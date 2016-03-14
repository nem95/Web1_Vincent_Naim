<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidateUserModifRequest extends Request
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
            'name' => 'required',
            'firstname' => 'required',
            'email' => 'required'

        ];
    }

    public function messages()
    {
        return  [
            'name.required' => 'Nom obligatoire',
            'firstname.required' => 'Prenom obligatoire',
            'email.required' => 'mail obligatoire',

        ];
    }
}
