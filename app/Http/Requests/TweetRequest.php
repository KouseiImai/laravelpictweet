<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TweetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == ('/tweets/new' || '/tweets/edit/{id}'))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'image' => 'required',
            'text' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'ニックネームは必ず入力して下さい',
            'image.required' => 'イメージは必ず入力して下さい',
            'text.required' => 'テキストは必ず入力して下さい',
        ];
    }
}
