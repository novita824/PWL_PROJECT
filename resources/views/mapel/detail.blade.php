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
                    <li class="list-group-item"><b>Nama : </b>{{$Mapel->Nama}}</li>
                    <li class="list-group-item"><b>Tugas 1 : </b>{{$Mapel->Tugas1}}</li>
                    <li class="list-group-item"><b>Tugas 2 : </b>{{$Mapel->Tugas2}}</li>
                    <li class="list-group-item"><b>Tugas 3: </b>{{$Mapel->Tugas3}}</li>
                    <li class="list-group-item"><b>UTS : </b>{{$Mapel->UTS}}</li>
                    <li class="list-group-item"><b>Tugas 4 : </b>{{$Mapel->Tugas4}}</li>
                    <li class="list-group-item"><b>Tugas 5 : </b>{{$Mapel->Tugas5}}</li>
                    <li class="list-group-item"><b>Tugas 6 : </b>{{$Mapel->Tugas6}}</li>
                    <li class="list-group-item"><b>UAS : </b>{{$Mapel->UAS}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('mapel.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection