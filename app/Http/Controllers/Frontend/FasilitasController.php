<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Informasi;

class FasilitasController extends Controller
{
	public function index(){
		$konten = Informasi::where('jenis_informasi_id',8)->first();
	    return view('frontend.fasilitas.index',compact('konten'));
	}

	public function batas(){
		$konten = Informasi::where('jenis_informasi_id',8)->first();
		return view('frontend.fasilitas.batas',compact('konten'));
	}

	public function rekapitulasi(){
		$konten = Informasi::where('jenis_informasi_id',9)->first();
		return view('frontend.fasilitas.rekapitulasi',compact('konten'));
	}

	public function dermaga(){
		$konten = Informasi::where('jenis_informasi_id',10)->first();
		return view('frontend.fasilitas.dermaga',compact('konten'));
	}

	public function gudang(){
		$konten = Informasi::where('jenis_informasi_id',11)->first();
		return view('frontend.fasilitas.gudang',compact('konten'));
	}

	public function lapangan(){
		$konten = Informasi::where('jenis_informasi_id',12)->first();
		return view('frontend.fasilitas.lapangan',compact('konten'));
	}

	public function daerahLabuh(){
		$konten = Informasi::where('jenis_informasi_id',13)->first();
		return view('frontend.fasilitas.daerah-labuh',compact('konten'));
	}

	public function breakwater(){
		$konten = Informasi::where('jenis_informasi_id',14)->first();
		return view('frontend.fasilitas.breakwater',compact('konten'));
	}

	public function rencanaInduk(){
		$konten = Informasi::where('jenis_informasi_id',27)->first();
		return view('frontend.fasilitas.rencana-induk-pelabuhan',compact('konten'));
	}

}
