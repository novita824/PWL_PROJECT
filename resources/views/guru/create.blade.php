@extends('guru.layout')
@extends('guru.template')
@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Guru
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
    <form method="post" action="{{ route('guru.store') }}" id="myForm">
    @csrf
        <div class="form-group">
        <label for="Kode">Kode</label>
        <input type="text" name="Kode" class="form-control" id="Kode" aria-describedby="Kode" >
    </div>
    <div class="form-group">
        <label for="Nip">Nip</label>
        <input type="Nip" name="Nip" class="form-control" id="Nip" ariadescribedby="Nip" >
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
        <label for="JenisKelamin">Jenis Kelamin</label>
        <input type="JenisKelamin" name="JenisKelamin" class="form-control" id="JenisKelamin" ariadescribedby="JenisKelamin" >
    </div>
    <div class="form-group">
        <label for="Pendidikan">Pendidikan</label>
        <input type="Pendidikan" name="Pendidikan" class="form-control" id="Pendidikan" ariadescribedby="Pendidikan" >
    </div>
    <div class="form-group">
        <label for="MengajarMapel">Mengajar Mata Pelajaran</label>
        <input type="MengajarMapel" name="MengajarMapel" class="form-control" id="MengajarMapel" ariadescribedby="MengajarMapel" >
    </div>
    <label for="image">Foto</label>
            <input type="file" class="form-control" required="required" name="image"></br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
            </div>
        </div>
    </div>
    </div>
@endsection