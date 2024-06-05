<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'email' => 'required|string|email|unique:users|max:255',
            // 'name' => 'required|string|max:255',
            'user_category_id' => 'gt:0',
            'password' => 'required|string|min:6',
            're_password' => 'required|string|same:password',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email is required',
            'email.email' => 'Email is not valid',
            'email.unique' => 'Email is already exists',
            'password.required' => 'Password is required',
            'email.string' => 'Email is not valid',
            'email.max' => 'Email is not valid',
            // 'name.required' => 'Fullname is required',
            'name.string' => 'Fullname is not valid',
            'user_category_id.gt' => 'User category is required',
            'password.required' => 'Password is required',
            'password.string' => 'Password is not valid',
            're_password.required' => 'Confirm password is required',
            're_password.same' => 'Confirm password is not same with password',
        ];
    }
}
