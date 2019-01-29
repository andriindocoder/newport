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
                    $konten = Informasi::where('jenis_informasi_id',2)->first();
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
}