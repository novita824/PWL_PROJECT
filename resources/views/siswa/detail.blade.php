@extends('siswa.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Mahasiswa
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nisn: </b>{{$Siswa->Nisn}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$Siswa->Nama}}</li>
                    <li class="list-group-item"><b>Tanggal Lahir: </b>{{$Siswa->TanggalLahir}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$Siswa->Alamat}}</li>
                    <li class="list-group-item"><b>Agama: </b>{{$Siswa->Agama}}</li>
                    <li class="list-group-item"><b>Jurusan: </b>{{$Siswa->Jurusan}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('siswa.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection