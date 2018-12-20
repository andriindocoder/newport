<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\PmkuStoreRequest;
use App\Role;
use App\User;
use App\Model\Pmku;
use Illuminate\Support\Facades\Hash;
use Auth;


class RegistrasiController extends \App\Http\Controllers\Auth\RegisterController
{
    public function index(){
        return view('frontend.registrasi.index');
    }

    public function tipePerusahaan(Request $request){
        $listBadanUsaha = [
            '1' => 'PT',
            '2' => 'Perusahaan Perorangan',
            '3' => 'Firma',
            '4' => 'CV',
            '5' => 'Koperasi',
            '6' => 'PD',
            '7' => 'Perum',
            '8' => 'Persero',
        ];
    
        $listTempatKantor = [
            '1' => 'Kantor Pusat',
            '2' => 'Kantor Cabang',
        ];
        
        if($request->get('agen_pelayaran') == 1){
            return view('frontend.registrasi.ap',compact('listTempatKantor','listBadanUsaha'));
        }else{
            return view('frontend.registrasi.non-ap',compact('listTempatKantor','listBadanUsaha'));  
        }
    }

    public function pmku(PmkuStoreRequest $request){
        
        $data = $request->all();
        $bulan = date('m');
        $tahun = date('Y');
        //file_npwp, file_struktur, file_siup, file_akta, file_domisili, file_ktp

        if($request->hasFile('file_npwp')){
            $path = $request->file('file_npwp')->store('file-pmku/'.$tahun.'/'.$bulan);
            $data['file_npwp'] = $path;
        }

        if($request->hasFile('file_struktur')){
            $path = $request->file('file_struktur')->store('file-pmku/'.$tahun.'/'.$bulan);
            $data['file_struktur'] = $path;
        }

        if($request->hasFile('file_siup')){
            $path = $request->file('file_siup')->store('file-pmku/'.$tahun.'/'.$bulan);
            $data['file_siup'] = $path;
        }

        if($request->hasFile('file_akta')){
            $path = $request->file('file_akta')->store('file-pmku/'.$tahun.'/'.$bulan);
            $data['file_akta'] = $path;
        }

        if($request->hasFile('file_domisili')){
            $path = $request->file('file_domisili')->store('file-pmku/'.$tahun.'/'.$bulan);
            $data['file_domisili'] = $path;
        }

        if($request->hasFile('file_ktp')){
            $path = $request->file('file_ktp')->store('file-pmku/'.$tahun.'/'.$bulan);
            $data['file_ktp'] = $path;
        }
        $role = Role::where("name","=","perusahaan")->first();
        $data['bio'] = 'Perusahaan';
        $data['role_id'] = $role->id;
        $data['slug'] = slugify($data['name']);
        $data['nama_instansi'] = $data['nama_perusahaan'];
        $data['jenis_usaha_id'] = 1;
        $data['wilayah_id'] = 1;
        
        $user = User::create([
            'nama_instansi' => $data['nama_instansi'],
            'name' => $data['name'],
            'email' => $data['email'],
            'slug' => $data['slug'],
            'bio' => $data['bio'],
            'role_id' => $data['role_id'],
            'password' => Hash::make($data['password']),
            'nama_perusahaan' => $data['nama_perusahaan'],
            ])->attachRole($role);
            
        $pmku = Pmku::create([
            'nomor_siup'        => $data['nomor_siup'],
            'nomor_akta'        => $data['nomor_akta'],
            'nama_perusahaan'   => $data['nama_perusahaan'],
            'nomor_akta'        => $data['nomor_akta'],
            'penanggung_jawab'  => $data['penanggung_jawab'],
            'email_perusahaan'  => $data['email'],
            'alamat_perusahaan' => $data['alamat_perusahaan'],
            'npwp'              => $data['npwp'],
            'file_npwp'         => $data['file_npwp'],
            'file_struktur'     => $data['file_struktur'],
            'file_siup'         => $data['file_siup'],
            'file_akta'         => $data['file_akta'],
            'file_domisili'     => $data['file_domisili'],
            'file_ktp'          => $data['file_ktp'],
            'telepon'           => $data['telepon'],
            'hotline'           => $data['hotline'],
            'fax'               => $data['fax'],
            'badan_usaha'       => $data['badan_usaha'],
            'tanggal_siup'      => $data['tanggal_siup'],
            'tempat_kantor'     => $data['tempat_kantor'],
            'jenis_usaha_id'    => $data['jenis_usaha_id'],
            'wilayah_id'        => $data['wilayah_id'],
            'create_id'         => $user['id'],
        ]);

        return redirect()->route('login')->with('message','Pendaftaran User Berhasil, Silahkan Login');
    }
}
