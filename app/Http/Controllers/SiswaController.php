<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        $posts = Siswa::orderBy('Nisn', 'desc')->paginate(6);
        return view('siswa.index', compact('siswa'))
        ->with('paginate', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Kode' => 'required',
            'Nisn' => 'required',
            'Nama' => 'required',
            'TanggalLahir' => 'required',
            'Alamat' => 'required',
            'Agama' => 'required',
            'Jurusan' => 'required',
            'SppBulan' => 'required',
        ]);
        Siswa::create($request->all());
        return redirect()->route('siswa.index')
            ->with('success', 'Siswa Berhasil Ditambahkan');
    }

    public function show($nama)
    {
        $siswa = Siswa::find($nama);
        return view('siswa.detail', compact('siswa'));
    }
    
    public function edit($nama)
    {
        $siswa = DB::table('Siswa')->where('Nisn', $nama)->first();
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $nisn)
    {
        $request->validate([
            'Kode' => 'required',
            'Nisn' => 'required',
            'Nama' => 'required',
            'TanggalLahir' => 'required',
            'Alamat' => 'required',
            'Agama' => 'required',
            'Jurusan' => 'required',
            'SppBulan' => 'required',
        ]);
        Siswa::find($nisn)->update($request->all());
        return redirect()->route('siswa.index')
            ->with('success', 'Siswa Berhasil Diupdate');
    }

    public function destroy($nisn)
    {
        Siswa::find($nisn)->delete();
        return redirect()->route('siswa.index')
            ->with('success', 'Siswa Berhasil Dihapus');
    }
}
