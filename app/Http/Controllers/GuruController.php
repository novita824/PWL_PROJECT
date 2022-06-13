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
        $request->validate([
            'Nip' => 'required',
            'Nama' => 'required',
            'TanggalLahir' => 'required',
            'JenisKelamin' => 'required',
            'Pendidikan' => 'required',
            'MengajarMapel' => 'required',
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
    }

    public function destroy($nip)
    {
        Guru::find($nip)->delete();
        return redirect()->route('guru.index')
            ->with('success', 'Guru Berhasil Dihapus');
    }
}
