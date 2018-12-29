<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*-----------------index-----------------------*/
Auth::routes();
Route::match(['get', 'post'], 'register', function(){
    return redirect('/');
});

Route::get('/home',[
    'uses'  => 'HomeController@index',
    'as'    => 'home' ,
    'middleware' => ['role:superadmin|keuangan|kepegawaian|humas|renpro|desain|tarif|lala|fasilitas|bimus']
]);
/*--------------------end of index-------------*/

/*-------------------backend-------------------*/
Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function(){
    Route::group(['middleware'=>['role:superadmin|humas']], function(){
        Route::resource('kategori-berita', 'Backend\KategoriBeritaController');
        Route::resource('kategori-foto', 'Backend\KategoriFotoController');
        Route::resource('jenis-usaha', 'Backend\JenisUsahaController');
        Route::resource('jenis-pelayanan', 'Backend\JenisPelayananController');
        Route::resource('tampilan-depan', 'Backend\TampilanDepanController');
        Route::resource('berita', 'Backend\BeritaController');
        Route::resource('link-terkait', 'Backend\LinkTerkaitController');
        Route::put('link-terkait/restore/{id}',[
            'uses' => 'Backend\LinkTerkaitController@restore',
            'as' => 'link-terkait.restore'
        ]);
        Route::delete('link-terkait/force-destroy/{id}',[
            'uses' => 'Backend\LinkTerkaitController@forceDestroy',
            'as' => 'link-terkait.force-destroy'
        ]);
        Route::resource('galeri-foto', 'Backend\GaleriFotoController');
        Route::put('galeri-foto/restore/{id}',[
            'uses' => 'Backend\GaleriFotoController@restore',
            'as' => 'galeri-foto.restore'
        ]);
        Route::delete('galeri-foto/force-destroy/{id}',[
            'uses' => 'Backend\GaleriFotoController@forceDestroy',
            'as' => 'galeri-foto.force-destroy'
        ]);
    });
});

Route::get('kategori-berita-data', ['as'=>'kategori-berita.data','uses'=>'Backend\KategoriBeritaController@getData']);
Route::get('kategori-foto-data', ['as'=>'kategori-foto.data','uses'=>'Backend\KategoriFotoController@getData']);
Route::get('tampilan-depan-data', ['as'=>'tampilan-depan.data','uses'=>'Backend\TampilanDepanController@getData']);
Route::get('jenis-usaha-data', ['as'=>'jenis-usaha.data','uses'=>'Backend\JenisUsahaController@getData']);
Route::get('jenis-pelayanan-data', ['as'=>'jenis-pelayanan.data','uses'=>'Backend\JenisPelayananController@getData']);


/*-------------------enf of backend-------------*/

/*-------------------frontend-------------------*/
Route::get('/',[
    'uses' => 'Frontend\TampilanDepanController@index',
    'as'    => 'tampilan-depan.index'
]);

Route::resource('berita', 'Frontend\BeritaController');
Route::get('/kategori-berita/{category}', [
    'uses' => 'Frontend\BeritaController@category',
    'as' => 'berita.kategori',
]);

Route::get('/profil/sejarah',[
	'uses' 	=> 'Frontend\ProfilController@sejarah',
	'as' 	=> 'profil.sejarah',
]);
Route::get('/profil/struktur',[
	'uses' 	=> 'Frontend\ProfilController@struktur',
	'as' 	=> 'profil.struktur',
]);
Route::get('/profil/visi-misi',[
	'uses' 	=> 'Frontend\ProfilController@visimisi',
	'as' 	=> 'profil.visimisi',
]);
Route::get('/profil/tupoksi',[
	'uses' 	=> 'Frontend\ProfilController@tupoksi',
	'as' 	=> 'profil.tupoksi',
]);
Route::resource('profil', 'Frontend\ProfilController');

Route::get('/galeri-foto',[
    'uses'  => 'Frontend\TampilanDepanController@galeriFoto',
    'as'    => 'galeri-foto', 
]);

Route::resource('pengaduan', 'Frontend\PengaduanController');

Route::get('/ppid',[
    'uses'  => 'Frontend\PpidController@index',
    'as'    => 'ppid'
]);

Route::post('/ppid',[
    'uses'  => 'Frontend\PpidController@store',
    'as'    => 'ppid.store'
]);

Route::get('/ppid/form',[
	'uses' 	=> 'Frontend\PpidController@form',
	'as' 	=> 'ppid.form',
]);

Route::get('/ppid/dasar-hukum',[
	'uses' 	=> 'Frontend\PpidController@dasarHukum',
	'as' 	=> 'ppid.dasar-hukum',
]);

Route::get('/ppid/profil',[
	'uses' 	=> 'Frontend\PpidController@profil',
	'as' 	=> 'ppid.profil',
]);

Route::get('/ppid/maklumat-pelayanan',[
    'uses'  => 'Frontend\PpidController@maklumatPelayanan',
    'as'    => 'ppid.maklumat-pelayanan',
]);

Route::get('/ppid/standar-layanan',[
    'uses'  => 'Frontend\PpidController@standarLayanan',
    'as'    => 'ppid.standar-layanan',
]);

Route::get('/ppid/simpul-layanan',[
    'uses'  => 'Frontend\PpidController@simpulLayanan',
    'as'    => 'ppid.simpul-layanan',
]);

Route::get('/ppid/jumlah-permintaan-informasi',[
    'uses'  => 'Frontend\PpidController@jumlahPermintaanInformasi',
    'as'    => 'ppid.jumlah-permintaan-informasi',
]);

Route::get('/ppid/prosedur-permohonan',[
    'uses'  => 'Frontend\PpidController@prosedurPermohonan',
    'as'    => 'ppid.prosedur-permohonan',
]);

