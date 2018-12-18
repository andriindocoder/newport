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

Route::get('/home', 'HomeController@index')->name('home');
/*--------------------end of index-------------*/

/*-------------------backend-------------------*/
Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function(){
    Route::resource('kategori-berita', 'Backend\KategoriBeritaController');
    Route::resource('kategori-foto', 'Backend\KategoriFotoController');
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

Route::get('kategori-berita-data', ['as'=>'kategori-berita.data','uses'=>'Backend\KategoriBeritaController@getData']);
Route::get('kategori-foto-data', ['as'=>'kategori-foto.data','uses'=>'Backend\KategoriFotoController@getData']);
Route::get('tampilan-depan-data', ['as'=>'tampilan-depan.data','uses'=>'Backend\TampilanDepanController@getData']);


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