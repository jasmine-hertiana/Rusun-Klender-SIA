<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => ['role:admin']], function() 
{
    Route::resource('/user','UserController');
    Route::get('/user/hapus/{id}','UserController@destroy');
    Route::resource('/listrik','ListrikController');
    Route::resource('/air','AirController');
    Route::resource('/gas','GasController');
    Route::resource('/pulsa','PulsaController');
    Route::resource('/rekaplistrik','RekapListrikController');
    Route::resource('/rekapair','RekapAirController');
    Route::resource('/rekapgas','RekapGasController');
    Route::resource('/rekappulsa','RekapPulsaController');
    Route::resource('/laporan','LaporanController');
});
