<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Pelaporan;
use App\Http\Requests\Frontend\PelaporanStoreRequest;
use Carbon\Carbon;
use Auth;

class PelaporanController extends Controller
{
	const LAPORAN_DIKIRIM = 10;
    protected $limit = 10;

    public function index(){
        $perPage = $this->limit;

        $pelaporans = Pelaporan::latest()->paginate($perPage);
        $pelaporansCount = Pelaporan::count();

    	return view('frontend.pelaporan.index',compact('perPage','pelaporans','pelaporansCount'));
    }

    public function create(){
        $pelaporan = new Pelaporan();
        return view('frontend.pelaporan.create',compact('pelaporan'));
    }

    public function store(PelaporanStoreRequest $request){
    	$data = $request->all();
    	$bulan = date('m');
        $tahun = date('Y');
    	$data['created_at'] = Carbon::now();
    	$data['create_id'] = Auth::user()->id;
    	$data['pmku_id'] = Auth::user()->pmku->id;
    	$data['no_pelaporan'] = $tahun.'/'.$bulan.'/'.$data['pmku_id'].'/'.time();
    	$data['status_pelaporan'] = SELF::LAPORAN_DIKIRIM;

        if($request->hasFile('konten')){
            $path = $request->file('konten')->store('file-pelaporan/'.$tahun.'/'.$bulan);
            $data['konten'] = $path;
        }

        Pelaporan::create($data);

        return redirect("/pelaporan")->with('message','Laporan Berhasil Dikirim ke Otoritas Pelabuhan Tanjung Priok');
    }
}
