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
            'password' => 'required|string|min:6|confirmed',
            'nomor_siup'        => 'required|max:255',
            'npwp'              => 'required|max:255',
            'nama_perusahaan'   => 'required|max:255',
            'nomor_akta'        => 'required|max:255',
            'penanggung_jawab'  => 'required|max:255',
            'hotline'           => 'required|max:255',
            'email'             => 'required|email|unique:users',
            'alamat_perusahaan' => 'required|max:255',
            'file_npwp'         => 'required|mimes:jpeg,bmp,png,gif,svg,pdf|max:20000',
            'file_siup'         => 'required|mimes:jpeg,bmp,png,gif,svg,pdf|max:20000',
            'file_struktur'     => 'required|mimes:jpeg,bmp,png,gif,svg,pdf|max:20000',
            'file_akta'         => 'required|mimes:jpeg,bmp,png,gif,svg,pdf|max:20000',
            'file_domisili'     => 'required|mimes:jpeg,bmp,png,gif,svg,pdf|max:20000',
            'file_ktp'          => 'required|mimes:jpeg,bmp,png,gif,svg,pdf|max:20000',
            'telepon'           => 'required',
            'badan_usaha'       => 'required',
            'jenis_usaha_id'    => 'required',
            'tanggal_siup'      => 'required',
            'wilayah_id'        => 'required',
        ];
    }

    public function messages()
    {
        $atribut = ucwords(':attribute');

        return [
            'required'          => $atribut . ' tidak boleh kosong.',
            'email'             => ':attribute harus berupa email yang valid.', 
            'name.required'     => 'username tidak boleh kosong.',
            'name.alpha_dash'   => 'username tidak boleh ada spasi.',
            'name.unique'       => 'username sudah dipakai.',
            'email.unique'      => 'email sudah dipakai.',
            'badan_usaha_id.required'   => 'badan usaha tidak boleh kosong.',
            'jenis_usaha_id.required'   => 'jenis usaha tidak boleh kosong.'
        ];
    }
}
