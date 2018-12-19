<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Lowercase;

class PmkuStoreRequest extends FormRequest
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
            'name' => ['required','string','unique:users','alpha_dash', new Lowercase],
            'password' => 'required|string|min:6|confirmed'
        ];
    }

    public function messages()
    {
        $atribut = ucwords(':attribute');

        return [
            'required'                  => $atribut . ' tidak boleh kosong.',
            'email'                     => ':attribute harus berupa email yang valid.', 
            'name.required'   => 'username tidak boleh kosong.',
            'name.alpha_dash'   => 'username tidak boleh ada spasi.',
        ];
    }
}
