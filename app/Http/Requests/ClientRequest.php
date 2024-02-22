<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'telephone'=>'required',
            'role'=>'required',
            'email'=> 'required|email',
            'password'=>'required|min:9|max:10|confirmed',
            'description'=>'required',
            'image'=>'required|image|mimes:png,jpg,jpeg,svg'
        ];
    }
}
