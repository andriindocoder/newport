<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profil extends Model
{
	use SoftDeletes;

    protected $table = 'profil';
    protected $fillable = ['kode','title','slug','konten','gambar1','gambar2','gambar3','gambar4','gambar5'];

    public function scopeActive($query){
    	return $query->where("status_aktif","=",1);
    }
}
