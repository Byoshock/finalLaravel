<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partido;
use App\Agenda;
use App\Arbitro;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $partido = Partido::all();
      $arbitro = Arbitro::all();
      return view('agenda.Agendacreate',compact('partido','arbitro'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      if($request->input('arb')){
           $agendar = $request->input('arb');
           foreach ($agendar as $age => $value) {
               $agenda = Agenda::create([
                   'arbitro_id' => $value,
                   'partido_id' => $request->input('part')
                   ]);
           }
           return redirect('/');
       }
       else
       {
           return redirect('/home');
       }
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
    public function edit($id)
    {
      $partido = Partido::where('id',$id)->first();
       $arbitros = Arbitro::all();
       $agenda = Agenda::where('partido_id',$id)->first();
       if(isset($agenda))
           return view('agenda.editagenda',compact('partido','arbitros','agenda'));
       else
           return redirect('/');
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
       if($request->input('arb')){
           $age = $request->input('arb');
           $agen2 = Agenda::where('partido_id',$id)->get();
           $partido = Partido::where('id',$id)->first();
           $agendado2 = Agenda::where('partido_id',$id)->delete();

           foreach ($age as $agee => $value) {
               $age = Agenda::create([
                   'arbitro_id' => $value,
                   'partido_id' => $partido->id
                   ]);
           }
       }
       return redirect('/');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
       {
           $agendar2 = Agenda::where('partido_id',$id)->delete();
           $partido = Partido::where('id',$id)->delete();
           return redirect('/');
       }
}
