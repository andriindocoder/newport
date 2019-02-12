<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Informasi;

class InformasiController extends Controller
{
    protected $limit = 50;

    public function index(Request $request, $info="data-dan-informasi"){
        $perPage = $this->limit;

        switch($info){
            case 'informasi-publik':
                    $konten = Informasi::where('jenis_informasi_id',1)->first();
                break;
            case 'program-dan-kegiatan':
                    $kontens = Informasi::where('jenis_informasi_id',2)->latest()->paginate($perPage);
                    $kontensCount = Informasi::where('jenis_informasi_id',2)->count();
                    return view('frontend.informasi.renstra',compact('kontens','kontensCount','perPage'));
                break;
            case 'data-dan-informasi':
                    $konten = Informasi::where('jenis_informasi_id',3)->first();
                break;
            case 'kinerja-kantor-otoritas-pelabuhan':
                    $kontens = Informasi::where('jenis_informasi_id',4)->latest()->paginate($perPage);
                    $kontensCount = Informasi::where('jenis_informasi_id',4)->count();
                    return view('frontend.informasi.lapkin',compact('kontens','kontensCount','perPage'));
                break;
            case 'informasi-hukum':
                    $kontens = Informasi::where('jenis_informasi_id',5)->latest()->paginate($perPage);
                    $kontensCount = Informasi::where('jenis_informasi_id',5)->count();
                    return view('frontend.informasi.hukum',compact('kontens','kontensCount','perPage'));
                break;
            case 'tarif-pnbp':
                    $konten = Informasi::where('jenis_informasi_id',6)->first();
                break;
            case 'indeks-kepuasan-masyarakat':
                    $kontens = Informasi::where('jenis_informasi_id',7)->latest()->paginate($perPage);
                    $kontensCount = Informasi::where('jenis_informasi_id',7)->count();
                    return view('frontend.informasi.ikm',compact('kontens','kontensCount','perPage'));
                break;
            case 'reformasi-birokrasi':
                    $konten = Informasi::where('jenis_informasi_id',28)->first();
                break;
            default:
                break;
        }
        return view('frontend.informasi.index',compact('konten','perPage'));
    }

    public function kinerja($slug){
        $kinerja = Informasi::where('slug',$slug)->first();

        return view('frontend.informasi.detail.kinerja', compact('kinerja'));
    }

    public function ikm($slug){
        $ikm = Informasi::where('slug',$slug)->first();

        return view('frontend.informasi.detail.ikm', compact('ikm'));
    }

    public function renstra($slug){
        $renstra = Informasi::where('slug',$slug)->first();

        return view('frontend.informasi.detail.renstra', compact('renstra'));
    }

    public function hukum($slug){
        $hukum = Informasi::where('slug',$slug)->first();

        return view('frontend.informasi.detail.hukum', compact('hukum'));
    }
}