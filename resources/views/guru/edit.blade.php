@extends('guru.layout')
@extends('guru.template')
@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
    <div class="card" style="width: 24rem;">
    <div class="card-header">
        Edit Guru
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
    <form method="post" action="{{ route('guru.update', $guru->Nip) }}" id="myForm">
    @csrf
    @method('PUT')
    <div class="form-group">
    <label for="Nip">Nip</label>
    <input type="text" name="Nip" class="form-control" id="Nip" value="{{ $guru->Nip }}" aria-describedby="Nip" >
    </div>
    <div class="form-group">
        <label for="Nama">Nama</label>
        <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $guru->Nama }}" aria-describedby="Nama" >
    </div>
    <div class="form-group">
        <label for="TanggalLahir">Tanggal Lahir</label>
        <input type="TanggalLahir" name="TanggalLahir" class="form-control" id="TanggalLahir" value="{{ $guru->TanggalLahir }}" aria-describedby="TanggalLahir" >
    </div>
    <div class="form-group">
        <label for="JenisKelamin">Jenis Kelamin</label>
        <input type="JenisKelamin" name="JenisKelamin" class="form-control" id="JenisKelamin" value="{{ $guru->JenisKelamin }}" aria-describedby="JenisKelamin" >
    </div>
    <div class="form-group">
        <label for="Pendidikan">Pendidikan</label>
        <input type="Pendidikan" name="Pendidikan" class="form-control" id="Pendidikan" value="{{ $guru->Pendidikan }}" aria-describedby="Pendidikan" >
    </div>
    <div class="form-group">
        <label for="MengajarMapel">Mengajar Mata Pelajaran</label>
        <input type="MengajarMapel" name="MengajarMapel" class="form-control" id="MengajarMapel" value="{{ $guru->MengajarMapel }}" aria-describedby="MengajarMapel" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
            </div>
        </div>
    </div>
</div>
@endsection