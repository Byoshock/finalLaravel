<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partido;
use App\Agenda;
use App\Arbitro;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $agenda = Agenda::join('arbitros','arbitros.id','=','agendas.arbitro_id')->join('partidos','partidos.id','=','agendas.partido_id')->select('arbitros.nombre as arb', 'partidos.nombre', 'partidos.fecha', 'partidos.descripcion', 'partidos.id', 'agendas.partido_id' )->get();
      $partido = Partido::all();
        return view('home',compact('agenda','partido'));
    }
}
