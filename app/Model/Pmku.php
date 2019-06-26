<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\Wilayah;
use App\Model\JenisUsaha;

class Pmku extends Model
{
    use SoftDeletes;
    
    protected $table = 'pmku';
    
    protected $fillable = ['nomor_siup','npwp','nama_perusahaan','nomor_akta','penanggung_jawab','email_perusahaan','alamat_perusahaan','status_registrasi','file_npwp','file_struktur','file_siup','file_akta','file_domisili','file_ktp','telepon','fax','hotline','badan_usaha','jenis_usaha_id','tanggal_siup','tempat_kantor','wilayah_id','create_id','update_id','delete_id'];

    public function scopeActive($query){
    	return $query->where("status_aktif","=",1);
    }

    public function scopeLatest($query){
    	return $query->orderBy("id DESC");
    }

    public function wilayah(){
        return $this->belongsTo(Wilayah::class);
    }

    public function jenisUsaha(){
        return $this->belongsTo(JenisUsaha::class);
    }
}
