<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Subscribe extends Request
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
            'name' => 'required',
            'social_name' => '',
            'city' => 'required',
            'school' => 'required',
            'registration' => 'required',
            'gender' => 'required',
            'gender2' => 'required',
            'birthdate' => 'required|date|date_format:d/m/Y',
            'cpf' => 'required',
            'id_number' => 'required',
            'id_issuer' => 'required',
            'email' => 'required',
            'phone_home' => '',
            'phone_cellular' => '',
            'zip_code' => 'required',
            'address' => 'required',
            'address_complement' => 'required',
            'address_neighborhood' => 'required',
            'address_city' => 'required',
            'facebook' => 'required',
        ];
    }
}
