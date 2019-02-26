<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubMenu extends Model
{
    use SoftDeletes;
    protected $table='sub_menu';
    protected $fillable = ['menu_id', 'judul_menu', 'slug', 'konten', 'attachment', 'create_id', 'updated_id', 'delete_id'];

    public function scopeActive($query){
    	return $query->where("status_aktif","=",1);
    }

    public function scopeLatest($query){
    	return $query->orderBy('ID desc');
    }
}