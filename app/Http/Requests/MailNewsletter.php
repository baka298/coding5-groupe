<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailNewsletter extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email|unique:newsletters'

        ];
    }

    public function messages(){
        return [
            'name.required'=>'You need to write a name!',
            'email.required'=>'You need to give an email address to be able to get a newsletter!',
            'email.email'=>'To send this to you I need you to give me an email!',
            'email.unique'=>'This email address already receives our newsletter.',

        ];
    }
}
