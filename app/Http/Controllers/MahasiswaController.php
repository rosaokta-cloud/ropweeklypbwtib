<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public static function index()
    {
        //mengambil eloquent model Mahasiswa untuk menampilkan data mahasiswa
        $datas = Mahasiswa::all();    
        return view('datamahasiswa', compact('datas')); //compact = function untuk mengirim data ke view
    }
}
