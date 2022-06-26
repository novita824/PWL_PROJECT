@extends('siswa.layout')

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
    <form method="post" action="{{ route('siswa.update', $siswa->Nisn) }}" id="myForm">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="Kode">Kode</label>
        <input type="text" name="Kode" class="form-control" id="Kode" value="{{ $mapel->Kode }}" aria-describedby="Kode" >
    </div>
    <div class="form-group">
        <label for="Nisn">Nisn</label>
        <input type="text" name="Nisn" class="form-control" id="Nisn" value="{{ $siswa->Nisn }}" aria-describedby="Nisn" >
    </div>
    <div class="form-group">
        <label for="Nama">Nama</label>
        <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $siswa->Nama }}" aria-describedby="Nama" >
    </div>
    <div class="form-group">
        <label for="Alamat">Alamat</label>
        <input type="Alamat" name="Alamat" class="form-control" id="Alamat" value="{{ $siswa->Alamat }}" aria-describedby="Alamat" >
    </div>
    <div class="form-group">
        <label for="TanggalLahir">Tanggal Lahir</label>
        <input type="TanggalLahir" name="TanggalLahir" class="form-control" id="TanggalLahir" value="{{ $siswa->TanggalLahir }}" aria-describedby="TanggalLahir" >
    </div>
    <div class="form-group">
        <label for="Agama">Agama</label>
        <input type="Agama" name="Agama" class="form-control" id="Agama" value="{{ $siswa->Agama }}" aria-describedby="Agama" >
    </div>
    <div class="form-group">
        <label for="Jurusan">Jurusan</label>
        <input type="Jurusan" name="Jurusan" class="form-control" id="Jurusan" value="{{ $siswa->Jurusan }}" aria-describedby="Jurusan" >
    </div>
    <div class="form-group">
        <label for="SppBulan">Spp Perbulan</label>
        <input type="SppBulan" name="SppBulan" class="form-control" id="SppBulan" value="{{ $siswa->SppBulan }}" aria-describedby="SppBulan" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
            </div>
        </div>
    </div>
</div>
@endsection