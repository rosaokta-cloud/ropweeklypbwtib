<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Home',[
        "title"=> "Home",
    ]);

});

Route::get('/Berita', function () {
    return view('Berita', [
        "title"=> "Berita",
    ]);
    
});

Route::get('/Contact', function () {
    return view('Contact', [
        "title"=> "Contact",
    ]);

});

Route::get('/Profile', function () {
    return view('Profile', [
        "title"=> "Profile",
        "name" => "Rosa",
        "nim" =>13242520071,
        "prodi" => "Teknologi Informasi",
        "gambar"    => "rosa.jpg",
    ]);
    
});

