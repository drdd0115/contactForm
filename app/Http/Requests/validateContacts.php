<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateContacts extends FormRequest
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
            'familyName' => 'required',
            'givenName' => 'required',
            'radio' => 'required',
            'email' => 'required|email',
            'postal-code' => 'required | numeric',
            'address' => 'required',
            'buildingName' => 'nullable',
            'opinion' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'familyName.required' => 'テスト',
            'givenName.required' => 'テスト',
            'radio.required' => 'テスト',
            'email.required' => 'テスト',
            'postal-code.required' => 'テスト',
            'address.required' => 'テスト',
            'opinion.required' => 'テスト'
        ];
    }
}
