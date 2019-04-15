<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function dt(){
    	// $arrayJICT = [5,5,5,5,5,5,5,5,5,5,5,5];
    	
    	$arrayJICT = DB::table('dwelling_times_per_month')
    			->where('terminal','JICT')
    			->get();
    	$jict = [];
    	foreach ($arrayJICT as $single) {
    		$jict[] = $single->dwelling_time;
    	}

    	$arrayNPCT1 = DB::table('dwelling_times_per_month')
    			->where('terminal','NPCT1')
    			->get();
    	$npct1 = [];
    	foreach ($arrayNPCT1 as $single) {
    		$npct1[] = $single->dwelling_time;
    	}

    	$arrayKoja = DB::table('dwelling_times_per_month')
    			->where('terminal','KOJA')
    			->get();
    	$koja = [];
    	foreach ($arrayKoja as $single) {
    		$koja[] = $single->dwelling_time;
    	}

    	$arrayTMAL = DB::table('dwelling_times_per_month')
    			->where('terminal','TMAL')
    			->get();
    	$tmal = [];
    	foreach ($arrayTMAL as $single) {
    		$tmal[] = $single->dwelling_time;
    	}

    	$arrayTER3 = DB::table('dwelling_times_per_month')
    			->where('terminal','TER3')
    			->get();
    	$ter3 = [];
    	foreach ($arrayTER3 as $single) {
    		$ter3[] = $single->dwelling_time;
    	}

    	$all = [
			'jict'  => $jict,
			'npct1' => $npct1,
			'koja'  => $koja,
			'tmal'  => $tmal,
			'ter3'  => $ter3
    	];

    	return response()->json($all,200);
    }
}
