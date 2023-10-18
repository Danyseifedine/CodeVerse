<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'subject' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z0-9\s]+$/',
            ],
            'message' => [
                'required',
                'string',
                'between:10,200',
                'regex:/^[a-zA-Z0-9\s]+$/',
            ],
        ];
    }

    public function messages()
{
    return [
        'subject.required' => 'Something went wrong',
        'subject.string' => 'Something went wrong',
        'subject.max' => 'Something went wrong',
        'subject.regex' => 'Something went wrong',

        'message.required' => 'Something went wrong',
        'message.string' => 'Something went wrong',
        'message.between' => 'Something went wrong',
        'message.regex' => 'Something went wrong',
    ];
}

}
