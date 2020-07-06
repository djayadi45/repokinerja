<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deksplorasi;

use function GuzzleHttp\Promise\all;

class DeskplorasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deksplorasi = Deksplorasi::all();
        return view('deksplorasi.index', ['deksplorasi' => $deksplorasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deksplorasi.create');
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
            'nama'=> 'required',
            'nik'=> 'required',
            'ttl'=> 'required',
            'jenisKelamin'=> 'required',
            'alamat'=> 'required',
            'statusKel'=> 'required',
            'mulaiKerja'=> 'required',
            'statusKep' => 'required',
            'jabatan'=> 'required'
        ]);

        $deksplorasi = new Deksplorasi;
        $deksplorasi->nama = $request->nama;
        $deksplorasi->nik = $request->nik;
        $deksplorasi->ttl = $request->ttl;
        $deksplorasi->jenisKelamin = $request->jenisKelamin;
        $deksplorasi->alamat = $request->alamat;
        $deksplorasi->statusKel = $request->statusKel;
        $deksplorasi->mulaiKerja = $request->mulaiKerja;
        $deksplorasi->statusKep = $request->statusKep;
        $deksplorasi->jabatan = $request->jabatan;
        $deksplorasi->save();
        
        return redirect('/deksplorasi')->with('status, Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Deksplorasi::destroy($deksplorasi->id);
        return redirect('/deksplorasi')->with('status, Data Berhasil Dihapus!');
    }
}
