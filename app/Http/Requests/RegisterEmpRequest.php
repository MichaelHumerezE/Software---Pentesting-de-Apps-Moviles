<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterEmpRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'ci' => ['required', 'unique:personas,ci', 'min:7'],
            'email' => ['required', 'unique:users,email'],
            'sexo' => ['required'],
            'celular' => ['required', 'unique:personas,celular', 'min:8'],
            'estadoemp' => ['required'],
            'tipoc' => ['required'],
            'tipoe' => ['required'],
            'password' => ['required', 'min:8'],
            'password_confirmation' => ['required', 'same:password'],
        ];
    }
}
