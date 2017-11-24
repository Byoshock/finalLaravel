@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">INICIO</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                <div>
                <h2>JORNADAS</h2>
                @foreach($partido as $parti)
                {!! link_to_action('AgendaController@edit', $title = 'Partido:', $parameters = $parti->id, $attributes = ['class'=>'links2'])!!}<p>{{$parti->nombre.' - '. $parti->fecha}}</p>
                <p>Equipos: {{$parti->descripcion}}</p>
                <p>Arbitros: </p>
                <ul>
                    @foreach($agenda as $age)
                        @if($parti->id == $age->partido_id)
                            <li>{{$age->arb}}</li>
                        @endif
                    @endforeach
                </ul>
                ------------------------------------------<br>
                @endforeach

            </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
