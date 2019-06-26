<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengaduan extends Model
{
    use SoftDeletes;
    
    protected $table = 'pengaduan';
    
    protected $fillable = ['namafile','nama','email','instansi','alamat','pesan','status_pengaduan','no_pengaduan','balasan','jenis_id','nomor_id'];

    public function scopeActive($query){
    	return $query->where("status_aktif","=",1);
    }

    public function scopeLatest($query){
    	return $query->orderBy("id DESC");
    }

    public function updater(){
        return $this->belongsTo(User::class,'update_id','id');
    }
}
