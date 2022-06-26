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
            'Kode' => 'required',
            'Hari' => 'required',
            'NamaMapel' => 'required',
            'GuruPengajar' => 'required',
        ]);
        Mapel::create($request->all());
        return redirect()->route('mapel.index')
            ->with('success', 'Mata Pelajaran Berhasil Ditambahkan');
    }

    public function show($kode)
    {
        $mapel = Mapel::find($kode);
        return view('mapel.detail', compact('mapel'));
    }
    
    public function edit($kode)
    {
        $mapel = DB::table('Mapel')->where('Kode', $kode)->first();
        return view('mapel.edit', compact('mapel'));
    }

    public function update(Request $request, $kode)
    {
        $request->validate([
            'Kode' => 'required',
            'Hari' => 'required',
            'NamaMapel' => 'required',
            'GuruPengajar' => 'required',
        ]);
        Mapel::find($kode)->update($request->all());
        return redirect()->route('mapel.index')
            ->with('success', 'Mata Pelajaran Berhasil Diupdate');
    }

    public function destroy($kode)
    {
        Mapel::find($kode)->delete();
        return redirect()->route('mapel.index')
            ->with('success', 'Mata Pelajaran Berhasil Dihapus');
    }

    public function cetak_pdf($mapel) {
        $mapel = Mapel::all();
        $pdf = Mapel::loadview('mapel.mape_pdf', ['mapel'=>$mapel]);
        return $pdf->stream();
    }
}
