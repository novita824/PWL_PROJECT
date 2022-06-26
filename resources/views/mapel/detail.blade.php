@extends('mapel.layout')
@extends('mapel.template')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Mata Pelajaran
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Kode : </b>{{$mapel->Kode}}</li>
                    <li class="list-group-item"><b>Hari : </b>{{$mapel->Hari}}</li>
                    <li class="list-group-item"><b>Nama Mata Pelajaran : </b>{{$mapel->NamaMapel}}</li>
                    <li class="list-group-item"><b>Guru Pengajar : </b>{{$mapel->GuruPengajar}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('mapel.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection