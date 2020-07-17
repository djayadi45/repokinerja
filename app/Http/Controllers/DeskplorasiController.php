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
    public function show(Deksplorasi $deksplorasi)
    {
        //return $deksplorasi;
        // return view('deksplorasi.index',compact('deksplorasi'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Deksplorasi $deksplorasi)
    {
        return view('deksplorasi.edit', compact('deksplorasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deksplorasi $deksplorasi)
    {
        Deksplorasi::where('id', $deksplorasi->id)
        ->update([
           'nama' => $request->nama,
           'nik' => $request->nik,
           'ttl' => $request->ttl,
           'jenisKelamin' => $request->jenisKelamin,
           'alamat' => $request->alamat,
           'statusKel' => $request->statusKel,
           'nama' => $request->nama,
           'mulaiKerja' => $request->mulaiKerja,
           'statusKep' => $request->statusKep,
           'jabatan' => $request->jabatan
        ]);
        return redirect('/deksplorasi')->with('status, Data Berhasil DiUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deksplorasi $deksplorasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deksplorasi $deksplorasi)
    {
        Deksplorasi::destroy($deksplorasi->id);
        return redirect('/deksplorasi')->with('status, Data Berhasil DiHapus!');
    }
    public function delete($id)
    {
        // DB::table('deksplorasis')->where('id', $id)->delete;
        $deletedRows = Deksplorasi::where('id', $id)->delete();
        return redirect('/deksplorasi')->with('status, Data Berhasil DiHapus!');
    }
}
