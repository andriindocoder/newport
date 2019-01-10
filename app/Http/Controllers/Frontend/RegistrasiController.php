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
            'PT' => 'PT',
            'Perusahaan Perorangan' => 'Perusahaan Perorangan',
            'Firma' => 'Firma',
            'CV' => 'CV',
            'Koperasi' => 'Koperasi',
            'PD' => 'PD',
            'Perum' => 'Perum',
            'Persero' => 'Persero',
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

        $this->savePmku($data);

        
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

    public function cekNib(Request $request){
        $nib = $request->get('nib');
        $tipePerusahaan = $request->get('tipe_perusahaan');
        
        $perusahaan = $this->cariNomorNibInaportnet($tipePerusahaan, $nib, $plb="IDJKT");

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

        if($perusahaan->data->ina_perusahaan){
            $notif = "Perusahaan ditemukan di Database Inaportnet. Silahkan lanjut untuk melengkapi data perusahaan.";
        }else{
            dd("Perusahaan tidak ditemukan di database Inaportnet. Silahkan mendaftar di inaportnet terlebih dahulu.");
        }

        return view('frontend.registrasi.non-ap',compact('perusahaan','notif','listTempatKantor','listBadanUsaha'));
    }

    private function cariNomorNibInaportnet($type, $nib, $plb="IDJKT"){

        $url = "https://inaportdev.dephub.go.id/ipn_ws/public/index.php/api/simpadu/pmku/register";

        $data = [
                  "type" => $type,
                  "nomor_izin" => $nib,
                  "kode_pelabuhan" => $plb
              ];

        $options = array(
          'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
              'method'  => 'POST',
              'content' => http_build_query($data)
          )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        if ($result === FALSE) { dd("Tidak ditemukan"); };

        return json_decode($result);
    }

    private function savePmku($pmku){
        $url = "https://inaportdev.dephub.go.id/ipn_ws/public/index.php/api/simpadu/pmku/savePmkuOnline";

      $rule = [
                  "type" => $pmku['jenis_usaha_id'],
                  "kode_perusahaan" => $pmku['kode_perusahaan'],
                  "kode_pelabuhan" => "IDJKT",
                  "is_pusat" => $pmku['tempat_kantor'],
                  "no_npwp" => $pmku['npwp'],
                  "akta" => url($pmku['file_akta']),
                  "kode_wilayah" => $pmku['wilayah_id'],
                  "alamat" => $pmku['alamat_perusahaan'],
                  "telp" => $pmku['telepon'],
                  "email" => $pmku['email'],
                  "hotline" => $pmku['hotline'],
                  "penanggung_jawab" => $pmku['penanggung_jawab'],
                  "ktp_penanggung_jawab" => url($pmku['file_ktp']) ,
                  "npwp_perusahaan" => url($pmku['file_npwp']),
                  "dokumen_siup" => url($pmku['file_siup']),
                  "struktur_organisasi_perusahaan" => url($pmku['file_struktur']),
                  "surat_keterangan_domisili" => url($pmku['file_domisili']),
                  "siup_kum_ham" => $pmku['nomor_siup'],
              ];

      $options = array(
          'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
              'method'  => 'POST',
              'content' => http_build_query($rule)
          )
      );
      $context  = stream_context_create($options);
      $result = file_get_contents($url, false, $context);

      if ($result === FALSE) { /* Handle error */ }

      return json_decode($result);
    }
}















