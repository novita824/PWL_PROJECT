@extends('mapel.layout')
@extends('mapel.template')
@section('content')

<div class="container mt-5">
    <h3 style="margin-bottom: 75px;"></h3>
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Mata Pelajaran
            </div>
            <div class="card-body">
                @if ($errors->any())
            <div class="alert alert-danger">
            <strong>Whoops!</strong>Maaf Anda salah untuk menginputkan data mata pelajaran<br><br>
            <ul>
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    <form method="post" action="{{ route('mapel.store') }}" id="myForm">
    @csrf
        <div class="form-group">
        <label for="Hari">Hari</label>
        <input type="text" name="Hari" class="form-control" id="Hari" aria-describedby="Hari" >
    </div>
    <div class="form-group">
        <label for="NamaMapel">Nama Mata Pelajaran</label>
        <input type="NamaMapel" name="NamaMapel" class="form-control" id="NamaMapel" ariadescribedby="NamaMapel" >
    </div>
    <div class="form-group">
        <label for="GuruPengajar">Guru Pengajar</label>
        <input type="GuruPengajar" name="GuruPengajar" class="form-control" id="GuruPengajar" ariadescribedby="GuruPengajar" >
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
            </div>
        </div>
    </div>
    </div>
@endsection