@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ingresar Arbitro</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <form action="arbitrocreate" method="POST">
                    {{csrf_field()}}
                    <div class="contact-info">
                    <div class="row">
                     <div class="col-md-5 col-sm-5 ">
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control br-radius-zero"  placeholder="Nombre"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="telefono" class="form-control br-radius-zero"  placeholder="telefono"/>
                        </div>
                      </div>
                      </div>
                      </div>
                    <div class="row">
                      <div class="col-md-5 col-sm-5 ">
                          <div class="form-action">
                                  <button type="submit" class="btn btn-form">Ingresar Arbitro</button>
                          </div>
                      </div>
                    </div>
                  </form>
                </div>
            	</div>
        	</div>
    	</div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Eliminar y/o Modificar</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <form action="arbimod" method="POST">
                    {{csrf_field()}}
                    <div class="contact-info">
                    <div class="row">
                     <div class="col-md-5 col-sm-5 ">
                        <div class="form-group">
                        <label for="sel1">Seleccione Arbitro:</label>
                            <select class="form-control" id="arbi" name="arbi">
                            @foreach ($arbitro as $arbi)
                                  <option value="{{$arbi->id}}">{{$arbi->nombre.' - '.$arbi->telefono}}</option>
                            @endforeach
                            </select>
                        </div>

                      </div>
                      </div>
                      </div>
                    <div class="row">
                      <div class="col-md-5 col-sm-5 ">
                          <div class="form-action">
                                  <button type="submit" class="btn btn-form">Modificar</button>
                          </div>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
          </div>
      </div>
	</div>
@endsection
