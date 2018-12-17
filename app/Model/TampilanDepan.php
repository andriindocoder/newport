<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TampilanDepan extends Model
{
    use SoftDeletes;

    protected $table = 'tampilan_depan';
    protected $fillable = ['kode_tampilan','konten','foto','tampilkan','create_id','update_id','status_aktif'];

    public function scopeActive($query){
        return $query->where("status_aktif","=",1);
    }

    public function scopeLatest($query){
        return $query->orderBy("id DESC");
    }
}
