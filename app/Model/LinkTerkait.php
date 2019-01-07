<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LinkTerkait extends Model
{
    use SoftDeletes;
    protected $table='link_terkait';
    protected $fillable = ['nama_instansi', 'logo_instansi', 'deskripsi','create_id','update_id','delete_id'];

    public function scopeActive($query){
    	return $query->where("status_aktif","=",1);
    }

    public function scopeLatest($query){
    	return $query->orderBy('ID desc');
    }
}