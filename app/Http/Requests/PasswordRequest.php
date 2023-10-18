<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
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
        return [
            'old_password' => 'required',
            'new_password' => 'required|string|min:6|max:50|regex:/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]+$/',
            'confirm_password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'old_password.required' => 'The password field is required.',

            'new_password.required' => 'The password field is required.',
            'new_password.string' => 'The password must be a string.',
            'new_password.min' => 'The password must be at least 6 characters.',
            'new_password.max' => 'The password may not be greater than 50 characters.',
            'new_password.regex' => 'The password must contain at least one letter, one number, and one special character.',

            'confirm_password.required' => 'The password field is required.',
        ];
    }
}
