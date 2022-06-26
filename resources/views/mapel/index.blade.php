@extends('mapel.layout')
@extends('mapel.template')
@section('content')
<h3 style="margin-bottom: 65px;"></h3>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('mapel.create') }}"> Input Mata Pelajaran</a>
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
            <th>Hari</th>
            <th>Nama Mata Pelajaran</th>
            <th>Guru Pengajar</th>
            <th width="260px">Action</th>
        </tr>
    @foreach ($mapel as $mpl)
        <tr>
            <td>{{ $mpl ->Kode }}</td>
            <td>{{ $mpl ->Hari }}</td>
            <td>{{ $mpl ->NamaMapel }}</td>
            <td>{{ $mpl ->GuruPengajar }}</td>
            <td>
            <form action="{{ route('mapel.destroy',['mapel'=>$mpl->Kode]) }}" method="POST">
   
                <a class="btn btn-info" href="{{ route('mapel.show',$mpl->Kode) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mapel.edit',$mpl->Kode) }}">Edit</a>
                @csrf
                @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
    </table>
@endsection