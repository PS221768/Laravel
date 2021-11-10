<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class voetballerRequests extends FormRequest
{
    public function rules()
    {
        return [
            'FirstName' => 'required|string|max:255',
            'PrefixName' => 'required|string|max:255',
            'LastName' => 'required|string|max:255',
        ];
    }
    
    public function messages()
    {
        return [
            'FirstName.required' => 'Error: A FirstName is required',
            'FirstName.string'  => 'Error: make sure this is text',
            'PrefixName.required' => 'Error: A PrefixName is required',
            'PrefixName.string'  => 'Error: make sure this is text',
            'LastName.required' => 'Error: A LastName is required',
            'LastName.string'  => 'Error: make sure this is text',
        ];
    }
}
