<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class PpidStoreRequest extends FormRequest
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
            'nama_lengkap'  => 'required|max:255',
            'alamat'        => 'required|max:255',
            'pekerjaan'     => 'required|max:255',
            'jenis_id'      => 'required',
            'nomor_id'      => 'required|max:255',
            'telepon'       => 'required|max:255',
            'cara_salinan'  => 'required',
            'email'         => 'required|email',
            'rincian_info'  => 'required',
            'tujuan_info'   => 'required',
            'file_berkas'   => 'required|mimes:jpeg,bmp,png,gif,svg,pdf|max:20000',
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
