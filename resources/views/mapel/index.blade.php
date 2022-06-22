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
            <th>Nama</th>
            <th>Tugas 1</th>
            <th>Tugas 2</th>
            <th>Tugas 3</th>
            <th>UTS</th>
            <th>Tugas 4</th>
            <th>Tugas 5</th>
            <th>Tugas 6</th>
            <th>UAS</th>
            <th width="260px">Action</th>
        </tr>
    @foreach ($mapel as $mpl)
        <tr>
            <td>{{ $mpl ->Nama }}</td>
            <td>{{ $mpl ->Tugas1 }}</td>
            <td>{{ $mpl ->Tugas2 }}</td>
            <td>{{ $mpl ->Tugas3 }}</td>
            <td>{{ $mpl ->UTS }}</td>
            <td>{{ $mpl ->Tugas4 }}</td>
            <td>{{ $mpl ->Tugas5 }}</td>
            <td>{{ $mpl ->Tugas6 }}</td>
            <td>{{ $mpl ->UAS }}</td>
            <td>
            <form action="{{ route('mapel.destroy',['mapel'=>$mpl->Nama]) }}" method="POST">
   
                <a class="btn btn-info" href="{{ route('mapel.show',$mpl->Nama) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mapel.edit',$mpl->Nama) }}">Edit</a>
                @csrf
                @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
    </table>
@endsection