@extends('layouts.backend')

// kalo mau cek isi data yang dikirim ke view, bisa pake dd($datas) di controller, atau pake @dd($datas) di view
//@dd($datas)
@section('content')
    <div class="container text-center mt-4 mb-4">
        <h3> Data Mahasiswa </h3>
    </div>

    <button type="button" class="btn-solid theme-success">Tambah Data</button>

    <div class="border rounded overflow-hidden mt-4">
        <table class="table table-striped mb-0">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Prodi</th>
                <th scope="col">Email</th>
                <th scope="col">No. HP</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($datas as $data)
                <tr>
                <td>{{$no++}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->nim}}</td>
                <td>{{$data->prodi}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->nohp}}</td>
                <td><img src="{{$data->foto}}" alt="Foto" class="img-fluid" style="max-height: 100px;"></td>
                <td>
                    <button type="button" class="btn-solid theme-primary">Edit</button>
                    <button type="button" class="btn-solid theme-danger">Hapus</button>
                </td>
                </tr>
                @endforeach
                <?php $no = 1; ?>
            </tbody>
        </table>
    </div>
@endsection