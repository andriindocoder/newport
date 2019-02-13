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

        return view('index-frontend',compact('beritas','linkTerkaits','gallerys','kategoriFotos','galleryVideos','kategoriVideos','splashscreen','instagrams','facebooks'));
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
