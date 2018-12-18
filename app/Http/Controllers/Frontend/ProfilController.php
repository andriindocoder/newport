<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Profil;

class ProfilController extends Controller
{
    public function index(){
        $sejarah = Profil::where('kode','sejarah')->first();

        return view('frontend.profil.index',compact('sejarah'));
    }

    public function sejarah(){
        $sejarah = Profil::where('kode','sejarah')->first();

        return view('frontend.profil.sejarah',compact('sejarah'));
    }

    public function struktur(){
        $struktur = Profil::where('kode','struktur')->first();

        return view('frontend.profil.struktur',compact('struktur'));
    }

    public function visimisi(){
        $visimisi = Profil::where('kode','visimisi')->first();

        return view('frontend.profil.visimisi',compact('visimisi'));
    }

    public function tupoksi(){
        $tupoksi = Profil::where('kode','tupoksi')->first();

        return view('frontend.profil.tupoksi',compact('tupoksi'));
    }

    public function show(){

    }
}
