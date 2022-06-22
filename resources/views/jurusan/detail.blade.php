@extends('jurusan.layout')
@extends('jurusan.template')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Jurusan
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Kode: </b>{{$jurusan->Kode}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$jurusan->Nama}}</li>
                    <li class="list-group-item"><b>Nama Panjang: </b>{{$jurusan->NamaPanjang}}</li>
                    <li class="list-group-item"><b>Jurusan: </b>{{$jurusan->Jurusan}}</li>
                    <li class="list-group-item"><b>TotalUangGedung: </b>{{$jurusan->TotalUangGedung}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('jurusan.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection