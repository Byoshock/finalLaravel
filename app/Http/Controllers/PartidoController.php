<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partido;
use App\Agenda;
use App\Arbitro;


class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $partido = Partido::all();
      return view('partido.crearpartido',compact('partido'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $partido = Partido::create([
           'nombre'=>$request->input('nombre'),
           'descripcion'=>$request->input('descripcion'),
           'fecha'=>$request->input('fecha')]);

       return redirect('/');
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
    public function edit(Request $request)
    {
      $partido = Partido::where('id',$request->input('parti'))->first();
return view('partido.partidoedit',compact('partido'));
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
      $partido = Partido::where('id',$id)->update([
         'nombre'=>$request->input('nombre'),
         'descripcion'=>$request->input('descripcion'),
         'fecha'=>$request->input('fecha')]);

     return redirect('/');
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
       $agenda = Agenda::where('id',$id)->delete();
        $partido = Partido::where('id',$id)->delete();
        return redirect('/');
        //
    }
}
