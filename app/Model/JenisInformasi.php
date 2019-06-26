<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisInformasi extends Model
{
    use SoftDeletes;
    protected $table='jenis_informasi';
    protected $fillable = ['kode', 'nama','keterangan','create_id','update_id','delete_id'];

    public function scopeActive($query){
    	return $query->where("status_aktif","=",1);
    }

    public function scopeLatest($query){
    	return $query->orderBy('ID desc');
    }
}