<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelayanan extends Model
{
    use SoftDeletes;
    
    protected $table = 'pelayanan';
    
    protected $fillable = ['jenis_pelayanan_id','pmku_id','no_pelayanan','status_pelayanan','gambar','konten','balasan','update_id','create_id','delete_id'];

    public function scopeActive($query){
    	return $query->where("status_aktif","=",1);
    }

    public function scopeLatest($query){
    	return $query->orderBy("id DESC");
    }

    public function updater(){
        return $this->belongsTo(User::class,'update_id','id');
    }

    public function jenisPelayanan(){
        return $this->belongsTo(JenisPelayanan::class);
    }
}
