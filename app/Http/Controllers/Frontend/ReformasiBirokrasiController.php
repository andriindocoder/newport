<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Informasi;
use App\Model\SubMenu;

class ReformasiBirokrasiController extends Controller
{
    public function index(){
    	$konten = Informasi::where('jenis_informasi_id',28)->first();
    	$subMenus = Submenu::latest()->get();
    	return view('frontend.reformasi-birokrasi.index',compact('konten','subMenus'));
    }
}
