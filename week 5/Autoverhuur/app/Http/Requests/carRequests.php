<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class carRequests extends FormRequest
{
    public function rules()
    {
        return [
            'merk' => 'required',
            'type' => 'required',
            'bouwjaar' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'merk.required' => 'Error: A title is required',
            'type.required' => 'Error: A title is required',
            'bouwjaar.required'  => 'Error: A singer is required',
        ];
    }
}
