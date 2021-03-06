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
    return view('landing');
});
Route::resource('/Dashboard','DashController');
Route::resource('/Periksa','PeriksaController');
Route::resource('/RekamMedis','RekamMedisController');
// Route::resource('/TabelPR','TabelPRController');
// Route::resource('/Diagnosa','DiagnosaController');
Route::resource('/ListPasien','ListPasienController');
Route::resource('/Masukan','MasukanController');
Route::resource('/TransPudji','TransPudjiController');
// Route::resource('/FormAwal','FormAwalController');
Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
