<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
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
Route::get('s', function () {
    return 'Ini adalah tempat mendapat asyupan-asyupan bermyutu';
});
Route::get('halo', function () {
    return view('home');
});
Route::get('/pegawai/{nama}', 'PegawaiController@index');
Route::get('/dosen', 'DosenController@index');

Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');

Route::get('users', function () {
    Schema::create('user2', function (Blueprint $table) {
        $table->Increments('id');
        $table->String('username', 32);
        $table->String('email', 320);
        $table->String('password', 60);
        $table->timestamps();
    });
});
