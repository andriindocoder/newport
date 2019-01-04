<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Pelaporan;
use App\Http\Requests\Frontend\PelaporanStoreRequest;

class PelaporanController extends Controller
{
    public function index(){
    	$pelaporan = new Pelaporan();
    	return view('frontend.pelaporan.index',compact('pelaporan'));
    }

    public function store(PelaporanStoreRequest $request){
    	dd("test");
    }
}
