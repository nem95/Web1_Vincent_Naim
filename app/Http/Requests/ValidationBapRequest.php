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
            'title' => 'required|min:5',
            'name' => 'required|min:2',
            'firstname' => 'required|min:2',
            'fonction' => 'required|min:2',
            'adresse_client' => 'required|min:2',
            'email' => 'required|min:2',
            'telephone' => 'required|min:2',
            'nom_prenom' => 'required|min:2',
            'adresse_contact' => 'required|min:2',
            'mail_contact' => 'required|min:2',
            'tel_contact' => 'required|min:2',
            'description' => 'required|min:10',
            'demande' => 'required|min:10',
            'contexte' => 'required|min:10',
            'objectif' => 'required|min:10',
            'contrainte' => 'required|min:10'
        ];
    }

    public function messages()
    {
        return  [
            'title.required' => 'titre obligatoire',
            'title.min' => 'Le titre doit etre superieur a 5 caracteres',
            'name.required' => 'Nom obligatoire',
            'name.min' => 'Le nom doit etre superieur a 2 caractere',
            'firstname.required' => 'firstname obligatoire',
            'firstname.min' => 'Laefirstname doit etre superieur a 2 caractere',
            'fonction.required' => 'fonction obligatoire',
            'fonction.min' => 'La fonction doit etre superieur a 2 caractere',
            'adresse_client.required' => 'adresse_client obligatoire',
            'adresse_client.min' => 'L\'adresse_client doit etre superieur a 2 caractere',
            'email.required' => 'email obligatoire',
            'email.min' => 'L\'email doit etre superieur a 2 caractere',
            'telephone.required' => 'telephone obligatoire',
            'telephone.min' => 'Le telephone doit etre superieur a 2 caractere',
            'nom_prenom.required' => 'nom_prenom obligatoire',
            'nom_prenom.min' => 'Le nom&prenom doit etre superieur a 2 caractere',
            'adresse_contact.required' => 'adresse_contact obligatoire',
            'adresse_contact.min' => 'L\'adresse du contact doit etre superieur a 2 caractere',
            'mail_contact.required' => 'mail_contact obligatoire',
            'mail_contact.min' => 'Le mail du contact doit etre superieur a 2 caractere',
            'tel_contact .required' => 'tel_contact obligatoire',
            'tel_contact .min' => ' tel_contact  doit etre superieur a 2 caractere',
            'adresse_contact.required' => 'adresse_contact obligatoire',
            'adresse_contact.min' => 'L\'adresse_contactt doit etre superieur a 2 caractere',
            'description.required' => 'Description obligatoire',
            'description.min' => 'La description doit etre superieur a 10 caractere',
            'demande.required' => 'demande obligatoire',
            'demande.min' => 'La demande doit etre superieur a 10 caractere',
            'contexte.required' => 'contexte obligatoire',
            'contexte.min' => 'Le contexte doit etre superieur a 10 caractere',
            'objectif.required' => 'objectif obligatoire',
            'objectif.min' => 'L\'objectif doit etre superieur a 10 caractere',
            'contrainte.required' => 'contrainte obligatoire',
            'contrainte.min' => 'Les contraintes doit etre superieur a 10 caractere'

        ];
    }
}
