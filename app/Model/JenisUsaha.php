<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisUsaha extends Model
{
    use SoftDeletes;
    protected $table='jenis_usaha';
    protected $fillable = ['jenis_usaha', 'kode_jenis_usaha'];

    public function scopeActive($query){
    	return $query->where("status_aktif","=",1);
    }

    public function scopeLatest($query){
    	return $query->orderBy('ID desc');
    }
}