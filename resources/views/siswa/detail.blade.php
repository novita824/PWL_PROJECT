@extends('siswa.layout')
@extends('siswa.template')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Siswa
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Kode : </b>{{$siswa->Kode}}</li>
                    <li class="list-group-item"><b>Nisn: </b>{{$siswa->Nisn}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$siswa->Nama}}</li>
                    <li class="list-group-item"><b>Tanggal Lahir: </b>{{$siswa->TanggalLahir}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$siswa->Alamat}}</li>
                    <li class="list-group-item"><b>Agama: </b>{{$siswa->Agama}}</li>
                    <li class="list-group-item"><b>Jurusan: </b>{{$siswa->Jurusan}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('siswa.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection