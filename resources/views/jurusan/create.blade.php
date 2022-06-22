@extends('jurusan.layout')
@extends('jurusan.template')
@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Jurusan
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
    <form method="post" action="{{ route('jurusan.store') }}" id="myForm">
    @csrf
        <div class="form-group">
        <label for="Kode">Kode</label>
        <input type="text" name="Kode" class="form-control" id="Kode" aria-describedby="Nip" >
    </div>
    <div class="form-group">
        <label for="Nama">Nama</label>
        <input type="Nama" name="Nama" class="form-control" id="Nama" ariadescribedby="Nama" >
    </div>
    <div class="form-group">
        <label for="NamaPanjang">Nama Panjang</label>
        <input type="NamaPanjang" name="NamaPanjang" class="form-control" id="NamaPanjang" ariadescribedby="NamaPanjang" >
    </div>
    <div class="form-group">
        <label for="Jurusan">Jurusan</label>
        <input type="Jurusan" name="Jurusan" class="form-control" id="Jurusan" ariadescribedby="Jurusan" >
    </div>
    <div class="form-group">
        <label for="TotalUangGedung">Total Uang Gedung</label>
        <input type="TotalUangGedung" name="TotalUangGedung" class="form-control" id="TotalUangGedung" ariadescribedby="TotalUangGedung" >
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
            </div>
        </div>
    </div>
    </div>
@endsection