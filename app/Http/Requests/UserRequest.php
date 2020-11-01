<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'first_name' => 'string|required',
            'last_name' => 'string|required',
            'mobile' => 'numeric|required|unique:users',
            'email' => 'email|required|unique:users',
            'name_of_org' => 'string|required',
            'city' => 'string|required',
            'street' => 'string|required',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ];
    }
}
