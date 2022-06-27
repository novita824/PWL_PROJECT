@extends('guru.layout')
@extends('guru.template')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Guru
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Kode: </b>{{$guru->Kode}}</li>
                    <li class="list-group-item"><b>Nip: </b>{{$guru->Nip}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$guru->Nama}}</li>
                    <li class="list-group-item"><b>Tanggal Lahir: </b>{{$guru->TanggalLahir}}</li>
                    <li class="list-group-item"><b>Jenis Kelamin: </b>{{$guru->JenisKelamin}}</li>
                    <li class="list-group-item"><b>Pendidikan: </b>{{$guru->Pendidikan}}</li>
                    <li class="list-group-item"><b>Mengajar Mata Pelajaran: </b>{{$guru->MengajarMapel}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('guru.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection