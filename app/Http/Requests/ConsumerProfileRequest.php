<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsumerProfileRequest extends FormRequest
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
            'firstname' => 'required',
            'lastname' => 'required',
            'contact_number' => 'required|min:12|numeric',
            'email' => 'required_if:email,' . $this->email . '|email',
            'password' => 'confirmed|required_if:old_password,' . $this->old_password
        ];
    }
}
