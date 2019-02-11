<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduitsR extends FormRequest
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
            'image' => 'required',
            'title' => 'required',
            'desc' => 'required',
            'content' => 'required',
            'price' => 'required',
        ];
    }

    public function messages()
{
    return [
        'image.required' => 'Image Required',
        'title.required' => 'Title Required',
        'desc.required' => 'Desc Required',
        'content.required' => 'Content Required',
        'price.required' => 'Price Required',
    ];
}
}
