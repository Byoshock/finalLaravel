@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modificar agenda</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                {!!Form::model([],['action'=>['AgendaController@update',$partido->id],'method'=>'PUT'])!!}
                    {{csrf_field()}}
                    <div class="contact-info">
                    <div class="row">
                     <div class="col-md-5 col-sm-5 ">
                         <label for="sel1">Partido: {{$partido->nombre.' - '.$partido->descripcion}}</label>
                         <div class="form-group">
                                <label for="sel1">Arbitro:</label>
                                <select class="form-control chosen" id="arb" name="arb[]" multiple>
                                @foreach ($arbitros as $arb)
                                      <option value="{{$arb->id}}">{{$arb->nombre}}</option>
                                @endforeach
                                </select>
                          </div>
                      </div>
                      </div>
                      </div>
                    <div class="row">
                      <div class="col-md-5 col-sm-5 ">
                          <div class="form-action">
                                  <button type="submit" class="btn btn-form">Editar agenda</button>
                                  {!! link_to_action('AgendaController@destroy', $title = 'Eliminar', $parameters = $partido->id, $attributes = ['class'=>'btn btn-danger'])!!}
                          </div>
                      </div>
                    </div>
                  {!!Form::close()!!}

                </div>
            	</div>
        	</div>
    	</div>
	</div>
@endsection
