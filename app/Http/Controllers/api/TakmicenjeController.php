<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TResurs;
use App\Models\Takmicenje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TakmicenjeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TResurs::collection(Takmicenje::all());
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
        $validator = Validator::make($request->all(), [
            'drzava' => 'required',
            'naziv' => 'required',
            'godina' => 'required',
            'instagram' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['Poruka: ' => $validator->errors()]);
        }

        Takmicenje::create([
            'drzava' => $request->drzava,
            'naziv' => $request->naziv,
            'godina' => $request->godina,
            'instagram' => $request->instagram,
        ]);

        return response()->json(['Poruka: ' => 'Takmicenje je kreirano!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Takmicenje  $takmicenje
     * @return \Illuminate\Http\Response
     */
    public function show(Takmicenje $takmicenje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Takmicenje  $takmicenje
     * @return \Illuminate\Http\Response
     */
    public function edit(Takmicenje $takmicenje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Takmicenje  $takmicenje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Takmicenje $takmicenje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Takmicenje  $takmicenje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Takmicenje $takmicenje)
    {
        $takmicenje->delete();
        return response()->json(['Poruka: ' => 'Takmicenje je obrisano!']);
    }
}
