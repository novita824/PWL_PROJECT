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
        <label for="Nama">Nama</label>
        <input type="text" name="Nama" class="form-control" id="Nama" aria-describedby="Nama" >
    </div>
    <div class="form-group">
        <label for="Tugas1">Tugas 1</label>
        <input type="Tugas1" name="Tugas1" class="form-control" id="Tugas1" ariadescribedby="Tugas1" >
    </div>
    <div class="form-group">
        <label for="Tugas2">Tugas 2</label>
        <input type="Tugas2" name="Tugas2" class="form-control" id="Tugas2" ariadescribedby="Tugas2" >
    </div>
    <div class="form-group">
        <label for="Tugas3">Tugas 3</label>
        <input type="Tugas3" name="Tugas3" class="form-control" id="Tugas3" ariadescribedby="Tugas3" >
    </div>
    <div class="form-group">
        <label for="UTS">UTS</label>
        <input type="UTS" name="UTS" class="form-control" id="UTS" ariadescribedby="UTS" >
    </div>
    <div class="form-group">
        <label for="Tugas4">Tugas 4</label>
        <input type="Tugas4" name="Tugas4" class="form-control" id="Tugas4" ariadescribedby="Tugas4" >
    </div>
    <div class="form-group">
        <label for="Tugas5">Tugas 5</label>
        <input type="Tugas5" name="Tugas5" class="form-control" id="Tugas5" ariadescribedby="Tugas5" >
    </div>
    <div class="form-group">
        <label for="Tugas6">Tugas 6</label>
        <input type="Tugas6" name="Tugas6" class="form-control" id="Tugas6" ariadescribedby="Tugas6" >
    </div>
    <div class="form-group">
        <label for="UAS">UAS</label>
        <input type="UAS" name="UAS" class="form-control" id="UAS" ariadescribedby="UAS" >
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
            </div>
        </div>
    </div>
    </div>
@endsection