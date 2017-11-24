<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partido;
use App\Agenda;
use App\Arbitro;
class ArbitroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $arbitro = Arbitro::all();
      return view('arbitro.arbitrocreate',compact('arbitro'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $arbitro = Arbitro::create([
           'nombre'=>$request->input('nombre'),
           'telefono'=>$request->input('telefono')]);
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
      $asignacion2 = Agenda::where('id',$id)->delete();
       $partido = Partido::where('id',$id)->delete();
       return redirect('/');
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
      $arbitro = Arbitro::where('id',$request->input('arbi'))->first();
      return view('arbitro.arbitroedit',compact('arbitro'));
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
      $arbitro = Arbitro::where('id',$id)->update([
         'nombre'=>$request->input('nombre'),
         'telefono'=>$request->input('telefono')]);

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
       $arbitro = Arbitro::where('id',$id)->delete();
       return redirect('/');
        //
    }
}
