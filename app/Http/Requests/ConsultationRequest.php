<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultationRequest extends FormRequest
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
            'nom_pat'=>'required|min:1|max:100',
            'prenom_pat'=>'required|min:1|max:100',
            'nom_med'=>'required|min:1|max:100',
            'prenom_med'=>'required|min:1|max:100',
            'motif'=>'required|min:1|max:100',
            'taille'=>'required|min:1|max:20',
            'pois'=>'required|min:1|max:100',
            'tension'=>'required|min:1|max:100',
            'temperatur'=>'required|min:1|max:100',
            'examen'=>'required|min:1|max:100',
            'conclusion'=>'required|min:1|max:100',
            'date'=>'required|min:1|max:100',
            'heure'=>'required|min:1|max:100'
        ];
    }
}