Route::get('/ppid/tata-cara-memperoleh-informasi-publik',[
    'uses'  => 'Frontend\PpidController@tataCaraInformasi',
    'as'    => 'ppid.tata-cara-memperoleh-informasi-publik',
]);

Route::get('/ppid/tata-cara-pengajuan-keberatan',[
    'uses'  => 'Frontend\PpidController@tataCaraKeberatan',
    'as'    => 'ppid.tata-cara-pengajuan-keberatan',
]);

Route::get('/ppid/hak-dan-kewajiban-badan-publik',[
    'uses'  => 'Frontend\PpidController@hakKewajibanBadanPublik',
    'as'    => 'ppid.hak-dan-kewajiban-badan-publik',
]);

Route::get('/ppid/hak-dan-kewajiban-pemohon-informasi',[
    'uses'  => 'Frontend\PpidController@hakKewajibanPemohon',
    'as'    => 'ppid.hak-dan-kewajiban-pemohon-informasi',
]);

Route::get('/ppid/uji-coba',[
    'uses'  => 'Frontend\PpidController@ujiCoba',
    'as'    => 'ppid.uji-coba',
]);

Route::get('/registrasi',[
    'uses'  => 'Frontend\RegistrasiController@index',
    'as'    => 'registrasi' 
]);

Route::get('/registrasi-perusahaan',[
    'uses'  => 'Frontend\RegistrasiController@tipePerusahaan',
    'as'    => 'registrasi.tipe-perusahaan'
]);

Route::post('/registrasi-perusahaan',[
    'uses'  => 'Frontend\RegistrasiController@tipePerusahaan',
    'as'    => 'registrasi.tipe-perusahaan'
]);

Route::post('/registrasi-pmku',[
    'uses'  => 'Frontend\RegistrasiController@pmku',
    'as'    => 'registrasi.pmku'
]);

Route::post('/registrasi-pmku-save',[
    'uses'  => 'Frontend\RegistrasiController@store',
    'as'    => 'registrasi.store'
]);

Route::post('/registrasi-pmku-cek-siupkk',[
	'uses'  => 'Frontend\RegistrasiController@cekSiupkk',
	'as'	=> 'registrasi.cek-siupkk' 
]);

Route::get('/registrasi-pmku-cek-nib',[
	'uses'  => 'Frontend\RegistrasiController@cekNib',
	'as'	=> 'registrasi.cek-nib' 
]);

Route::group(['middleware'=>['auth']], function(){
	Route::get('/rekomendasi',[
		'uses' 	=> 'Frontend\PelayananController@rekomendasi',
		'as' 	=> 'pelayanan.rekomendasi',
    ]);
    Route::get('/docking',[
        'uses'  => 'Frontend\PelayananController@docking',
        'as'    => 'pelayanan.docking',
    ]);
    Route::post('/docking',[
        'uses'  => 'Frontend\PelayananController@store',
        'as'    => 'pelayanan.store',
    ]);
    Route::get('/fumigasi',[
        'uses'  => 'Frontend\PelayananController@fumigasi',
        'as'    => 'pelayanan.fumigasi',
    ]);
    Route::post('/fumigasi',[
        'uses'  => 'Frontend\PelayananController@store',
        'as'    => 'pelayanan.store',
    ]);
    Route::get('/bunker-darat',[
        'uses'  => 'Frontend\PelayananController@bunkerDarat',
        'as'    => 'pelayanan.bunker-darat',
    ]);
    Route::post('/bunker-darat',[
        'uses'  => 'Frontend\PelayananController@store',
        'as'    => 'pelayanan.store',
    ]);
    Route::get('/pelayanan-supplier',[
        'uses'  => 'Frontend\PelayananController@pelayananSupplier',
        'as'    => 'pelayanan.pelayanan-supplier',
    ]);
    Route::post('/pelayanan-supplier',[
        'uses'  => 'Frontend\PelayananController@store',
        'as'    => 'pelayanan.store',
    ]);
    Route::get('/rekomendasi-cabang-ap',[
        'uses'  => 'Frontend\PelayananController@rekomendasiCabangAp',
        'as'    => 'pelayanan.rekomendasi-cabang-ap',
    ]);
    Route::post('/rekomendasi-cabang-ap',[
        'uses'  => 'Frontend\PelayananController@store',
        'as'    => 'pelayanan.store',
    ]);
    Route::get('/rekomendasi-cabang-siupkk',[
        'uses'  => 'Frontend\PelayananController@rekomendasiCabangSiupkk',
        'as'    => 'pelayanan.rekomendasi-cabang-siupkk',
    ]);
    Route::post('/rekomendasi-cabang-siupkk',[
        'uses'  => 'Frontend\PelayananController@store',
        'as'    => 'pelayanan.store',
    ]);
    Route::get('/rekomendasi-siup-pbm',[
        'uses'  => 'Frontend\PelayananController@rekomendasiSiupPbm',
        'as'    => 'pelayanan.rekomendasi-siup-pbm',
    ]);
    Route::post('/rekomendasi-siup-pbm',[
        'uses'  => 'Frontend\PelayananController@store',
        'as'    => 'pelayanan.store',
    ]);
});
/*-------------------enf of frontend-------------*/


/*-------------------system----------------------*/
Route::get('/dwelling-time',[
    'uses' => 'Backend\DwellingTimeController@fetchData',
    'as' => 'dwelling-time.fetch'
]);

Route::get('/dwelling-time-per-hari',[
    'uses' => 'Backend\DwellingTimeController@perDay',
    'as' => 'dwelling-time.day'
]);
/*-------------------end of system---------------*/