<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KategoriBerita extends Model
{
    use SoftDeletes;

    protected $table = 'kategori_berita';
    protected $fillable = ['title','slug','create_id','update_id','status_aktif'];

    public function scopeActive($query){
        return $query->where("status_aktif","=",1);
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
