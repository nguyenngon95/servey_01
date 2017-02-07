<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            'email' => 'required|unique:users,email,' . auth()->id(),
            'password' => 'min:6|confirmed',
            'name' => 'required|max:255',
            'image' => 'image|mimes:jpg,jpeg,png,gif,svg|max:1000',
            'birthday' => 'date',
            'phone' => 'numeric|digits_between:10,11',
            'address' => 'max:255',
            'gender' => 'numeric|digits_between:0,1',
            'old-password' => 'required_with:password|min:6',
        ];
    }
}