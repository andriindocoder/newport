<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datetime;
use Dateinterval;
use DatePeriod;

class DwellingTimeController extends Controller
{
    public function fetchData(){
        header('Access-Control-Allow-Origin: *');
        $begin = new Datetime('2018-01-15');
        $end = new Datetime('2018-12-20');
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
                echo "Terminal " . $dwellingTime->terminal . " tanggal " .$dwellingTime->dwelling_date . " telah disimpan. <br>";
                $dwellingTime->save();
            }
        }
    }
}
