<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdonnanceRequest extends FormRequest
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
            'nom_med'=>'required|min:3|max:100',
            'prenom_med'=>'required|min:3|max:100',
           // 'Date'=>'required',
            'description' =>'required|min:10|max:1000',
                
        ];
    }
}
