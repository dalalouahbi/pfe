<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {      
        {$id=$this->user;
        return [
            'name'=>'required|max:255',
            'prenom'=>'required|max:255',
            'email'=>'required|email|max:255|unique:users,email,' . $id ,
            'password'=>'required|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).+$/',
        ];
    }
}
}
