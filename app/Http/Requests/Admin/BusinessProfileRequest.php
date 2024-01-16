<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BusinessProfileRequest extends FormRequest
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

    public function rules()
    {
      return [
        'comercial_name' => 'required|min:3|max:64|regex:/^[a-z0-9áéíóúàèìòùäëïöüñ\s]+$/i',
        'email' => ['required','email','max:255', Rule::unique('business_profiles')->ignore($this->id)->whereNull('deleted_at')],
      ];
    }

    public function messages()
    {
      return [
        'comercial_name.required' => 'El nombre es obligatorio',
        'comercial_name.min' => 'El mínimo de caracteres permitidos para el nombre son 3',
        'comercial_name.max' => 'El máximo de caracteres permitidos para el nombre son 64',
        'comercial_name.regex' => 'Sólo se aceptan letras para el nombre',
        'email.required' => 'El email es obligatorio',
        'email.email' => 'El formato de email es incorrecto',
        'email.max' => 'El máximo de caracteres permitidos para el email son 255',
        'email.unique' => 'El email ya existe',
      ];
    }
}