<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\TampilanDepan;
use App\Model\Berita;
use App\Model\KategoriBerita;

class BeritaController extends Controller
{
    protected $limit = 3;

    public function index(){
        $beritas = Berita::orderBy('id','desc')->limit(3)->get();
        $news = Berita::orderBy('id','DESC')
                ->filter(request('term'))
                ->limit(3)
                ->get();

        $populer = Berita::orderBy('view_count','DESC')
                ->filter(request('term'))
                ->limit(3)
                ->get();

        $kats = KategoriBerita::all();

        return view('frontend.berita.index',compact('beritas','news','populer','kats'));
    }

    public function show($slug){
        $kats = KategoriBerita::all();
        $berita = Berita::where('slug',$slug)->first();
        $news = Berita::orderBy('id','DESC')->limit(3)->get();
        $populer = Berita::orderBy('view_count','DESC')->filter(request('term'))->limit(3)->get();

        if($berita){
            $berita->increment('view_count');
        }

        return view('frontend.berita.single', compact('berita','kats','news','populer'));

    }

    public function category(KategoriBerita $category){
        $categoryName = $category->title;
        $kats = KategoriBerita::all();

        $populer = Berita::orderBy('view_count','DESC')
                ->filter(request('term'))
                ->limit(3)
                ->get();

        $news = $category
                ->berita()
                ->simplePaginate($this->limit);

      return view('frontend.berita.index', compact('kats','news','categoryName','populer'));
    }
}
