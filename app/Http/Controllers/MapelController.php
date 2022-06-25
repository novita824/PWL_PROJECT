<?php

namespace App\Http\Controllers;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapelController extends Controller
{
    public function index()
    {
        $mapel = Mapel::all();
        $posts = Mapel::orderBy('Hari', 'desc')->paginate(6);
        return view('mapel.index', compact('mapel'))
        ->with('paginate', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('mapel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Hari' => 'required',
            'NamaMapel' => 'required',
            'GuruPengampu' => 'required',
        ]);
        Mapel::create($request->all());
        return redirect()->route('mapel.index')
            ->with('success', 'Mata Pelajaran Berhasil Ditambahkan');
    }

    public function show($hari)
    {
        $mapel = Mapel::find($hari);
        return view('nama.detail', compact('mapel'));
    }
    
    public function edit($hari)
    {
        $mapel = DB::table('Mapel')->where('Nama', $hari)->first();
        return view('mapel.edit', compact('mapel'));
    }

    public function update(Request $request, $hari)
    {
        $request->validate([
            'Hari' => 'required',
            'NamaMapel' => 'required',
            'GuruPengampu' => 'required',
        ]);
        Mapel::find($hari)->update($request->all());
        return redirect()->route('nama.index')
            ->with('success', 'Mata Pelajaran Berhasil Diupdate');
    }

    public function destroy($hari)
    {
        Mapel::find($hari)->delete();
        return redirect()->route('mapel.index')
            ->with('success', 'Mata Pelajaran Berhasil Dihapus');
    }

    public function cetak_pdf() {
        $guru = Mapel::all();
        $pdf = Mapel::loadview('guru.guru_pdf', ['gurus'=>$guru]);
        return $pdf->stream();
    }
}
