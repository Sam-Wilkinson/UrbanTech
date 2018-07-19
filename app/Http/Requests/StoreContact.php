<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContact extends FormRequest
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
            'title' => array('required','regex:/([Mr]|[Mrs]|[NA])/'),
            'firstName' => 'required|alpha|max:255',
            'lastName' => 'required|max:255',
            'email' => 'required|email|max:255',
            'firm' => 'max:255',
            'subject' => 'required|max:600',
        ];
    }
}
