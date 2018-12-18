<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LinkTerkait extends Model
{
    use SoftDeletes;
    protected $table='link_terkait';
    protected $fillable = ['nama_instansi', 'logo_instansi', 'deskripsi'];

    public function scopeActive($query){
    	return $query->where("status_aktif","=",1);
    }
}