<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use Illuminate\Support\Facades\DB;

// import java.io ;

//System.out.println("Hello World");
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('materi1', function () {
	return view('pertama');
});

Route::get('materi2', function () {
	return view('csstutorial');
});

Route::get('materi3', function () {
	return view('bootstrap');
});

Route::get('materi4', function () {
	return view('dashboard');
});

Route::get('materi5', function () {
	return view('linktree');
});

Route::get('materi7validasi', function () {
	return view('validasi');
});

Route::get('materi7kalkulator', function () {
	return view('kalkulator');
});

Route::get('ets', function () {
	return view('ets');
});

Route::get('dosen',[DosenController::class,'index']);
Route::get('welcome',[DosenController::class,'welcome']);

//Route::get('/pegawai/{nama}',[PegawaiController::class,'index']);
Route::post('/formulir/proses',[PegawaiController::class,'proses']);

Route::get('/blog',[BlogController::class,'home']);
Route::get('/blog/tentang',[BlogController::class,'tentang']);
Route::get('/blog/kontak',[BlogController::class,'kontak']);

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
