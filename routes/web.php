<?php

use Illuminate\Support\Facades\Route;
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
