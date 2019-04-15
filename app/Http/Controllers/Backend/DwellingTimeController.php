<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datetime;
use Dateinterval;
use DatePeriod;
use Illuminate\Support\Facades\DB;
use App\Model\DwellingTime;

class DwellingTimeController extends Controller
{
    public function fetchData(){
        header('Access-Control-Allow-Origin: *');
        $begin = new Datetime('2018-01-01');
        $end = new Datetime('2019-03-17');
        $interval = DateInterval::createFromDateString('1 day');
        $period = new DatePeriod($begin, $interval, $end);
        foreach ($period as $dt) {
            $date = $dt->format("Y-m-d");
            $url = "http://gw-inaportnet.dephub.go.id/api/report/dwelling-time/IDJKT/{$date}";
            $response = file_get_contents($url);
            $data = json_decode($response);
            foreach($data as $dt){
                $dwellingTime = new \App\Model\DwellingTime();
                $dwellingTime->dt_id = $dt->id;
                $dwellingTime->port = $dt->port_id;
                $dwellingTime->terminal = $dt->terminal_id;
                $dwellingTime->dwelling_date = $dt->dwelling_date;
                $dwellingTime->dwelling_time = $dt->dwelling_time;
                $dwellingTime->year = substr($dt->dwelling_date,0,4);
                echo "Terminal " . $dwellingTime->terminal . " tanggal " .$dwellingTime->dwelling_date . " telah disimpan. <br>";
                $dwellingTime->save();
            }
        }
    }

    public function testCron(){
        header('Access-Control-Allow-Origin: *');
        $today = new Datetime('now');
        $begin = new Datetime(date('Y-m-d', strtotime("-29 days")));
        $end = new Datetime($today->format('Y-m-d'));
        $interval = DateInterval::createFromDateString('1 day');
        $period = new DatePeriod($begin, $interval, $end);
        foreach ($period as $dt) {
            $date = $dt->format("Y-m-d");
            $url = "http://gw-inaportnet.dephub.go.id/api/report/dwelling-time/IDJKT/{$date}";
            $response = file_get_contents($url);
            $data = json_decode($response);
            foreach($data as $dta){
                $checkdt = DwellingTime::where('dt_id',$dta->id)->first();
                if($checkdt){
                    if($checkdt->port == '' || $checkdt->terminal == '' || $checkdt->dwelling_date == '' || $checkdt->dwelling_time == '' || $checkdt->year == ''){
                        $checkdt->port = $dta->port_id;
                        $checkdt->terminal = $dta->terminal_id;
                        $checkdt->dwelling_date = $dta->dwelling_date;
                        $checkdt->dwelling_time = $dta->dwelling_time;
                        $checkdt->year = substr($dta->dwelling_date,0,4);
                        $checkdt->save();
                    }
                }else{
                    $dwellingTime = new DwellingTime();
                    $dwellingTime->dt_id = $dta->id;
                    $dwellingTime->port = $dta->port_id;
                    $dwellingTime->terminal = $dta->terminal_id;
                    $dwellingTime->dwelling_date = $dta->dwelling_date;
                    $dwellingTime->dwelling_time = $dta->dwelling_time;
                    $dwellingTime->year = substr($dta->dwelling_date,0,4);
                    // echo "Terminal " . $dwellingTime->terminal . " tanggal " .$dwellingTime->dwelling_date . " telah disimpan. <br>";
                    $dwellingTime->save();
                }
            }
        }
    }

    public function fetchPerDay(){
        $dts = DB::table('dwelling_times')->get();
            foreach($dts as $dt){
                $dwelling_time = $dt->dwelling_time/86400;
                $dwelling_time = number_format((float)$dwelling_time, 2, '.', '');
                    DB::table('dwelling_times_per_day')
                    ->insert(
                        [
                            'dwelling_date' => $dt->dwelling_date,
                            'terminal'      => $dt->terminal,
                            'dwelling_time' => $dwelling_time,
                            'year'          => $dt->year,
                            'dt_id'         => $dt->dt_id
                        ]
                    );
                    echo "Terminal " . $dt->terminal . " tanggal " .$dt->dwelling_date . " telah disimpan. <br>";
            }
    }

    public function testFetchPerDay(){
        $today = new Datetime('now');
        $begin = new Datetime(date('Y-m-d', strtotime("-29 days")));
        $end = new Datetime($today->format('Y-m-d'));
        $interval = DateInterval::createFromDateString('1 day');
        $period = new DatePeriod($begin, $interval, $end);
        foreach($period as $dwelling){
            $date = $dwelling->format("Y-m-d");
            $dts = DB::table('dwelling_times')
                    ->where('dwelling_date',$date)
                    ->get();
            foreach($dts as $dt){
                $dwelling_time = $dt->dwelling_time/86400;
                $dwelling_time = number_format((float)$dwelling_time, 2, '.', '');
                $checkdt = DB::table('dwelling_times_per_day')->where('dt_id',$dt->dt_id)->first();

                if(isset($checkdt)){
                    DB::table('dwelling_times_per_day')
                    ->where('dt_id',$checkdt->dt_id)
                    ->update(
                        [
                            'dwelling_date' => $dt->dwelling_date,
                            'terminal'      => $dt->terminal,
                            'dwelling_time' => $dwelling_time,
                            'year'          => $dt->year,
                            'dt_id'         => $dt->dt_id
                        ]
                    );
                }else{
                    DB::table('dwelling_times_per_day')
                    ->insert(
                        [
                            'dwelling_date' => $dt->dwelling_date,
                            'terminal'      => $dt->terminal,
                            'dwelling_time' => $dwelling_time,
                            'year'          => $dt->year,
                            'dt_id'         => $dt->dt_id
                        ]
                    );
                }
            }
        }
    }

    public function perDay(){
        return view('frontend.dwelling-time.chart-per-day');
    }
}
