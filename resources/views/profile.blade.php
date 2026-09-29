@extends('layouts.main')

@section('content')
    
    <h1>HALAMAN PROFILE</h1>
    <p>
        Nama : <?php echo $name ?> <br>
        NIM : <?php echo $nim ?> <br>
        Prodi : <?php echo $prodi ?> <br>
        Gambar : <?php echo $gambar ?> <br>
    </p>
    <img src="img/logo.png" alt="Logo" width="200">
@endsection