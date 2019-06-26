<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Pengaduan;
use App\Http\Requests\Frontend\PengaduanStoreRequest;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class PengaduanController extends Controller
{
    public function index(){
        $pengaduan = new Pengaduan();
        return view('frontend.pengaduan.create',compact('pengaduan'));
    }

    public function create(){

        $pengaduan = new Pengaduan();

        return view('frontend.pengaduan.create', compact('pengaduan'));
    }

    public function store(PengaduanStoreRequest $request)
    {
        $data = $this->pengaduanRequest($request);
        if(Auth::user()){
            $data['create_id'] = Auth::user()->id;
        }else{
            $data['create_id'] = 0;
        }
        $data['created_at'] = Carbon::now();
        $data['no_pengaduan'] = 'WBL' . strtotime($data['created_at']);

        $member = [
            'email' => $data['email'],
            'name'  => $data['nama'],
            'subject' => 'Pengaduan Whistleblower'
        ];


        Pengaduan::create($data);

        return redirect("/pengaduan")->with('message','Pengaduan Whistleblower Berhasil Dikirim ke Otoritas Pelabuhan Tanjung Priok');
    }

    private function pengaduanRequest($request){
        $data = $request->all();
        $bulan = date('m');
        $tahun = date('Y');

        if($request->hasFile('namafile')){
            $path = $request->file('namafile')->store('file-pengaduan/'.$tahun.'/'.$bulan);
            $data['namafile'] = $path;
        }
        return $data;
    }
}
