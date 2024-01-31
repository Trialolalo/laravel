<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LanguageRequest extends FormRequest
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
        'name' => 'required|string|max:255',
        'label' => 'required|string|max:255',
      ];
    }

    public function messages()
    {
      return [
        'name.string' => 'El campo name es obligatorio',
        'label.string' => 'El campo label es obligatorio',
      ];
    }
}