<?php

namespace App\Http\Controllers;

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

        return view('pendeksplorasi.index');
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
