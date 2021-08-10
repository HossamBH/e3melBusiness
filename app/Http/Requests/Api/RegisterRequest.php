<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|max:191|unique:clients,name',
            'email' => 'required|max:191|email|unique:clients,name',
            'password' => 'required|confirmed|max:191',
            'password_confirmation' => 'required|max:191',
        ];
    }
}
