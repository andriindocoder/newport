<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\KategoriVideo;

class GaleriVideo extends Model
{
    use SoftDeletes;

    protected $fillable = ['judul_video','link_video','create_id', 'update_id', 'delete_id', 'status_aktif','kategori_video_id'];

    protected $table = 'galeri_video';
    protected $dates = ['deleted_at'];

    public function kategoriVideo(){
        return $this->belongsTo(KategoriVideo::class);
    }

    public function scopeActive($query){
    	return $query->where("status_aktif","=",1);
    }

    public function scopeLatest($query){
    	return $query->orderBy("id DESC");
    }
}
