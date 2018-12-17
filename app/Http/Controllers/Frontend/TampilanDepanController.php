<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\TampilanDepan;

class TampilanDepanController extends Controller
{
    public function index(){
        $tagline = TampilanDepan::where('kode_tampilan','=','tagline')->first();
        $marquee = TampilanDepan::where('kode_tampilan','=','pengumumanberjalan')->first();
        $copyright = TampilanDepan::where('kode_tampilan','=','copyright')->first();
        $judulgrafik = TampilanDepan::where('kode_tampilan','=','judulgrafik')->first();
        $judulkegiatanotoritas = TampilanDepan::where('kode_tampilan','=','judulkegiatanotoritas')->first();
        $judulfasilitaspelabuhan = TampilanDepan::where('kode_tampilan','=','judulfasilitaspelabuhan')->first();
        $berita = TampilanDepan::where('kode_tampilan','=','berita')->first();
        $judulgalerifoto = TampilanDepan::where('kode_tampilan','=','judulgalerifoto')->first();
        $judulgalerivideo = TampilanDepan::where('kode_tampilan','=','judulgalerivideo')->first();
        $judullinkterkait = TampilanDepan::where('kode_tampilan','=','judullinkterkait')->first();
        $judulalamat = TampilanDepan::where('kode_tampilan','=','judulalamat')->first();
        $alamat = TampilanDepan::where('kode_tampilan','=','alamat')->first();
        $judulslidesatu = TampilanDepan::where('kode_tampilan','=','judulslidesatu')->first();
        $judulslidedua = TampilanDepan::where('kode_tampilan','=','judulslidedua')->first();
        $judulslidetiga = TampilanDepan::where('kode_tampilan','=','judulslidetiga')->first();
        $slidesatu = TampilanDepan::where('kode_tampilan','=','slidesatu')->first();
        $slidedua = TampilanDepan::where('kode_tampilan','=','slidedua')->first();
        $slidetiga = TampilanDepan::where('kode_tampilan','=','slidetiga')->first();

        return view('index-frontend',compact('tagline','marquee','copyright','judulgrafik','judulkegiatanotoritas','judulfasilitaspelabuhan','berita','judulgalerifoto','judulgalerivideo','judullinkterkait','judulalamat','alamat','judulslidesatu','judulslidedua','judulslidetiga','slidesatu','slidedua','slidetiga'));
    }
}
