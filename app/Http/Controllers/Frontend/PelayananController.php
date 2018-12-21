<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Pelayanan;

class PelayananController extends Controller
{
    private function listBadanUsaha(){
        return [
            'PT' => 'PT',
            'Perusahaan Perorangan' => 'Perusahaan Perorangan',
            'Firma' => 'Firma',
            'CV' => 'CV',
            'Koperasi' => 'Koperasi',
            'PD' => 'PD',
            'Perum' => 'Perum',
            'Persero' => 'Persero',
        ];
    }

    private function listTempatKantor(){
        return [
            '1' => 'Kantor Pusat',
            '2' => 'Kantor Cabang',
        ];
    }

    public function rekomendasi(){
        return view('frontend.pelayanan.rekomendasi');
    }

    public function docking(){
        $docking = new Pelayanan();
        $listBadanUsaha = $this->listBadanUsaha();
        $listTempatKantor = $this->listTempatKantor();
        return view('frontend.pelayanan.docking',compact('docking','listBadanUsaha','listTempatKantor'));
    }

    public function store(){

    }

}
