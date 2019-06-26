<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\Bulan;
use App\Model\Tahun;

class Pelaporan extends Model
{
    use SoftDeletes;
    
    protected $table = 'pelaporan';
    
    protected $fillable = ['jenis_pelaporan_id','pmku_id','no_pelaporan','status_pelaporan','judul_laporan','konten','gambar','bulan','tahun','balasan'];

    public function scopeActive($query){
    	return $query->where("status_aktif","=",1);
    }

    public function month(){
        return $this->belongsTo(Bulan::class,'bulan','id');
    }

    public function year(){
        return $this->belongsTo(Tahun::class,'tahun','id');
    }
}
