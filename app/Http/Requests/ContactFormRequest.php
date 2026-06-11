<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'        => 'required|string|max:100',
            'email'       => 'required|email',
            'phone'       => 'nullable|string|max:20',
            'service'     => 'required|in:Website,Web App,AI Tool,eCommerce,Other',
            'description' => 'required|string|min:20|max:2000',
            'budget'      => 'required|in:Under $500,$500–$1000,$1000–$3000,$3000+',
        ];
    }
}
