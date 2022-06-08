@extends('layoutSiswa')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
            <h2>SMKN 1 PURWOSARI</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('siswa.create') }}"> Input Siswa</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
   
    <form action="search" method="GET">
        <div class="input-group custom-search-form">
            <input type="search" name="search" class="form control w-75 d-inline" placeholder="search...">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">Search</button>
            </span>
        </div>
    </form>

    <table class="table table-bordered">
        <tr>
            <th>Nisn</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Jurusan</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($siswa as $sws)
        <tr>
   
            <td>{{ $sws ->nisn }}</td>
            <td>{{ $sws ->nama }}</td>
            <td>{{ $sws ->tanggallahir }}</td>
            <td>{{ $sws ->agama }}</td>
            <td>{{ $sws ->jurusan }}</td>
            <td>
            <form action="{{ route('siswa.destroy',['siswa'=>$sws->nisn]) }}" method="POST">
   
                <a class="btn btn-info" href="{{ route('siswa.show',$sws->nisn) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('siswa.edit',$sws->nisn) }}">Edit</a>
                @csrf
                @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
    </table>
@endsection