<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PelayananSikk extends Model
{
    use SoftDeletes;
    
    protected $table = 'pelayanan_sikk';
    
    protected $fillable = ['nomor_pelayanan','keterangan_peta','rencana_kedalaman','volume','file_lokasi','file_peta','file_rekomendasi','file_distrik_navigasi','file_rekomendasi_syahbandar','keterangan_lokasi','maksud_tujuan','balasan','update_id','create_id','delete_id','status_aktif','status_pelayanan','jenis_pelayanan_id'];

    public function scopeActive($query){
    	return $query->where("status_aktif","=",1);
    }

    public function scopeLatest($query){
    	return $query->orderBy("id DESC");
    }
}
