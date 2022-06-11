@extends('siswa.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Siswa
            </div>
            <div class="card-body">
                @if ($errors->any())
            <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
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
        <label for="nisn">Nisn</label>
        <input type="text" name="nisn" class="form-control" id="nisn" aria-describedby="nisn" >
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="nama" name="nama" class="form-control" id="nama" ariadescribedby="nama" >
    </div>
    <div class="form-group">
        <label for="tanggallahir">Tanggal Lahir</label>
        <input type="tanggallahir" name="tanggallahir" class="form-control" id="tanggallahir" ariadescribedby="tanggallahir" >
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="alamat" name="alamat" class="form-control" id="alamat" ariadescribedby="alamat" >
    </div>
    <div class="form-group">
        <label for="agama">Agama</label>
        <input type="agama" name="agama" class="form-control" id="agama" ariadescribedby="agama" >
    </div>
    <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <input type="jurusan" name="jurusan" class="form-control" id="jurusan" ariadescribedby="jurusan" >
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
            </div>
        </div>
    </div>
    </div>
@endsection