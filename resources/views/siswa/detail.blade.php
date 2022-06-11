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
                    <li class="list-group-item"><b>Nisn: </b>{{$Siswa->nisn}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$Siswa->nama}}</li>
                    <li class="list-group-item"><b>Tanggal Lahir: </b>{{$Siswa->tanggallahir}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$Siswa->alamat}}</li>
                    <li class="list-group-item"><b>Agama: </b>{{$Siswa->agama}}</li>
                    <li class="list-group-item"><b>Jurusan: </b>{{$Siswa->jurusan}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('siswa.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection