<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class songsRequest extends FormRequest
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
            'title' => 'required',
            'singer' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Error: A title is required',
            'singer.required'  => 'Error: A singer is required',
        ];
    }


}
