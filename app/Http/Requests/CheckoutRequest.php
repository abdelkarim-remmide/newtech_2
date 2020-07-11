<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
        $emailValidation = auth()->user() ? 'required|email' : 'required|email|unique:users';
        return [
            "nom"=>"required",
            "prenom"=>"required",
            "address"=>"required",
            "pay"=>"required",
            "wilaya"=>"required",
            "code_postal"=>"required",
            "tel"=>"required",
            "email"=>$emailValidation,

        ];
    }

    public function message()
    {
        return [
            'email.unique' => 'You already have have acount with this email, please <a href="/login">login</a> to continue',
        ];
    }
}
