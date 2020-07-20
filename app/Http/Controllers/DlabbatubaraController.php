<?php

namespace App\Http\Controllers;

use App\Dlabbatubara;
use Illuminate\Http\Request;

class DlabbatubaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dlabbatubara = Dlabbatubara::all();
        return view('dlabbatubara.index', ['dlabbatubara' => $dlabbatubara]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dlabbatubara.create');
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
            'nama' => 'required',
            'nik' => 'required',
            'ttl' => 'required',
            'jenisKelamin' => 'required',
            'alamat' => 'required',
            'statusKel' => 'required',
            'mulaiKerja' => 'required',
            'statusKep' => 'required',
            'jabatan' => 'required'
        ]);

        $deksplorasi = new Dlabbatubara;
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

        return redirect('/dlabbatubara')->with('sukses, Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dlabbatubara  $dlabbatubara
     * @return \Illuminate\Http\Response
     */
    public function show(Dlabbatubara $dlabbatubara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dlabbatubara  $dlabbatubara
     * @return \Illuminate\Http\Response
     */
    public function edit(Dlabbatubara $dlabbatubara)
    {
        return view('dlabbatubara.edit', compact('dlabbatubara'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dlabbatubara  $dlabbatubara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dlabbatubara $dlabbatubara)
    {
        Dlabbatubara::where('id', $dlabbatubara->id)
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
        return redirect('/dlabbatubara')->with('status, Data Berhasil DiUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dlabbatubara  $dlabbatubara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dlabbatubara $dlabbatubara)
    {
        Dlabbatubara::destroy($dlabbatubara->id);
        return redirect('/dlabbatubara')->with('status, Data Berhasil DiHapus!');
    }
    public function delete($id)
    {
        // DB::table('deksplorasis')->where('id', $id)->delete;
        $deletedRows = Dlabbatubara::where('id', $id)->delete();
        return redirect('/dlabbatubara')->with('status, Data Berhasil DiHapus!');
    }
}
