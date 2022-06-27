@extends('jurusan.layout')
@extends('jurusan.template')
@section('content')
<h3 style="margin-bottom: 65px;"></h3>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('jurusan.create') }}"> Input Jurusan</a>
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
            <th>Nama</th>
            <th>Nama Panjang</th>
            <th>Jurusan</th>
            <th>Total Uang Gedung</th>
            <th width="260px">Action</th>
        </tr>
    @foreach ($jurusan as $jrn)
        <tr>
   
            <td>{{ $jrn ->Nip }}</td>
            <td>{{ $jrn ->Nama }}</td>
            <td>{{ $jrn ->NamaPanjang }}</td>
            <td>{{ $jrn ->Jurusan }}</td>
            <td>{{ $jrn ->TotalUangGedung }}</td>
            <td>
            <form action="{{ route('jurusan.destroy',['jurusan'=>$jrn->Kode]) }}" method="POST">
   
                <a class="btn btn-info" href="{{ route('jurusan.show',$jrn->Kode) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('jurusan.edit',$jrn->Kode) }}">Edit</a>
                @csrf
                @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
    </table>
@endsection