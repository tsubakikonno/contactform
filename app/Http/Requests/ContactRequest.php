<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;
class ContactRequest extends FormRequest

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
            
            'familyname' => ['required', 'string', 'max:255'],
            'givenname' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'email' => ['required', 'email', 'max:255'],
            'postcode' => ['required', 'regex:/^[0-9]{3}-[0-9]{4}$/'],
            'address' => ['required'],
            'building_name' => ['nullable'],
            'opinion' => ['required', 'max:120'],
        ];
    }

    public function messages()
        {
            return [
                'familyname.required' => '苗字を入力してください',
                'givenname.required' => '名前を入力してください',
                'fullname.string' => '名前を文字列で入力してください',
                'fullname.max' => '名前を255文字以下で入力してください',
                'email.required' => 'メールアドレスを入力してください',
                'email.email' => '有効なメールアドレス形式を入力してください',
                'email.max' => 'メールアドレスを255文字以下で入力してください',
                'postcode.required' => '郵便番号を入力してください',
                'postcode.regex' => '正しい形で入力してください',
                'postcode.numeric'=> '郵便番号は数字で入力してください',
                'address.required' => '住所を入力してください',
                'opinion.required' => '意見を入力してください',
                'opinion.max' =>'120字以内で入力してください',
             
            ];
        }

       
}
