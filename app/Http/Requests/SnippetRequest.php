<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SnippetRequest extends FormRequest
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

        $validSnippetTypes = [
            'Alert', 'Button', 'Card', 'Carousel', 'Checkbox',
            'Dropdown', 'Footer', 'Form', 'Header', 'Input',
            'Menu', 'Modal', 'Spinner', 'Pricing', 'Sidebar',
            'Switch', 'Table', 'Timeline', 'Tooltip',
            'Pagination', 'Icon', 'Dashboard'
        ];

        $validSnippetCategory = [
            'Tailwind', 'Css', 'Bootstrap', 'Sass', 'React'
        ];

        return [
            'snippet_title' => 'required|string|min:4|max:20',
            'snippet_type' => ['required', 'in:' . implode(',', $validSnippetTypes)],
            'snippet_image' => 'required|image|mimes:jpeg,jpg,png,gif',
            'snippet_code' => 'required|string',
            'snippet_category' => ['required', 'in:' . implode(',', $validSnippetCategory)],
        ];
    }

    public function messages()
    {
        return [
            'snippet_title.required' => 'The title is required.',
            'snippet_title.string' => 'The title must be a string.',
            'snippet_title.min' => 'The title must be at least :min characters.',
            'snippet_title.max' => 'The title may not be greater than :max characters.',

            'snippet_type.required' => 'The type is required.',
            'snippet_type.in' => 'Invalid snippet type selected.',

            'snippet_image.required' => 'An image is required.',
            'snippet_image.image' => 'The file must be an image.',
            'snippet_image.mimes' => 'The image must be in one of the following formats: jpeg, jpg, png, gif.',

            'snippet_code.required' => 'The code is required.',
            'snippet_code.string' => 'The code must be a string.',

            'snippet_category.required' => 'The category is required.',
            'snippet_category.in' => 'Invalid snippet category selected.',
        ];
    }
}
