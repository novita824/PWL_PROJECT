<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Mata Pelajaran</title>
</head>
<body>
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Jadwal Mata Pelajaran XII Multimedia</h4>
    </center>
    
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Hari</th>
                <th>Nama Mata Pelajaran</th>
                <th>Guru Pengajar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mapel as $mo)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$mp->Hari}}</td>
                <td>{{$mp->NamaMapel}}</td>
                <td>{{$mp->GuruPengajar}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>