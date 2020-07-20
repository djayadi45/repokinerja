<?php

namespace App\Http\Controllers;

use App\FaktorKompetensi;
use Illuminate\Http\Request;

class FaktorKompetensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faktorKompetensi = FaktorKompetensi::all();
        return view('faktorkompetensi.index', ['faktorkompetensi' => $faktorKompetensi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faktorkompetensi.create');
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
            'namaFaktorKompetensi' => 'required',
            'bobot' => 'required'
        ]);

        $faktorKompetensi = new FaktorKompetensi();
        $faktorKompetensi->namaFaktorKompetensi = $request->namaFaktorKompetensi;
        $faktorKompetensi->bobot = $request->bobot;
        $faktorKompetensi->save();

        return redirect('/faktorkompetensi')->with('sukses, Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FaktorKompetensi  $faktorKompetensi
     * @return \Illuminate\Http\Response
     */
    public function show(FaktorKompetensi $faktorKompetensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FaktorKompetensi  $faktorKompetensi
     * @return \Illuminate\Http\Response
     */
    public function edit(FaktorKompetensi $faktorKompetensi)
    {
        return view('faktorkompetensi.edit', ['faktorkompetensi' => $faktorKompetensi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FaktorKompetensi  $faktorKompetensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FaktorKompetensi $faktorKompetensi)
    {
        FaktorKompetensi::where('id', $faktorKompetensi->id)
            ->update([
                'namaFaktorKompetensi' => $request->namaFaktorKompetensi,
                'bobot' => $request->bobot
            ]);
        return redirect('/faktorkompetensi')->with('status, Data Berhasil DiUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FaktorKompetensi  $faktorKompetensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(FaktorKompetensi $faktorKompetensi)
    {
        FaktorKompetensi::destroy($faktorKompetensi->id);
        return redirect('/faktorkompetensi')->with('status, Data Berhasil DiHapus!');
    }
    public function delete($id)
    {
        // DB::table('deksplorasis')->where('id', $id)->delete;
        $deletedRows = FaktorKompetensi::where('id', $id)->delete();
        return redirect('/faktorkompetensi')->with('status, Data Berhasil DiHapus!');
    }
}
