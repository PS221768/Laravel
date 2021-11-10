<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class carRequests extends FormRequest
{
    public function rules()
    {
        return [
            'merk' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'bouwjaar' => 'required|integer|min:1900|max:' . now()->year . '',
        ];
    }
    
    public function messages()
    {
        return [
            'merk.required' => 'Error: A merk is required',
            'merk.string'  => 'Error: make sure this is text',
            'type.required' => 'Error: A type is required',
            'type.string'  => 'Error: make sure this is text',
            'bouwjaar.required'  => 'Error: A singer is required',
            'bouwjaar.min' => 'Error: make sure that its a valid year (1900) or higher',
            'bouwjaar.max' => 'Error: make sure that its a valid year (' . now()->year . ') or lower',
        ];
    }
}
