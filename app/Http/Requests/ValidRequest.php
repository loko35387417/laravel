<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
//        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|alpha|between:4,10',
            'email'=>'required|email|unique:users',
            'password'=>'required|alpha_num|between:6,16|confirmed',
            'dpassword'=>'required|alpha_num|between:6,16'
        ];
    }
}
