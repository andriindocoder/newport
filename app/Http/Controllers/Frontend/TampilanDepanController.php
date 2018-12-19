<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\TampilanDepan;
use App\Model\Berita;
use App\Model\LinkTerkait;
use App\Model\GaleriFoto;
use App\Model\KategoriFoto;

class TampilanDepanController extends Controller
{
    public function index(){
        $beritas = Berita::orderBy('id','desc')->limit(3)->get();
        $linkTerkaits = LinkTerkait::get();
        $gallerys = GaleriFoto::orderBy('id','DESC')->latest()->limit(3)->get();
        $kategoriFotos = KategoriFoto::get();

        return view('index-frontend',compact('beritas','linkTerkaits','gallerys','kategoriFotos'));
    } 

    public function galeriFoto(){
        $gallerys = GaleriFoto::orderBy('id','DESC')->get();
        $kategoriFotos = KategoriFoto::get();

        return view('frontend.galeri-foto.index', compact('gallerys','kategoriFotos'));
    }
}
