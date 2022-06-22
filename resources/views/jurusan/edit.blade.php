@extends('jurusan.layout')
@extends('jurusan.template')
@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
    <div class="card" style="width: 24rem;">
    <div class="card-header">
        Edit Jurusan
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
    <form method="post" action="{{ route('jurusan.update', $jurusan->Kode) }}" id="myForm">
    @csrf
    @method('PUT')
    <div class="form-group">
    <label for="Kode">Kode</label>
    <input type="text" name="Kode" class="form-control" id="Kode" value="{{ $jurusan->Kode }}" aria-describedby="Kode" >
    </div>
    <div class="form-group">
        <label for="Nama">Nama</label>
        <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $jurusan->Nama }}" aria-describedby="Nama" >
    </div>
    <div class="form-group">
        <label for="NamaPanjang">Nama Panjang</label>
        <input type="NamaPanjang" name="NamaPanjang" class="form-control" id="NamaPanjang" value="{{ $jurusan->NamaPanjang }}" aria-describedby="NamaPanjang" >
    </div>
    <div class="form-group">
        <label for="Jurusan">Jurusan</label>
        <input type="Jurusan" name="Jurusan" class="form-control" id="Jurusan" value="{{ $jurusan->Jurusan }}" aria-describedby="Jurusan" >
    </div>
    <div class="form-group">
        <label for="TotalUangGedung">Total Uang Gedung</label>
        <input type="TotalUangGedung" name="TotalUangGedung" class="form-control" id="TotalUangGedung" value="{{ $jurusan->TotalUangGedung }}" aria-describedby="TotalUangGedung" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
            </div>
        </div>
    </div>
</div>
@endsection