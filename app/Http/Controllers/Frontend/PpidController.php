<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Ppid;
use App\Model\Informasi;
use App\Http\Requests\Frontend\PpidStoreRequest;
use Carbon\Carbon;

class PpidController extends Controller
{
    public function index(){
        $konten = Informasi::where('jenis_informasi_id',15)->first();
        return view('frontend.ppid.index',compact('konten'));
    }

    public function store(PpidStoreRequest $request)
    {
        $data = $this->storePpidRequest($request);
        // $data['created_id'] = Auth::user()->id;
        $data['created_at'] = Carbon::now();
        $data['cara_info'] = json_encode($data['cara_info']);
        $data['no_ppid'] = 'ppid_' . strtotime($data['created_at']);

        // $member = [
        //     'email' => $data['email'],
        //     'name'  => $data['nama_lengkap'],
        //     'subject' => 'Permintaan Informasi'
        // ];

        // Mail::send('email.permohonan-ppid', ['data' => $data], function($m) use ($member){
        //     $m->to($member['email'], $member['name'])->cc('andri@zonakreatif.id')->subject($member['subject']);
        // });

        Ppid::create($data);

        return redirect("/ppid")->with('message','Pesan Berhasil Dikirim ke Otoritas Pelabuhan Tanjung Priok');
    }

    private function storePpidRequest($request){
        $data = $request->all();
        $bulan = date('m');
        $tahun = date('Y');

        if($request->hasFile('file_berkas')){
            $path = $request->file('file_berkas')->store('file-ppid/'.$tahun.'/'.$bulan);
            $data['file_berkas'] = $path;
        }
        return $data;
    }

    public function form(){
        $ppid = new Ppid();
        return view('frontend.ppid.form-ppid',compact('ppid'));
    }

    public function dasarHukum(){
        $konten = Informasi::where('jenis_informasi_id',16)->first();
        return view('frontend.ppid.dasar-hukum',compact('konten'));
    }

    public function profil(){
        $konten = Informasi::where('jenis_informasi_id',15)->first();
        return view('frontend.ppid.profil',compact('konten'));
    }

    public function maklumatPelayanan(){
        $konten = Informasi::where('jenis_informasi_id',17)->first();
        return view('frontend.ppid.maklumat-pelayanan',compact('konten'));
    }

    public function standarLayanan(){
        $konten = Informasi::where('jenis_informasi_id',18)->first();
        return view('frontend.ppid.standar-layanan',compact('konten'));
    }

    public function simpulLayanan(){
        $konten = Informasi::where('jenis_informasi_id',19)->first();
        return view('frontend.ppid.simpul-layanan',compact('konten'));
    }

    public function jumlahPermintaanInformasi(){
        $konten = Informasi::where('jenis_informasi_id',20)->first();
        return view('frontend.ppid.jumlah-permintaan-informasi',compact('konten'));
    }

    public function prosedurPermohonan(){
        $konten = Informasi::where('jenis_informasi_id',21)->first();
        return view('frontend.ppid.prosedur-permohonan',compact('konten'));
    }

    public function tataCaraInformasi(){
        $konten = Informasi::where('jenis_informasi_id',22)->first();
        return view('frontend.ppid.tata-cara-informasi',compact('konten'));
    }

    public function tataCaraKeberatan(){
        $konten = Informasi::where('jenis_informasi_id',23)->first();
        return view('frontend.ppid.tata-cara-keberatan',compact('konten'));
    }

    public function hakKewajibanBadanPublik(){
        $konten = Informasi::where('jenis_informasi_id',24)->first();
        return view('frontend.ppid.hak-kewajiban-badan-publik',compact('konten'));
    }

    public function hakKewajibanPemohon(){
        $konten = Informasi::where('jenis_informasi_id',25)->first();
        return view('frontend.ppid.hak-kewajiban-pemohon',compact('konten'));
    }

    public function formulirPermohonan(){
        $ppid = new Ppid();
        return view('frontend.ppid.index-form',compact('ppid'));
    }

}
