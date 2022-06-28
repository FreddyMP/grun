<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\puntos;

class puntosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return puntos::all();
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
      $NewPunto = new puntos;
      $NewPunto->NameLocal = $request->input('NameLocal');
      $NewPunto->Description = $request->input('Description');
      $NewPunto->Longitud = $request->input('Longitud');
      $NewPunto->Latitud = $request->input('Latitud');
      $NewPunto->Type = $request->input('Type');
      $NewPunto->User = $request->input('User');
      $NewPunto->save();
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return puntos::find($id);
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
       $punto = puntos::find($id);
       $punto->update([
        'NameLocal'=>$request->input('NameLocal'),
        'Description'=>$request->input('Description'),
        'Longitud'=>$request->input('Longitud'),
        'Latitud'=>$request->input('Latitud'),
        'Type'=>$request->input('Type'),
        'User'=>$request->input('User')
       ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
