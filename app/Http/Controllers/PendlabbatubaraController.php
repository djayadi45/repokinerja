<?php

namespace App\Http\Controllers;

use App\Dlabbatubara;
use App\Pendlabbatubara;
use Illuminate\Http\Request;

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
        $pendlabbatubara = Pendlabbatubara::all();
        return view('pendlabbatubara.index', ['pendlabbatubara' => $pendlabbatubara]);
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
