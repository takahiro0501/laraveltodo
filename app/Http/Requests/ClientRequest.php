<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'content' => 'required|string|max:20'
        ];
    }
    public function messages()
    {
        return [
            'content.required' => 'タスク名を入力してください',
            'content.max' => 'タスク名は２０字以内で入力してください',
        ];
    }
}