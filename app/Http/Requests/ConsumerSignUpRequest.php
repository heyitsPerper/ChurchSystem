<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsumerSignUpRequest extends FormRequest
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
            'firstname' => 'required|max:255|string',
            'lastname' => 'required|max:255|string',
            'purok' => 'required|string',
            'contact_number' => 'required|numeric',
            'email' => 'required|email|unique:consumers|max:255',
            'password' => 'required|string|confirmed|min:8'
        ];
    }
}
