<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Informasi;

class InformasiController extends Controller
{
    public function index(Request $request, $info="data-dan-informasi"){
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
                    $konten = Informasi::where('jenis_informasi_id',4)->first();
                break;
            case 'informasi-hukum':
                    $konten = Informasi::where('jenis_informasi_id',5)->first();
                break;
            case 'tarif-pnbp':
                    $konten = Informasi::where('jenis_informasi_id',6)->first();
                break;
            case 'indeks-kepuasan-masyarakat':
                    $konten = Informasi::where('jenis_informasi_id',7)->first();
                break;
            case 'reformasi-birokrasi':
                    $konten = Informasi::where('jenis_informasi_id',28)->first();
                break;
            default:
                break;
        }
        return view('frontend.informasi.index',compact('konten'));
    }
}