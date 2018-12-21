<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Ppid;
use App\Http\Requests\Frontend\PpidStoreRequest;
use Carbon\Carbon;

class PpidController extends Controller
{
    public function index(){
        $ppid = new Ppid();
        return view('frontend.ppid.index',compact('ppid'));
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
        return view('frontend.ppid.dasar-hukum');
    }

    public function profil(){
        return view('frontend.ppid.profil');
    }
}
