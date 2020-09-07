<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUser extends FormRequest
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
            'id' => 'required|numeric|unique:users,id',
            'first_name' => 'required|alpha|min:3',
            'last_name' => 'required|alpha|min:3',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Šis lauks ir obligāts',

            'id.numeric' => 'Biedra nr. jāsatur tikai ciparus',
            'id.unique' => 'Šāds biedra nr. jau ir reģistrēts',

            'first_name.alpha' => 'Vārda laukam jāsatur tikai burti',
            'first_name.min' => 'Vārdam jābūt vismaz 3 simbolu garam',

            'last_name.alpha' => 'Uzvārda laukam jāsatur tikai burti',
            'last_name.min' => 'Uzvārdam jābūt vismaz 3 simbolu garam',

            'email.email' => 'E-pasts formāts nav pareizs',
            'email.unique' => 'Šāds e-pasts jau ir reģistrēts',
        ];
    }
}
