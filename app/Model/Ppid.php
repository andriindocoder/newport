<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ppid extends Model
{
    use SoftDeletes;
    
    protected $table = 'ppid';
    
    protected $fillable = ['no_ppid','nama_lengkap','alamat', 'pekerjaan', 'jenis_id', 'nomor_id', 'email', 'telepon', 'rincian_info', 'tujuan_info', 'cara_info', 'cara_salinan', 'file_berkas', 'status_ppid','status_aktif','balasan','updated_id'];

    public function scopeActive($query){
    	return $query->where("status_aktif","=",1);
    }

    public function scopeLatest($query){
        return $query->orderBy("id","DESC");
    }
}
