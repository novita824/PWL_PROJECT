@extends('layoutSiswa')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
    <div class="card" style="width: 24rem;">
    <div class="card-header">
        Edit Mahasiswa
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
    <form method="post" action="{{ route('siswa.update', $Siswa->nisn) }}" id="myForm">
    @csrf
    @method('PUT')
    <div class="form-group">
    <label for="Nisn">Nisn</label>
    <input type="text" name="Nisn" class="form-control" id="Nisn" value="{{ $Siswa->nisn }}" aria-describedby="Nisn" >
    </div>
    <div class="form-group">
        <label for="Nama">Nama</label>
        <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $Siswa->nama }}" aria-describedby="Nama" >
    </div>
    <div class="form-group">
        <label for="Alamat">Alamat</label>
        <input type="Alamat" name="Alamat" class="form-control" id="Alamat" value="{{ $Siswa->alamat }}" aria-describedby="Alamat" >
    </div>
    <div class="form-group">
        <label for="Tanggal lahir">Tanggal Lahir</label>
        <input type="Tanggal lahir" name="Tanggal lahir" class="form-control" id="Tanggal lahir" value="{{ $Siswa->tanggallahir }}" aria-describedby="Tanggal lahir" >
    </div>
    <div class="form-group">
        <label for="Agama">Agama</label>
        <input type="Agama" name="Agama" class="form-control" id="Agama" value="{{ $Siswa->agama }}" aria-describedby="Agama" >
    </div>
    <div class="form-group">
        <label for="Jurusan">Jurusan</label>
        <input type="Jurusan" name="Jurusan" class="form-control" id="Jurusan" value="{{ $Siswa->jurusan }}" aria-describedby="Jurusan" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
            </div>
        </div>
    </div>
</div>
@endsection