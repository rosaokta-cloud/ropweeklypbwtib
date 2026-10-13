<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;

Route::get('/', function () {
    return view('home',[
        "title"=> "Home",
    ]);

});



Route::get('/berita', function () {
   

    return view('berita', [
        "title"=> "Berita",
        "beritas"=> Berita::ambilberita(),
    ]);
    
});

Route::get('/contact', function () {
    return view('contact', [
        "title"=> "Contact",
    ]);

});

Route::get('/profile', function () {
    return view('profile', [
        "title"=> "Profile",
        "name" => "Rosa",
        "nim" =>13242520071,
        "prodi" => "Teknologi Informasi",
        "gambar"    => "rosa.jpg",
    ]);
    
});

Route::get('/berita/{slug}', function ($slug) {

return view('beritatunggal', [
    "title"=> Berita::getTitle($slug),
    "berita" =>Berita::getBerita($slug),
]);
});

