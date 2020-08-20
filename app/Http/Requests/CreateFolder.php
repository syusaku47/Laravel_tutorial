<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFolder extends FormRequest
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
            'title' => 'required|max:20', // ★inputのname属性 => 必須入力を意味する required を指定 max20文字まで
        ];
    }
    public function attributes()
    {
        return [
            'title' => 'フォルダ名',
        ];
    }
}
