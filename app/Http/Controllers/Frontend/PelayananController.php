<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Pelayanan;
use App\Model\PelayananSikk;
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

    public function rekomendasiSikk(){
        $rekomendasiSikk = new PelayananSikk();
        $listBadanUsaha = $this->listBadanUsaha();
        $listTempatKantor = $this->listTempatKantor();
        $user = Auth::user();
        return view('frontend.pelayanan.rekomendasi-sikk',compact('rekomendasiSikk','listBadanUsaha','listTempatKantor','user'));
    }

    public function sikk(){
        $rekomendasiSikk = new PelayananSikk();
        $listBadanUsaha = $this->listBadanUsaha();
        $listTempatKantor = $this->listTempatKantor();
        $user = Auth::user();
        return view('frontend.pelayanan.sikk',compact('rekomendasiSikk','listBadanUsaha','listTempatKantor','user'));
    }

    public function rekomendasiTps(){
        $rekomendasiTps = new Pelayanan();
        $listBadanUsaha = $this->listBadanUsaha();
        $listTempatKantor = $this->listTempatKantor();
        $user = Auth::user();
        return view('frontend.pelayanan.rekomendasi-tps',compact('rekomendasiTps','listBadanUsaha','listTempatKantor','user'));
    }

    public function sop(){
        return view('frontend.pelayanan.sop');
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
        if($request->hasFile('gambar')){
            $path = $request->file('gambar')->store('pelayanan/'.$tahun.'/'.$bulan);
            $data['gambar'] = $path;
        }
        Pelayanan::create($data);


        return redirect('/'.$jenisPelayananId->slug)->with('message','Permintaan Pelayanan Nomor ' . $data["no_pelayanan"]. ' Berhasil Dikirim ke Otoritas Pelabuhan Tanjung Priok. Mohon menunggu response melalui email.');
    }

    public function storeSikk(Request $request){
        $bulan = date('m');
        $tahun = date('Y');
        $jenisPelayanan = $request->get('jenis_pelayanan');
        $user = Auth::user();
        $data = $request->all();
        $data['nomor_pelayanan'] = $tahun.$bulan.$jenisPelayanan.'_'.time();
        $data['create_id'] = $user->id;
        $data['created_at'] = Carbon::now();
        $data['pmku_id'] = $user->pmku->id;
        $jenisPelayananId = \App\Model\JenisPelayanan::where('kode_pelayanan','=',$jenisPelayanan)->first();
        $data['jenis_pelayanan_id'] = $jenisPelayananId->id;

        if($request->hasFile('file_lokasi')){
            $path = $request->file('file_lokasi')->store('sikk/'.$tahun.'/'.$bulan);
            $data['file_lokasi'] = $path;
        }
        if($request->hasFile('file_peta')){
            $path = $request->file('file_peta')->store('sikk/'.$tahun.'/'.$bulan);
            $data['file_peta'] = $path;
        }
        if($request->hasFile('file_rekomendasi')){
            $path = $request->file('file_rekomendasi')->store('sikk/'.$tahun.'/'.$bulan);
            $data['file_rekomendasi'] = $path;
        }
        if($request->hasFile('file_distrik_navigasi')){
            $path = $request->file('file_distrik_navigasi')->store('sikk/'.$tahun.'/'.$bulan);
            $data['file_distrik_navigasi'] = $path;
        }
        if($request->hasFile('file_rekomendasi_syahbandar')){
            $path = $request->file('file_rekomendasi_syahbandar')->store('sikk/'.$tahun.'/'.$bulan);
            $data['file_rekomendasi_syahbandar'] = $path;
        }
        PelayananSikk::create($data);


        return redirect('/'.$jenisPelayananId->slug)->with('message','Permintaan Pelayanan Nomor ' . $data["nomor_pelayanan"]. ' Berhasil Dikirim ke Otoritas Pelabuhan Tanjung Priok. Mohon menunggu response melalui email.');
    }

}
