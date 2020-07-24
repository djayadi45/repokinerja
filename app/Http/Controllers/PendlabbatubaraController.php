<?php

namespace App\Http\Controllers;

use App\Indikator;
use App\FaktorKompetensi;
use App\Dlabbatubara;
use App\IndikatorKompetensi;
use App\Pendlabbatubara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Input;

class PendlabbatubaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dlabbatubara = Dlabbatubara::all();
        return view('pendlabbatubara.index', ['dlabbatubara' => $dlabbatubara]);
    }

    public function nilai($id)
    {
        // dd($id);
        $indikator = new \App\Indikator();
        $lisindikator = $indikator->getFaktor1();
        // dd($lisindikator);
        $pendlabbatubara = Dlabbatubara::find($id);
        return view('pendlabbatubara/nilai', compact('lisindikator', 'pendlabbatubara'));
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
     * @param  \App\Pendlabbatubara  $pendlabbatubara
     * @return \Illuminate\Http\Response
     */
    public function show(Pendlabbatubara $pendlabbatubara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pendlabbatubara  $pendlabbatubara
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendlabbatubara $pendlabbatubara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pendlabbatubara  $pendlabbatubara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendlabbatubara $pendlabbatubara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pendlabbatubara  $pendlabbatubara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendlabbatubara $pendlabbatubara)
    {
        //
    }
}