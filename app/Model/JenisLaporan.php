<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisLaporan extends Model
{
    use SoftDeletes;
    protected $table='jenis_pelaporan';
    protected $fillable = ['kode', 'nama','keterangan','create_id','update_id','delete_id'];

    public function scopeActive($query){
    	return $query->where("status_aktif","=",1);
    }

    public function scopeLatest($query){
    	return $query->orderBy('ID desc');
    }
}