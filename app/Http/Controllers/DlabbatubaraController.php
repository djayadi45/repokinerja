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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dlabbatubara  $dlabbatubara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dlabbatubara $dlabbatubara)
    {
        //
    }
}
