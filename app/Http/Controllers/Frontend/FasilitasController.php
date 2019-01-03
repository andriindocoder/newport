<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FasilitasController extends Controller
{
	public function index(){
	    return view('frontend.fasilitas.index');
	}

	public function batas(){
		return view('frontend.fasilitas.batas');
	}

	public function rekapitulasi(){
		return view('frontend.fasilitas.rekapitulasi');
	}

	public function dermaga(){
		return view('frontend.fasilitas.dermaga');
	}

	public function gudang(){
		return view('frontend.fasilitas.gudang');
	}

	public function lapangan(){
		return view('frontend.fasilitas.lapangan');
	}

	public function daerahLabuh(){
		return view('frontend.fasilitas.daerah-labuh');
	}

	public function breakwater(){
		return view('frontend.fasilitas.breakwater');
	}

}
