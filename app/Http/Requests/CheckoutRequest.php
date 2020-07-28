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
            'g-recaptcha-response' => 'required|captcha'
        ];
    }

    public function message()
    {
        return [
            'email.unique' => 'You already have have acount with this email, please <a href="/login">login</a> to continue',
            'g-recaptcha-response' => [
                'required' => 'Please verify that you are not a robot.',
                'captcha' => 'Captcha error! try again later or contact site admin.',
            ],
        ];
    }
}
