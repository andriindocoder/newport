<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Pelayanan;
use Auth;
use Carbon\Carbon;

class PelayananController extends Controller
{
    private function listBadanUsaha(){
        return [
            'PT' => 'PT',
            'Perusahaan Perorangan' => 'Perusahaan Perorangan',
            'Firma' => 'Firma',
            'CV' => 'CV',
            'Koperasi' => 'Koperasi',
            'PD' => 'PD',
            'Perum' => 'Perum',
            'Persero' => 'Persero',
        ];
    }

    private function listTempatKantor(){
        return [
            '1' => 'Kantor Pusat',
            '2' => 'Kantor Cabang',
        ];
    }

    public function rekomendasi(){
        return view('frontend.pelayanan.rekomendasi');
    }

    public function docking(){
        $docking = new Pelayanan();
        $listBadanUsaha = $this->listBadanUsaha();
        $listTempatKantor = $this->listTempatKantor();
        $user = Auth::user();
        return view('frontend.pelayanan.docking',compact('docking','listBadanUsaha','listTempatKantor','user'));
    }

    public function fumigasi(){
        $fumigasi = new Pelayanan();
        $listBadanUsaha = $this->listBadanUsaha();
        $listTempatKantor = $this->listTempatKantor();
        $user = Auth::user();
        return view('frontend.pelayanan.fumigasi',compact('fumigasi','listBadanUsaha','listTempatKantor','user'));
    }

    public function bunkerDarat(){
        $bunkerDarat = new Pelayanan();
        $listBadanUsaha = $this->listBadanUsaha();
        $listTempatKantor = $this->listTempatKantor();
        $user = Auth::user();
        return view('frontend.pelayanan.bunker-darat',compact('bunkerDarat','listBadanUsaha','listTempatKantor','user'));
    }

    public function pelayananSupplier(){
        $pelayananSupplier = new Pelayanan();
        $listBadanUsaha = $this->listBadanUsaha();
        $listTempatKantor = $this->listTempatKantor();
        $user = Auth::user();
        return view('frontend.pelayanan.pelayanan-supplier',compact('pelayananSupplier','listBadanUsaha','listTempatKantor','user'));
    }

    public function rekomendasiCabangAp(){
        $rekomendasiCabangAp = new Pelayanan();
        $listBadanUsaha = $this->listBadanUsaha();
        $listTempatKantor = $this->listTempatKantor();
        $user = Auth::user();
        return view('frontend.pelayanan.rekomendasi-cabang-ap',compact('rekomendasiCabangAp','listBadanUsaha','listTempatKantor','user'));
    }

    public function rekomendasiSiupPbm(){
        $rekomendasiSiupPbm = new Pelayanan();
        $listBadanUsaha = $this->listBadanUsaha();
        $listTempatKantor = $this->listTempatKantor();
        $user = Auth::user();
        return view('frontend.pelayanan.rekomendasi-siup-pbm',compact('rekomendasiSiupPbm','listBadanUsaha','listTempatKantor','user'));
    }

    public function rekomendasiCabangSiupkk(){
        $rekomendasiCabangSiupkk = new Pelayanan();
        $listBadanUsaha = $this->listBadanUsaha();
        $listTempatKantor = $this->listTempatKantor();
        $user = Auth::user();
        return view('frontend.pelayanan.rekomendasi-cabang-siupkk',compact('rekomendasiCabangSiupkk','listBadanUsaha','listTempatKantor','user'));
    }

    public function rekomendasiTps(){
        $rekomendasiCabangSiupkk = new Pelayanan();
        $listBadanUsaha = $this->listBadanUsaha();
        $listTempatKantor = $this->listTempatKantor();
        $user = Auth::user();
        return view('frontend.pelayanan.rekomendasi-tps',compact('rekomendasiCabangSiupkk','listBadanUsaha','listTempatKantor','user'));
    }

    public function store(Request $request){
        $bulan = date('m');
        $tahun = date('Y');
        $jenisPelayanan = $request->get('jenis_pelayanan');
        $user = Auth::user();
        $data = $request->all();
        $data['no_pelayanan'] = $tahun.$bulan.$jenisPelayanan.'_'.time();
        $data['create_id'] = $user->id;
        $data['created_at'] = Carbon::now();
        $data['pmku_id'] = $user->pmku->id;
        $jenisPelayananId = \App\Model\JenisPelayanan::where('kode_pelayanan','=',$jenisPelayanan)->first();
        $data['jenis_pelayanan_id'] = $jenisPelayananId->id;
        Pelayanan::create($data);


        return redirect('/'.$jenisPelayananId->slug)->with('message','Permintaan Pelayanan Nomor ' . $data["no_pelayanan"]. ' Berhasil Dikirim ke Otoritas Pelabuhan Tanjung Priok. Mohon menunggu response melalui email.');
    }

}
