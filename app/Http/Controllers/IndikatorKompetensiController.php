<?php

namespace App\Http\Controllers;

use App\IndikatorKompetensi;
use Illuminate\Http\Request;

class IndikatorKompetensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indikatorKompetensi = IndikatorKompetensi::all();
        return view('indikatorkompetensi.index', ['indikatorkompetensi' => $indikatorKompetensi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('indikatorkompetensi.create');
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
            'fakom_id' => 'required',
            'namaIndikator' => 'required',
            'bobot' => 'required',
            'nilai' => 'required',
            'target' => 'required'
        ]);

        $indikatorKompetensi = new IndikatorKompetensi();
        $indikatorKompetensi->fakom_id = $request->fakom_id;
        $indikatorKompetensi->namaIndikator = $request->namaIndikator;
        $indikatorKompetensi->bobot = $request->bobot;
        $indikatorKompetensi->nilai = $request->nilai;
        $indikatorKompetensi->target = $request->target;
        $indikatorKompetensi->save();

        return redirect('/indikatorkompetensi')->with('sukses, Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\IndikatorKompetensi  $indikatorKompetensi
     * @return \Illuminate\Http\Response
     */
    public function show(IndikatorKompetensi $indikatorKompetensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\IndikatorKompetensi  $indikatorKompetensi
     * @return \Illuminate\Http\Response
     */
    public function edit(IndikatorKompetensi $indikatorKompetensi)
    {
        return view('indikatorkompetensi.edit', ['indikatorkompetensi' => $indikatorKompetensi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\IndikatorKompetensi  $indikatorKompetensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IndikatorKompetensi $indikatorKompetensi)
    {
        IndikatorKompetensi::where('id', $indikatorKompetensi->id)
            ->update([
                'fakom_id' => $request->fakom_id,
                'namaIndikator' => $request->namaIndikator,
                'bobot' => $request->bobot,
                'nilai' => $request->nilai,
                'target' => $request->target,
            ]);
        return redirect('/indikatorkompetensi')->with('status, Data Berhasil DiUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\IndikatorKompetensi  $indikatorKompetensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(IndikatorKompetensi $indikatorKompetensi)
    {
        IndikatorKompetensi::destroy($indikatorKompetensi->id);
        return redirect('/indikatorkompetensi')->with('status, Data Berhasil DiHapus!');
    }
    public function delete($id)
    {
        // DB::table('deksplorasis')->where('id', $id)->delete;
        $deletedRows = IndikatorKompetensi::where('id', $id)->delete();
        return redirect('/indikatorkompetensi')->with('status, Data Berhasil DiHapus!');
    }
}
