<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Model\DwellingTime;
use Datetime;
use Dateinterval;
use DatePeriod;
use Illuminate\Support\Facades\DB;

class InsertDwellingTimePerDay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert:dwelling-time-per-day';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert dwelling_times to dwelling_times_per_day';

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
                            'terminal' => $dt->terminal,
                            'dwelling_time' => $dwelling_time,
                            'year' => $dt->year,
                            'dt_id' => $dt->dt_id
                        ]
                    );
                }else{
                    DB::table('dwelling_times_per_day')
                    ->insert(
                        [
                            'dwelling_date' => $dt->dwelling_date,
                            'terminal' => $dt->terminal,
                            'dwelling_time' => $dwelling_time,
                            'year' => $dt->year,
                            'dt_id' => $dt->dt_id
                        ]
                    );
                }
            }
        }
    }
}
