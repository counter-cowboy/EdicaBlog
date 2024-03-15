<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',
        ];
    }

    public function messages()
    {
        return ['name.required' => 'Field must be filled',
            'name.string' => 'Data must be string type',
            'email.required' => 'Field must be filled',
            'email.string' => 'Data must be string type',
            'email.email' => 'It must be like mail@mail.com',
            'email.unique' => 'User with this email already exists',
            'password.required' => 'Field must be filled',
            'password.string' => 'Data must be string type'];
    }
}
