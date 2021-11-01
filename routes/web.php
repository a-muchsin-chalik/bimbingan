<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\dosenController;
use App\Http\Controllers\jadwalController;
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


Route::resource('mahasiswa', mahasiswaController::class);
//Route get => mahasiswa => index
//Route post => mahasiswa => store
//Route get => mahasiswa/create => mahasiswa.create
//Route get => mahasiswa/{id} => mahasiswa.show
//Route put => mahasiswa/{id} => mahasiswa.update
//Route delete => mahasiswa/{id} => mahasiswa.destroy
//Route get => mahasiswa/{mahasiswa}/edit => mahasiswa.edit


Route::resource('dosen', dosenController::class);
//Route get => dosen => index
//Route post => dosen => store
//Route get => dosen/create => mahasiswa.create
//Route get => dosen/{mahasiswa} => mahasiswa.show
//Route put => dosen/{mahasiswa} => mahasiswa.update
//Route delete => dosen/{mahasiswa} => mahasiswa.destroy
//Route get => dosen/{mahasiswa}/edit => mahasiswa.edit

Route::resource('jadwal', jadwalController::class);

