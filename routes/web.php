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

Route::get('/', function () {
    return view('index-frontend');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function(){
    Route::resource('kategori-berita', 'Backend\KategoriBeritaController');
    Route::resource('kategori-foto', 'Backend\KategoriFotoController');
});

Route::get('kategori-berita-data', ['as'=>'kategori-berita.data','uses'=>'Backend\KategoriBeritaController@getData']);
Route::get('kategori-foto-data', ['as'=>'kategori-foto.data','uses'=>'Backend\KategoriFotoController@getData']);