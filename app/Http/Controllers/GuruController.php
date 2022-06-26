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
        $posts = Guru::orderBy('Kode', 'desc')->paginate(6);
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
            $fotoguru = $request->file('image')->store('images', 'public');
        }

        Guru::create([
            'Kode'  => $request->Kode,
            'Nip'  => $request->Nip,
            'Nama' => $request->Nama,
            'TanggalLahir' => $request->TanggalLahir,
            'JenisKelamin' => $request->JenisKelamin,
            'Pendidikan' => $request->Pendidikan,
            'MengajarMapel' => $request->MengajarMapel,
            'PasFoto' => $fotoguru,
        ]);
        return 'Guru telah disimpan';
    }

    public function show($kode)
    {
        $guru = Guru::find($kode);
        return view('guru.detail', compact('guru'));
    }
    
    public function edit($kode)
    {
        $guru = DB::table('Guru')->where('Kode', $kode)->first();
        return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, $kode)
    {
        $guru =Guru::find($kode);

        $guru->Kode = $request->Kode;
        $guru->Nip = $request->Nip;
        $guru->Nama = $request->Nama;
        $guru->TanggalLahir = $request->TanggalLahir;
        $guru->JenisKelamin = $request->JenisKelamin;
        $guru->Pendidikan = $request->Pendidikan;
        $guru->MengajarMapel = $request->MengajarMapel;

        if($guru->PasFoto && file_exists(storage_path('path/public/' . $guru->PasFoto))) {
            \storage::delete('public/' . $guru->PasFoto);
        }
        $fotoguru = $request->file('image')->store('images', 'public');
        $guru->PasFoto = $fotoguru;
    
        $guru->save();
        return 'Guru berhasil diubah';
    }

    public function destroy($kode)
    {
        Guru::find($kode)->delete();
        return redirect()->route('guru.index')
            ->with('success', 'Guru Berhasil Dihapus');
    }

    public function cetak_pdf() {
        $guru = Guru::all();
        $pdf = PDF::loadview('guru.guru_pdf', ['guru'=>$guru]);
        return $pdf->stream();
    }
}
