<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJob extends FormRequest
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
            'name_en'        => 'required|max:500',
            'name_fr'        => 'max:500',
            'name_nl'        => 'max:500',
            'description_en' => 'required|max:5000',
            'description_fr' => 'max:5000',
            'description_nl' => 'max:5000',
            'skills_en'      => 'required|max:5000',
            'skills_fr'      => 'max:5000',
            'skills_nl'      => 'max:5000',
            'location_en'    => 'required|max:255',
            'location_fr'    => 'max:255',
            'location_nl'    => 'max:255',
            'category'       => 'required|numeric|max:1000',
            'image'          => 'image|max:200000',
        ];
    }
}