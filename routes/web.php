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
Route::group(['prefix'=>'admin', 'middleware'=>['auth'],'as'=>'admin.'], function(){
    Route::group(['middleware'=>['role:superadmin|humas']], function(){
        Route::resource('kategori-berita', 'Backend\KategoriBeritaController');
        Route::resource('kategori-foto', 'Backend\KategoriFotoController');
        Route::resource('kategori-video', 'Backend\KategoriVideoController');
        Route::resource('jenis-usaha', 'Backend\JenisUsahaController');
        Route::resource('jenis-pelayanan', 'Backend\JenisPelayananController');
        Route::resource('jenis-informasi', 'Backend\JenisInformasiController');
        Route::resource('jenis-laporan', 'Backend\JenisLaporanController');
        Route::resource('tampilan-depan', 'Backend\TampilanDepanController');
        Route::resource('berita', 'Backend\BeritaController');
        Route::put('berita/restore/{id}',[
            'uses' => 'Backend\BeritaController@restore',
            'as' => 'berita.restore'
        ]);
        Route::delete('berita/force-destroy/{id}',[
            'uses' => 'Backend\BeritaController@forceDestroy',
            'as' => 'berita.force-destroy'
        ]);
        Route::resource('link-terkait', 'Backend\LinkTerkaitController');
        Route::put('link-terkait/restore/{id}',[
            'uses' => 'Backend\LinkTerkaitController@restore',
            'as' => 'link-terkait.restore'
        ]);
        Route::delete('link-terkait/force-destroy/{id}',[
            'uses' => 'Backend\LinkTerkaitController@forceDestroy',
            'as' => 'link-terkait.force-destroy'
        ]);
        Route::resource('informasi', 'Backend\InformasiController');
        Route::put('informasi/restore/{id}',[
            'uses' => 'Backend\InformasiController@restore',
            'as' => 'informasi.restore'
        ]);
        Route::delete('informasi/force-destroy/{id}',[
            'uses' => 'Backend\InformasiController@forceDestroy',
            'as' => 'informasi.force-destroy'
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
        Route::resource('galeri-video', 'Backend\GaleriVideoController');
        Route::put('galeri-video/restore/{id}',[
            'uses' => 'Backend\GaleriVideoController@restore',
            'as' => 'galeri-video.restore'
        ]);
        Route::delete('galeri-video/force-destroy/{id}',[
            'uses' => 'Backend\GaleriVideoController@forceDestroy',
            'as' => 'galeri-video.force-destroy'
        ]);
        Route::get('info/{data}', [
            'uses'=>'Backend\InformasiController@index',
            'as'    => 'info.informasi',
        ]);
    });
});

Route::get('kategori-berita-data', ['as'=>'admin.kategori-berita.data','uses'=>'Backend\KategoriBeritaController@getData']);
Route::get('kategori-foto-data', ['as'=>'admin.kategori-foto.data','uses'=>'Backend\KategoriFotoController@getData']);
Route::get('kategori-video-data', ['as'=>'admin.kategori-video.data','uses'=>'Backend\KategoriVideoController@getData']);
Route::get('tampilan-depan-data', ['as'=>'admin.tampilan-depan.data','uses'=>'Backend\TampilanDepanController@getData']);
Route::get('jenis-usaha-data', ['as'=>'admin.jenis-usaha.data','uses'=>'Backend\JenisUsahaController@getData']);
Route::get('jenis-pelayanan-data', ['as'=>'admin.jenis-pelayanan.data','uses'=>'Backend\JenisPelayananController@getData']);
Route::get('jenis-informasi-data', ['as'=>'admin.jenis-informasi.data','uses'=>'Backend\JenisInformasiController@getData']);
Route::get('jenis-laporan-data', ['as'=>'admin.jenis-laporan.data','uses'=>'Backend\JenisLaporanController@getData']);


/*-------------------enf of backend-------------*/

/*-------------------frontend-------------------*/
Route::get('/',[
    'uses' => 'Frontend\TampilanDepanController@index',
    'as'    => 'tampilan-depan.index'
]);

Route::resource('berita', 'Frontend\BeritaController');
Route::get('/kategori-berita/{category}', [
    'uses' => 'Frontend\BeritaController@category',
    'as' => 'frontend.berita.kategori',
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

Route::get('/galeri-video',[
    'uses'  => 'Frontend\TampilanDepanController@galeriVideo',
    'as'    => 'galeri-video', 
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

Route::get('/ppid/formulir-permohonan-informasi',[
    'uses'  => 'Frontend\PpidController@formulirPermohonan',
    'as'    => 'ppid.formulir-permohonan',
]);

Route::get('/fasilitas-pelabuhan',[
    'uses'  => 'Frontend\FasilitasController@index',
    'as'    => 'fasilitas.index'
]);

Route::get('/fasilitas-pelabuhan/batas-dlkr-dlkp',[
    'uses'  => 'Frontend\FasilitasController@batas',
    'as'    => 'fasilitas.batas',
]);

Route::get('/fasilitas-pelabuhan/rekapitulasi-fasilitas-dan-peralatan',[
    'uses'  => 'Frontend\FasilitasController@rekapitulasi',
    'as'    => 'fasilitas.rekapitulasi',
]);

Route::get('/fasilitas-pelabuhan/fasilitas-dermaga',[
    'uses'  => 'Frontend\FasilitasController@dermaga',
    'as'    => 'fasilitas.dermaga',
]);

Route::get('/fasilitas-pelabuhan/fasilitas-gudang',[
    'uses'  => 'Frontend\FasilitasController@gudang',
    'as'    => 'fasilitas.gudang',
]);

Route::get('/fasilitas-pelabuhan/fasilitas-lapangan-penumpukan',[
    'uses'  => 'Frontend\FasilitasController@lapangan',
    'as'    => 'fasilitas.lapangan',
]);

Route::get('/fasilitas-pelabuhan/daerah-labuh',[
    'uses'  => 'Frontend\FasilitasController@daerahLabuh',
    'as'    => 'fasilitas.daerah-labuh',
]);

Route::get('/fasilitas-pelabuhan/breakwater',[
    'uses'  => 'Frontend\FasilitasController@breakwater',
    'as'    => 'fasilitas.breakwater',
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

Route::get('/info/{info}','Frontend\InformasiController@index');

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
    Route::get('/pelaporan',[
        'uses'  => 'Frontend\PelaporanController@index',
        'as'    => 'pelaporan.index'
    ]);
    Route::post('/pelaporan',[
        'uses'  => 'Frontend\PelaporanController@store',
        'as'    => 'pelaporan.store'
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