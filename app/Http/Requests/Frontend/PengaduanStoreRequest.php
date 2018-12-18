<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class PengaduanStoreRequest extends FormRequest
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
            'nama'      => 'required|max:255',
            'jenis_id'  => 'required|max:11',
            'nomor_id'  => 'required|max:255',
            'email'     => 'required|email',
            'pesan'     => 'required',
            'namafile'  => 'mimes:jpeg,bmp,png,gif,svg,pdf|max:20000',
        ];
    }

    public function messages()
    {
        $atribut = ucwords(':attribute');

        return [
            'required'                  => $atribut . ' tidak boleh kosong.',
            'email'                     => ':attribute harus berupa email yang valid.', 
        ];
    }
}
