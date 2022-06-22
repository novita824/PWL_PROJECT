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
        $posts = Mapel::orderBy('Nama', 'desc')->paginate(6);
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
            'Nama' => 'required',
            'Tugas1' => 'required',
            'Tugas2' => 'required',
            'Tugas3' => 'required',
            'UTS' => 'required',
            'Tugas4' => 'required',
            'Tugas5' => 'required',
            'Tugas6' => 'required',
            'UAS' => 'required',
        ]);
        Mapel::create($request->all());
        return redirect()->route('mapel.index')
            ->with('success', 'Mata Pelajaran Berhasil Ditambahkan');
    }

    public function show($nama)
    {
        $mapel = Mapel::find($nama);
        return view('nama.detail', compact('mapel'));
    }
    
    public function edit($nama)
    {
        $mapel = DB::table('Mapel')->where('Nama', $nama)->first();
        return view('mapel.edit', compact('mapel'));
    }

    public function update(Request $request, $nama)
    {
        $request->validate([
            'Nama' => 'required',
            'Tugas1' => 'required',
            'Tugas2' => 'required',
            'Tugas3' => 'required',
            'UTS' => 'required',
            'Tugas4' => 'required',
            'Tugas5' => 'required',
            'Tugas6' => 'required',
            'UAS' => 'required',
        ]);
        Mapel::find($nama)->update($request->all());
        return redirect()->route('nama.index')
            ->with('success', 'Mata Pelajaran Berhasil Diupdate');
    }

    public function destroy($nama)
    {
        Mapel::find($nama)->delete();
        return redirect()->route('mapel.index')
            ->with('success', 'Mata Pelajaran Berhasil Dihapus');
    }
}
