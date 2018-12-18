<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\TampilanDepan;
use App\Model\Berita;
use App\Model\LinkTerkait;

class TampilanDepanController extends Controller
{
    public function index(){
        $beritas = Berita::orderBy('id','desc')->limit(3)->get();
        $linkTerkaits = LinkTerkait::get();

        return view('index-frontend',compact('beritas','linkTerkaits'));
    }
}
