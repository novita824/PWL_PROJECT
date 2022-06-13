@extends('guru.layout')
@extends('guru.template')
@section('content')
<h3 style="margin-bottom: 65px;"></h3>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('guru.create') }}"> Input Siswa</a>
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
            <th>Nip</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Pendidikan</th>
            <th>Mengajar Mata Pelajaran</th>
            <th width="260px">Action</th>
        </tr>
    @foreach ($guru as $gr)
        <tr>
   
            <td>{{ $gr ->Nip }}</td>
            <td>{{ $gr ->Nama }}</td>
            <td>{{ $gr ->TanggalLahir }}</td>
            <td>{{ $gr ->JenisKelamin }}</td>
            <td>{{ $gr ->Pendidikan }}</td>
            <td>{{ $gr ->MengajarMapel }}</td>
            <td>
            <form action="{{ route('guru.destroy',['guru'=>$gr->Nip]) }}" method="POST">
   
                <a class="btn btn-info" href="{{ route('guru.show',$gr->Nip) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('guru.edit',$gr->Nip) }}">Edit</a>
                @csrf
                @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
    </table>
@endsection