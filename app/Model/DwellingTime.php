<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DwellingTime extends Model
{
    protected $date = ['dwelling_date'];
    protected $fillable = ['port','terminal','dwelling_date','dwelling_time','dt_id'];
}
