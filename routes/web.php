<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});



Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'title' => 'Profile',
        'name' => 'Rosa',
        'nim' => 13242520071,
        'prodi' => 'Teknologi Informasi',
        'gambar' => 'rosa.jpg',
    ]);
});


Route::get('/berita', [BeritaController::class, 'tampilBerita']);

//routing seharusnya tidak melakukan closure atau anonymous function
//function harus dipindahkan ke controller
Route::get('/berita/{slug}', [BeritaController::class, 'getBerita']);