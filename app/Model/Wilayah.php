<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wilayah extends Model
{
    use SoftDeletes;
    
    protected $table = 'wilayah';
    
    public function scopeActive($query){
    	return $query->where("status","=",1);
    }
}
