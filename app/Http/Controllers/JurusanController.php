<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use Illuminate\Support\Facades\DB;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        $posts = Jurusan::orderBy('Kode', 'desc')->paginate(6);
        return view('jurusan.index', compact('jurusan'))
        ->with('paginate', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Kode' => 'required',
            'Nama' => 'required',
            'NamaPanjang' => 'required',
            'Jurusan' => 'required',
            'TotalUangGedung' => 'required',
        ]);
        Jurusan::create($request->all());
        return redirect()->route('jurusan.index')
            ->with('success', 'Jurusan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kode)
    {
        $jurusan = Jurusan::find($kode);
        return view('jurusan.detail', compact('jurusan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kode)
    {
        $jurusan = DB::table('jurusan')->where('Kode', $kode)->first();
        return view('jurusan.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode)
    {
        $request->validate([
            'Kode' => 'required',
            'Nama' => 'required',
            'NamaPanjang' => 'required',
            'Jurusan' => 'required',
            'TotalUangGedung' => 'required',
        ]);
        Jurusan::find($kode)->update($request->all());
        return redirect()->route('jurusan.index')
            ->with('success', 'Jurusan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode)
    {
        Jurusan::find($kode)->delete();
        return redirect()->route('jurusan.index')
            ->with('success', 'Jurusan Berhasil Dihapus');
    }
}
