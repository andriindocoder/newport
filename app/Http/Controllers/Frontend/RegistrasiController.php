<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrasiController extends Controller
{
    public function index(){
        return view('frontend.registrasi.index');
    }

    public function tipePerusahaan(Request $request){
        if($request->get('agen_pelayaran') == 1){
            return view('frontend.registrasi.ap');
        }else{
            return view('frontend.registrasi.non-ap');  
        }
    }

    public function pmku(){
        
    }
}
