@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cambiar Arbitro</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                {!!Form::model([],['action'=>['ArbitroController@update',$arbitro->id],'method'=>'PUT'])!!}
                    {{csrf_field()}}
                    <div class="contact-info">
                    <div class="row">
                     <div class="col-md-5 col-sm-5 ">
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control br-radius-zero"  placeholder="Nombre" value="{{$arbitro->nombre}}" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="telefono" class="form-control br-radius-zero"  placeholder="Telefono" value="{{$arbitro->telefono}}"/>
                        </div>
                      </div>
                      </div>
                      </div>
                    <div class="row">
                      <div class="col-md-5 col-sm-5 ">
                          <div class="form-action">
                                  <button type="submit" class="btn btn-form">Cambiar</button>
                                  {!! link_to_action('ArbitroController@destroy', $title = 'Eliminar', $parameters = $arbitro->id, $attributes = ['class'=>'btn btn-danger'])!!}
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
