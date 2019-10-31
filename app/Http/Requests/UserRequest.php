<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
        ];
    }
}
