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
    Route::resource('tampilan-depan', 'Backend\TampilanDepanController');
});

Route::get('kategori-berita-data', ['as'=>'kategori-berita.data','uses'=>'Backend\KategoriBeritaController@getData']);
Route::get('kategori-foto-data', ['as'=>'kategori-foto.data','uses'=>'Backend\KategoriFotoController@getData']);
Route::get('tampilan-depan-data', ['as'=>'tampilan-depan.data','uses'=>'Backend\TampilanDepanController@getData']);

Route::get('/dwelling-time',[
    'uses' => 'Backend\DwellingTimeController@fetchData',
    'as' => 'dwelling-time.fetch'
]);

Route::get('/dwelling-time-per-hari',[
    'uses' => 'Backend\DwellingTimeController@perDay',
    'as' => 'dwelling-time.day'
]);

Route::get('/dt-per-day','Backend\DwellingTimeController@fetchPerDay');
Route::get('/test-cron','Backend\DwellingTimeController@testCron');
Route::get('/test-cron-per-day','Backend\DwellingTimeController@testFetchPerDay');