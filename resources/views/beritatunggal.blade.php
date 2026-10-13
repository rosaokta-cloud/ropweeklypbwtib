@extends('layouts.main')

@section('content')
    <div class="text-center">
        <h2>{{ $berita["judul"] }}</h2>
        <h5>{{ $berita["penulis"] }}</h5>
    </div>
    <div class="text-justify">
        <p>{{ $berita["isi"] }}</p>
    </div>
<a href="/berita">Kembali</a>

@endsection 