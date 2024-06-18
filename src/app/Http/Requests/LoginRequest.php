<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|string|email|max:225',
            'password' => 'required|string|min:8|max:225',
        ];
    }

        public function messages()
    {
        return [
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスのアカウントが見つかりません',
            'email.exists' => 'メールアドレスが正しくありません',
            'password.required'=> 'パスワードを入力してください',
            'password.unique'=> 'パスワードが正しくありません。',
        ];
    }
}