<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateQuizRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // リクエストを承認する
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:100',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'タイトルは必須項目です。',
            'title.string' => 'タイトルは文字列でなければなりません。',
            'title.max' => 'タイトルは100文字以内で入力してください。',
        ];
    }
}
