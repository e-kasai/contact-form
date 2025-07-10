<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// class フォームリクエストクラス名 extends FormRequest
class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // trueにしてユーザーのフォーム送信を許可
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
            'name' => ['required', 'string', 'max:255'],
            // email = 入力必須、文字列型、メール形式、最大 255 文字
            'email' => ['required', 'string', 'email', 'max:255'],
            // tel = 入力必須、数字で10から11桁
            'tel' => ['required', 'regex:/^\d{10,11}$/'],
        ];
    }

    // エラー文を定義
    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'name.string' => '名前を文字列で入力してください',
            'name.max' => '名前を255文字以下で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'tel.required' => '電話番号を入力してください',
            // ルール名だけ！ 引数（:10,11）は書かない!
            'tel.regex' => '電話番号は10から11桁の数字で入力してください',
        ];
    }
}
