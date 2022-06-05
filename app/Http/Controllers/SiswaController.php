<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all();
        $posts = Siswa::orderBy('Nisn', 'desc')->paginate(6);
        return view('siswas.indexSiswa', compact('siswa'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('siswas.createSiswa');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nisn' => 'required',
            'Nama' => 'required',
            'Tanggal Lahir' => 'required',
            'Alamat' => 'required',
            'Agama' => 'required',
            'Jurusan' => 'required',
        ]);
        Siswa::create($request->all());
        return redicted()->route('siswas.indexSiswa')
            ->with('success', 'Siswa Berhasil Ditambahkan');
    }

    public function show($Nisn)
    {
        $Siswa = Siswa::find($Nisn);
        return view('siswas.detailSiswa', compact('Siswa'));
    }
    
    public function edit($Nisn)
    {
        $Siswa = Siswa::find($Nisn);
        return view('siswas.editSiswa', compact('Siswa'));
    }

    public function update(Request $request, $Nisn)
    {
        $request->validate([
            'Nisn' => 'required',
            'Nama' => 'required',
            'Tanggal Lahir' => 'required',
            'Alamat' => 'required',
            'Agama' => 'required',
            'Jurusan' => 'required',
        ]);
        Siswa::find($Nisn)->update($request->all());
        return redirect()->route('siswas.indexSiswa')
            ->with('success', 'Siswa Berhasil Diupdate');
    }

    public function destroy($Nisn)
    {
        Siswa::find($Nisn)->delete();
        return redicted()->route('siswas.indexSiswa')
            ->with('success', 'Siswa Berhasil Dihapus');
    }
}
