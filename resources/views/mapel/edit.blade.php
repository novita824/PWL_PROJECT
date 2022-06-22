@extends('mapel.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
    <div class="card" style="width: 24rem;">
    <div class="card-header">
        Edit Mata Pelajaran
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
    <form method="post" action="{{ route('mapel.update', $Mapel->Nama) }}" id="myForm">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="Nama">Nama</label>
        <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $Mapel->Nama }}" aria-describedby="Nama" >
    </div>
    <div class="form-group">
        <label for="Tugas1">Tugas 1</label>
        <input type="Tugas1" name="Tugas1" class="form-control" id="Tugas1" value="{{ $Mapel->Tugas1 }}" aria-describedby="Tugas1" >
    </div>
    <div class="form-group">
        <label for="Tugas2">Tugas 2</label>
        <input type="Tugas2" name="Tugas2" class="form-control" id="Tugas2" value="{{ $Mapel->Tugas2 }}" aria-describedby="Tugas2" >
    </div>
    <div class="form-group">
        <label for="Tugas3">Tugas 3</label>
        <input type="Tugas3" name="Tugas3" class="form-control" id="Tugas3" value="{{ $Mapel->Tugas3 }}" aria-describedby="Tugas3" >
    </div>
    <div class="form-group">
        <label for="UTS">UTS</label>
        <input type="UTS" name="UTS" class="form-control" id="UTS" value="{{ $Mapel->UTS }}" aria-describedby="UTS" >
    </div>
    <div class="form-group">
        <label for="Tugas4">Tugas 4</label>
        <input type="Tugas4" name="Tugas4" class="form-control" id="Tugas4" value="{{ $Mapel->Tugas4 }}" aria-describedby="Tugas4" >
    </div>
    <div class="form-group">
        <label for="Tugas5">Tugas 5</label>
        <input type="Tugas5" name="Tugas5" class="form-control" id="Tugas5" value="{{ $Mapel->Tugas5 }}" aria-describedby="Tugas5" >
    </div>
    <div class="form-group">
        <label for="Tugas5">Tugas 5</label>
        <input type="Tugas5" name="Tugas5" class="form-control" id="Tugas5" value="{{ $Mapel->Tugas5 }}" aria-describedby="Tugas5" >
    </div>
    <div class="form-group">
        <label for="UAS">UAS</label>
        <input type="UAS" name="UAS" class="form-control" id="UAS" value="{{ $Mapel->UAS }}" aria-describedby="UAS" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
            </div>
        </div>
    </div>
</div>
@endsection