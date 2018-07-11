<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
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
            'name_en' => 'required|max:255|unique:categories,id,'.$this->category->id,
            'name_fr' => 'max:255|unique:categories,id,'.$this->category->id,
            'name_nl' => 'max:255|unique:categories,id,'.$this->category->id,
            'image'   => 'image|max:200000'
        ];
    }
}
