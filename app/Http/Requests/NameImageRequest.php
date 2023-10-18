<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NameImageRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:12',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages()
    {
        return [

            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.min' => 'The name must be at least 3 characters.',
            'name.max' => 'The name may not be greater than 12 characters.',

            'image.required' => 'An image is required.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be in one of the following formats: jpeg, png, jpg, gif.',
            'image.max' => 'The image may not be greater than 2 Megabytes.',
        ];
    }
}
