<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisPelayanan extends Model
{
    use SoftDeletes;
    protected $table='jenis_pelayanan';
    protected $fillable = ['kode_pelayanan', 'nama_pelayanan','keterangan','tipe_form','create_id','update_id','delete_id'];

    public function scopeActive($query){
    	return $query->where("status_aktif","=",1);
    }

    public function scopeLatest($query){
    	return $query->orderBy('ID desc');
    }
}