<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\TampilanDepan;
use App\Model\Berita;
use App\Model\LinkTerkait;
use App\Model\GaleriFoto;
use App\Model\KategoriFoto;
use App\Model\GaleriVideo;
use App\Model\KategoriVideo;
use App\Model\Informasi;
use Illuminate\Support\Facades\DB;
use DateTime;

class TampilanDepanController extends Controller
{
    public function index(){
        $beritas = Berita::orderBy('id','desc')->limit(3)->get();
        $linkTerkaits = LinkTerkait::get();
        $gallerys = GaleriFoto::orderBy('id','DESC')->latest()->limit(3)->get();
        $kategoriFotos = KategoriFoto::get();

        $galleryVideos = GaleriVideo::orderBy('id','DESC')->latest()->limit(3)->get();
        $kategoriVideos = KategoriVideo::get();

        $instagrams = Informasi::latest()->jenisInformasi(29)->active()->get();
        $facebooks = Informasi::latest()->jenisInformasi(30)->active()->get();

        $splashscreen = TampilanDepan::where('kode_tampilan','splashscreen')->first();

        
        $dwelldate = DB::table('dwelling_times_per_day')->orderBy('id','desc')->first();
        $dtdays = $this->findDt($dwelldate->dwelling_date);
        foreach($dtdays as $dtday){
            switch ($dtday->terminal) {
                case 'KOJA':
                    $koja = $dtday->dwelling_time;
                    if($koja < 3){
                        $classKoja = 'angkahijau';
                    }else{
                        $classKoja = 'angka';
                    }
                    break;
                case 'TMAL':
                    $tmal = $dtday->dwelling_time;
                    if($tmal < 3){
                        $classTmal = 'angkahijau';
                    }else{
                        $classTmal = 'angka';
                    }
                    break;
                case 'NPCT1':
                    $npct1 = $dtday->dwelling_time;
                    if($npct1 < 3){
                        $classNpct1 = 'angkahijau';
                    }else{
                        $classNpct1 = 'angka';
                    }
                    break;
                case 'JICT':
                    $jict = $dtday->dwelling_time;
                    if($jict < 3){
                        $classJict = 'angkahijau';
                    }else{
                        $classJict = 'angka';
                    }
                    break;
                default:
                    $jict = 0.00;
                    $tmal = 0.00;
                    $npct1 = 0.00;
                    $koja = 0.00;
                    break;
            }
        }

        $tanggalDt = $this->dateTimeToDate($dtdays[0]->dwelling_date);
        $number = ($jict+$tmal+$npct1+$koja)/4;
        $averageDt = number_format((float)$number, 2, '.', '');
        if($averageDt < 3){
            $classAvg = 'angkahijau';
        }else{
            $classAvg = 'angka';
        }

        return view('index-frontend',compact('beritas','linkTerkaits','gallerys','kategoriFotos','galleryVideos','kategoriVideos','splashscreen','instagrams','facebooks','tanggalDt','jict','koja','tmal','npct1','averageDt','classJict','classTmal','classNpct1','classKoja','classAvg'));
    }

    protected function dateTimeToDate($datetime){
        $dt = new DateTime($datetime);

        $date = $dt->format('d M Y');
        
        return $date;
    }

    protected function findDt($date){
        $dwell = DB::table('dwelling_times_per_day')->where('dwelling_date',$date)->get();
        if($dwell->count() == 4){
            return $dwell;
        }else{
            $date = new DateTime($date);
            $date = $date->modify('-1 day');
            $date = $date->format('Y-m-d');
            return $this->findDt($date);
        }
    }

    public function galeriFoto(){
        $gallerys = GaleriFoto::orderBy('id','DESC')->get();
        $kategoriFotos = KategoriFoto::get();

        return view('frontend.galeri-foto.index', compact('gallerys','kategoriFotos'));
    }

    public function galeriVideo(){
        $gallerys = GaleriVideo::orderBy('id','DESC')->get();
        $kategoriVideos = KategoriVideo::get();

        return view('frontend.galeri-video.index', compact('gallerys','kategoriVideos'));
    }
}
