<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\TampilanDepan;
use App\Model\Berita;
use App\Model\KategoriBerita;

class TampilanDepanController extends Controller
{
    public function index(){
        

        $beritas = Berita::orderBy('id','desc')->limit(3)->get();

        return view('index-frontend',compact('beritas'));
    }

    public function show($slug){
        $kats = KategoriBerita::all();
        $berita = Berita::where('slug',$slug)->first();
        $news = Berita::orderBy('id','DESC')->limit(3)->get();
        $populer = Berita::orderBy('id','DESC')->filter(request('term'))->limit(3)->get();

        if($berita){
            $berita->increment('view_count');
        }

        return view('frontend.berita.single', compact('berita','kats','news','populer'));

    }
}
