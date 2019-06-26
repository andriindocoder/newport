<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Datetime;
use Dateinterval;
use DatePeriod;

class ApiController extends Controller
{
    public function dtDaily(){
        $today = new Datetime('now');
        $begin = new Datetime('2019-01-01');
        $end = new Datetime($today->format('Y-m-d'));
        $interval = DateInterval::createFromDateString('1 day');
        $period = new DatePeriod($begin, $interval, $end);
        $jict=[];
        $npct1=[];
        $koja=[];
        $tmal=[];
        $ter3=[];
        foreach ($period as $dwelling) {
            $date = $dwelling->format("Y-m-d");
            //JICT
            $arrayJICT = DB::table('dwelling_times_per_day')
                    ->where('terminal','JICT')
                    ->where('dwelling_date',$date)
                    ->first();
            if($arrayJICT){
                $jict[] = $arrayJICT->dwelling_time;
            }else{
                $jict[] = 0.00;
            }
            //NPCT1
            $arrayNPCT1 = DB::table('dwelling_times_per_day')
                    ->where('terminal','NPCT1')
                    ->where('dwelling_date',$date)
                    ->first();
            if($arrayNPCT1){
                $npct1[] = $arrayNPCT1->dwelling_time;
            }else{
                $npct1[] = 0.00;
            }
            //KOJA
            $arrayKoja = DB::table('dwelling_times_per_day')
                    ->where('terminal','KOJA')
                    ->where('dwelling_date',$date)
                    ->first();
            if($arrayKoja){
                $koja[] = $arrayKoja->dwelling_time;
            }else{
                $koja[] = 0.00;
            }
            //TMAL
            $arrayTmal = DB::table('dwelling_times_per_day')
                    ->where('terminal','TMAL')
                    ->where('dwelling_date',$date)
                    ->first();
            if($arrayTmal){
                $tmal[] = $arrayTmal->dwelling_time;
            }else{
                $tmal[] = 0.00;
            }
            //Terminal 3
            $arrayTer3 = DB::table('dwelling_times_per_day')
                    ->where('terminal','TER3')
                    ->where('dwelling_date',$date)
                    ->first();
            if($arrayTer3){
                $ter3[] = $arrayTer3->dwelling_time;
            }else{
                $ter3[] = 0.00;
            }
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

    public function dtMonthly(){
        $arrayLabels = DB::table('dwelling_times_per_day')
                ->select('dwelling_date')
                ->distinct()
                ->where('year',2019)
                ->get();
        $labels = [];
        foreach($arrayLabels as $label){
            $labels[]=$label->dwelling_date;
        }
        
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
            'labels' => $labels,
            'jict'  => $jict,
            'npct1' => $npct1,
            'koja'  => $koja,
            'tmal'  => $tmal,
            'ter3'  => $ter3
        ];

        return response()->json($all,200);
    }

    public function dt(){
    	$arrayLabels = DB::table('dwelling_times_per_day')
                ->select('dwelling_date')
                ->distinct()
                ->where('year',2019)
                ->get();
        $labels = [];
        foreach($arrayLabels as $label){
            $labels[]=$label->dwelling_date;
        }
    	
    	$today = new Datetime('now');
        $begin = new Datetime('2019-01-01');
        $end = new Datetime($today->format('Y-m-d'));
        $interval = DateInterval::createFromDateString('1 day');
        $period = new DatePeriod($begin, $interval, $end);
        $jict=[];
        $npct1=[];
        $koja=[];
        $tmal=[];
        $ter3=[];
        foreach ($period as $dwelling) {
            $date = $dwelling->format("Y-m-d");
            //JICT
            $arrayJICT = DB::table('dwelling_times_per_day')
                    ->where('terminal','JICT')
                    ->where('dwelling_date',$date)
                    ->first();
            if($arrayJICT){
                $jict[] = $arrayJICT->dwelling_time;
            }else{
                $jict[] = 0.00;
            }
            //NPCT1
            $arrayNPCT1 = DB::table('dwelling_times_per_day')
                    ->where('terminal','NPCT1')
                    ->where('dwelling_date',$date)
                    ->first();
            if($arrayNPCT1){
                $npct1[] = $arrayNPCT1->dwelling_time;
            }else{
                $npct1[] = 0.00;
            }
            //KOJA
            $arrayKoja = DB::table('dwelling_times_per_day')
                    ->where('terminal','KOJA')
                    ->where('dwelling_date',$date)
                    ->first();
            if($arrayKoja){
                $koja[] = $arrayKoja->dwelling_time;
            }else{
                $koja[] = 0.00;
            }
            //TMAL
            $arrayTmal = DB::table('dwelling_times_per_day')
                    ->where('terminal','TMAL')
                    ->where('dwelling_date',$date)
                    ->first();
            if($arrayTmal){
                $tmal[] = $arrayTmal->dwelling_time;
            }else{
                $tmal[] = 0.00;
            }
            //Terminal 3
            $arrayTer3 = DB::table('dwelling_times_per_day')
                    ->where('terminal','TER3')
                    ->where('dwelling_date',$date)
                    ->first();
            if($arrayTer3){
                $ter3[] = $arrayTer3->dwelling_time;
            }else{
                $ter3[] = 0.00;
            }
        }
        
        $all = [
            'labels' => $labels,
            'jict'  => $jict,
            'npct1' => $npct1,
            'koja'  => $koja,
            'tmal'  => $tmal,
            'ter3'  => $ter3
        ];

        return response()->json($all,200);
    }
}
