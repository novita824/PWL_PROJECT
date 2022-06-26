<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        $posts = Guru::orderBy('Nip', 'desc')->paginate(6);
        return view('guru.index', compact('guru'))
        ->with('paginate', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('guru.create');
    }

    public function store(Request $request)
    {
        if ($request ->file('image')) {
            $PasFoto = $request->file('image')->store('images', 'public');
        }

        $request->validate([
            'Nip'  => $request->Nip,
            'Nama' => $request->Nama,
            'TanggalLahir' => $request->TanggalLahir,
            'JenisKelamin' => $request->JenisKelamin,
            'Pendidikan' => $request->Pendidikan,
            'MengajarMapel' => $request->MengajarMapel,
            'PasFoto' => $PasFoto,
        ]);
        Guru::create($request->all());
        return redirect()->route('guru.index')
            ->with('success', 'Guru Berhasil Ditambahkan');
    }

    public function show($nip)
    {
        $guru = Guru::find($nip);
        return view('guru.detail', compact('guru'));
    }
    
    public function edit($nip)
    {
        $guru = DB::table('Guru')->where('Nip', $nip)->first();
        return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, $nip)
    {
        $request->validate([
            'Nip' => 'required',
            'Nama' => 'required',
            'TanggalLahir' => 'required',
            'JenisKelamin' => 'required',
            'Pendidikan' => 'required',
            'MengajarMapel' => 'required',
        ]);
        Guru::find($nip)->update($request->all());
        return redirect()->route('guru.index')
            ->with('success', 'Guru Berhasil Diupdate');
        
        if($guru->PasFoto && file_exists(storage_path('path/public/' . $guru->PasFoto))) {
            \storage::delete('public/' . $guru->PasFoto);
        }
        $fotoguru = $request->file('image')->store('images', 'public');
        $guru->PasFoto = $PasFoto;
    
        $guru->save();
        return 'Guru berhasil diubah';
    }

    public function destroy($nip)
    {
        Guru::find($nip)->delete();
        return redirect()->route('guru.index')
            ->with('success', 'Guru Berhasil Dihapus');
    }

    public function cetak_pdf() {
        $guru = Guru::all();
        $pdf = PDF::loadview('guru.guru_pdf', ['gurus'=>$guru]);
        return $pdf->stream();
    }
}
