@extends('siswa.layout')
@extends('siswa.template')
@section('content')
<h3 style="margin-bottom: 65px;"></h3>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
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
    <h3 style="margin-bottom: 40px;"></h3>
    <table class="table table-bordered">
        <tr>
            <th>Kode</th>
            <th>Nisn</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Jurusan</th>
            <th width="260px">Action</th>
        </tr>
    @foreach ($siswa as $sws)
        <tr>
            <td>{{ $sws ->Kode }}</td>
            <td>{{ $sws ->Nisn }}</td>
            <td>{{ $sws ->Nama }}</td>
            <td>{{ $sws ->TanggalLahir }}</td>
            <td>{{ $sws ->Alamat }}</td>
            <td>{{ $sws ->Agama }}</td>
            <td>{{ $sws ->Jurusan }}</td>
            <td>
            <form action="{{ route('siswa.destroy',['siswa'=>$sws->Kode]) }}" method="POST">
   
                <a class="btn btn-info" href="{{ route('siswa.show',$sws->Kode) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('siswa.edit',$sws->Kode) }}">Edit</a>
                @csrf
                @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
    </table>
@endsection