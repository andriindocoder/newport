<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\KategoriFoto;

class GaleriFoto extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'caption', 'namafile', 'extension', 'create_id', 'update_id', 'delete_id', 'status_aktif','kategori_foto_id'];

    protected $table = 'galeri_foto';
    protected $dates = ['deleted_at'];

    public function kategoriFoto(){
        return $this->belongsTo(KategoriFoto::class);
    }

    public function scopeActive($query){
    	return $query->where("status_aktif","=",1);
    }

    public function scopeLatest($query){
    	return $query->orderBy("id DESC");
    }
}
