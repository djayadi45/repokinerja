<?php

namespace App\Http\Controllers;

use App\IndikatorKompetensi;
use App\Deksplorasi;
use App\Pendeksplorasi;
use Illuminate\Http\Request;

class PendeksplorasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $deksplorasi = Deksplorasi::all();
        return view('pendeksplorasi.index', ['deksplorasi' => $deksplorasi]);
    }

    public function nilai($id)
    {
        // dd($id);
        $indikator = new \App\Indikator();
        $lisindikator = $indikator->getFaktor2();
        // dd($lisindikator);
        $pendeksplorasi = Deksplorasi::find($id);
        return view('pendeksplorasi/nilai', compact('lisindikator', 'pendeksplorasi'));
    }

    public function savePenilaian(Request $request)
    {

        $data = $request->all();
        error_log($data);

        /*for ($i = 0; $i < count($items); $i++) {

            $new_arr = [];

            for ($j = ($i * $div); $j < (($i + 1) * $div); $j++) {
                $new_arr[] = $arr[$j];
            }

            DB::transaction(function () use ($new_arr) {
                DB::table('penilaians')->insert($new_arr);
            });
        }*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pendeksplorasi  $pendeksplorasi
     * @return \Illuminate\Http\Response
     */
    public function show(Pendeksplorasi $pendeksplorasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pendeksplorasi  $pendeksplorasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendeksplorasi $pendeksplorasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pendeksplorasi  $pendeksplorasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendeksplorasi $pendeksplorasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pendeksplorasi  $pendeksplorasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendeksplorasi $pendeksplorasi)
    {
        //
    }
}