<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
    public function rules(){
        return [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'  
        ];
    public function messages(){
        return [
            'name.required' => 'xin nhap name',
            'email.required' => 'Xin nhap email',
            'password.required' => 'xin nhap mat khau'
        ];
    }
    }