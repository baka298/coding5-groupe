<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProduct extends FormRequest
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
            'name'=>'required|max:30|min:3',
            'description'=>'required|max:200|min:3',
            'price'=>'required|max:20|min:1',
        ];
    }

    public function messages() {
        return[
            'name.required'=>'Entrez un nom.',
            'name.min'=>'3 caractères minimum.',
            'name.max'=>'30 caractères maximum.',
            'description.required'=>'Entrez une description.',
            'description.min'=>'3 caractères minimum.',
            'description.max'=>'200 caractères maximum.',
            'price.required'=>'Entrez un prix.',
            'price.max'=>'20 caractères maximum.',
            'price.min'=>'1 caractères minimum.',
        ];
    }
}
