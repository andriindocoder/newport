<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Model\DwellingTime;
use Datetime;
use Dateinterval;
use DatePeriod;

class InsertDwellingTime extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert:dwelling-time';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert Dwelling Time to dwelling_times';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
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
}
