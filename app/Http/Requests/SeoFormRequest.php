<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeoFormRequest extends FormRequest
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
            'page_title' => 'required|string|max:255',
            'page_description' => 'required|string|max:255',
            'page_url' => 'required|string|max:255|url',
            'page_email' => 'required|string|max:255|email:rfc,dns',
        ];
    }
}
