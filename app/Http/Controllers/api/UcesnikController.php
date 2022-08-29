<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UResurs;
use App\Models\Ucesnik;
use Illuminate\Http\Request;

class UcesnikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UResurs::collection(Ucesnik::all());
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
     * @param  \App\Models\Ucesnik  $ucesnik
     * @return \Illuminate\Http\Response
     */
    public function show(Ucesnik $ucesnik)
    {
        return new UResurs($ucesnik);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ucesnik  $ucesnik
     * @return \Illuminate\Http\Response
     */
    public function edit(Ucesnik $ucesnik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ucesnik  $ucesnik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ucesnik $ucesnik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ucesnik  $ucesnik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ucesnik $ucesnik)
    {
        $ucesnik->delete();
        return response()->json(['Poruka: ' => 'Ucesnik je obrisan!']);
    }
}
