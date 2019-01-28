<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\JenisInformasi;

class Informasi extends Model
{
    use SoftDeletes;
    
    protected $table = 'informasi';
    
    protected $fillable = ['jenis_informasi_id','judul_informasi','konten','gambar','update_id','create_id','delete_id','bulan','tahun'];

    public function informasi(){
    	return $this->hasOne(JenisInformasi::class,'id','jenis_informasi_id');
    }

    public function scopeActive($query){
    	return $query->where("status_aktif","=",1);
    }

    public function scopeLatest($query){
    	return $query->orderBy("id DESC");
    }

    public function scopeJenisInformasi($query,$jenis_informasi_id){
    	return $query->with('informasi')->where("jenis_informasi_id",$jenis_informasi_id);
    }

    public function month(){
        return $this->belongsTo(Bulan::class,'bulan','id');
    }

    public function year(){
        return $this->belongsTo(Tahun::class,'tahun','id');
    }
}
