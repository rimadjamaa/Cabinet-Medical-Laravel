<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImpayeeRequest extends FormRequest
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
            'nom_pat'=>'required|min:3|max:100',
            'prenom_pat'=>'required|min:3|max:100',
            'tel_pat'=>'required|min:3|max:100',
            'montant_APS'=>'required|min:2|max:4',
            'montant_RS' =>'required|min:2|max:4',
                
        ];
    }
}
