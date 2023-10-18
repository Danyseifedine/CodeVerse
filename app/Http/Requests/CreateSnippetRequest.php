<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSnippetRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required',
            'code' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title field is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title may not be greater than :max characters.',

            'description.required' => 'The description field is required.',
            'description.string' => 'The description must be a string.',

            'image.required' => 'An image is required.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be in one of the following formats: jpeg, png, jpg, gif.',
            'image.max' => 'The image may not be greater than :max kilobytes.',

            'category.required' => 'The category field is required.',

            'code.required' => 'The code field is required.',
        ];
    }
}
