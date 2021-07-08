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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('lokasiKejahatans', 'LokasiKejahatanController');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('lokasiKejahatans', 'LokasiKejahatanController');

Route::resource('jenisKejahatans', 'JenisKejahatanController')->middleware('is_admin');

Route::resource('users', 'UsersController')->middleware('is_admin');

Route::resource('lokasiKejahatans', 'LokasiKejahatanController')->middleware('is_admin');

Route::get('/peta', function(){
	return view('peta.show');
})->name('peta.index');

Route::resource('tentang','TentangController')->names('tentang');

Route::resource('penggunaan','PenggunaanController')->names('penggunaan');






// Route::get('/tentang','TentangController@index')->names('tentang');


Route::resource('tahuns', 'TahunController');

Route::resource('kecamatans', 'KecamatanController');

Route::resource('kelurahans', 'KelurahanController');

Route::resource('files', 'FileController');