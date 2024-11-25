<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserManagementRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'email_verified_at' => ['nullable', 'date'],
            'password' => ['required'],
            'remember_token' => ['nullable'],
            'image' => ['nullable'],
            'role' => ['required', 'integer'],
        ];
    }
    
    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'password' => 'Password is required',
            'role' => 'Role is required',
        ];
    }
    
    public function authorize(): bool
    {
        return true;
    }
}
