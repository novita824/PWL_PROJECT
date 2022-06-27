<!DOCTYPE html>
<html>
<head>
    <title>DATA GURU</title>
</head>
<body>
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>DATA GURU SMKN 1 PURWOSARI</h4>
    </center>
    
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nip</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Pendidikan</th>
                <th>Mengajar Mata Pelajaran</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            @foreach($guru as $gr)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$gr->Kode}}</td>
                <td>{{$gr->Nip}}</td>
                <td>{{$gr->Nama}}</td>
                <td>{{$gr->TanggalLahir}}</td>
                <td>{{$gr->JenisKelamin}}</td>
                <td>{{$gr->Pendidikan}}</td>
                <td>{{$gr->MengajarMapel}}</td>
                <td>{{$gr->PasFoto}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>