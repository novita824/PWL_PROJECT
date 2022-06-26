@extends('siswa.layout')
@extends('siswa.template')
@section('content')

<div class="container mt-5">
    <h3 style="margin-bottom: 75px;"></h3>
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Siswa
            </div>
            <div class="card-body">
                @if ($errors->any())
            <div class="alert alert-danger">
            <strong>Whoops!</strong> Maaf Anda salah untuk menginputkan data mata pelajaran<br><br>
            <ul>
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    <form method="post" action="{{ route('siswa.store') }}" id="myForm">
    @csrf
    <div class="form-group">
        <label for="Kode">Kode</label>
        <input type="text" name="Kode" class="form-control" id="Kode" aria-describedby="Kode" >
    </div>
    <div class="form-group">
        <label for="Nisn">Nisn</label>
        <input type="text" name="Nisn" class="form-control" id="Nisn" aria-describedby="Nisn" >
    </div>
    <div class="form-group">
        <label for="Nama">Nama</label>
        <input type="Nama" name="Nama" class="form-control" id="Nama" ariadescribedby="Nama" >
    </div>
    <div class="form-group">
        <label for="TanggalLahir">Tanggal Lahir</label>
        <input type="TanggalLahir" name="TanggalLahir" class="form-control" id="TanggalLahir" ariadescribedby="TanggalLahir" >
    </div>
    <div class="form-group">
        <label for="Alamat">Alamat</label>
        <input type="Alamat" name="Alamat" class="form-control" id="Alamat" ariadescribedby="Alamat" >
    </div>
    <div class="form-group">
        <label for="Agama">Agama</label>
        <input type="Agama" name="Agama" class="form-control" id="Agama" ariadescribedby="Agama" >
    </div>
    <div class="form-group">
        <label for="Jurusan">Jurusan</label>
        <input type="Jurusan" name="Jurusan" class="form-control" id="Jurusan" ariadescribedby="Jurusan" >
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
            </div>
        </div>
    </div>
    </div>
@endsection