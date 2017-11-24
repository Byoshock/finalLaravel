@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ingresar Partido</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <form action="particreate" method="POST">
                    {{csrf_field()}}
                    <div class="contact-info">
                    <div class="row">
                     <div class="col-md-5 col-sm-5 ">
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control br-radius-zero"  placeholder="Nombre"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="descripcion" class="form-control br-radius-zero"  placeholder="Descripcion"/>
                        </div>
                        <div class="form-group">
                            <input type="date" name="fecha" class="form-control br-radius-zero"  placeholder="Fecha"/>
                        </div>
                      </div>
                      </div>
                      </div>
                    <div class="row">
                      <div class="col-md-5 col-sm-5 ">
                          <div class="form-action">
                                  <button type="submit" class="btn btn-form">Crear Partido</button>
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
                <form action="partidomod" method="POST">
                    {{csrf_field()}}
                    <div class="contact-info">
                    <div class="row">
                     <div class="col-md-5 col-sm-5 ">
                        <div class="form-group">
                        <label for="sel1">Seleccione partido:</label>
                            <select class="form-control" id="parti" name="parti">
                            @foreach ($partido as $parti)
                                  <option value="{{$parti->id}}">{{$parti->Nombre.' - '.$parti->descripcion}}</option>
                            @endforeach
                            </select>
                        </div>

                      </div>
                      </div>
                      </div>
                    <div class="row">
                      <div class="col-md-5 col-sm-5 ">
                          <div class="form-action">
                                  <button type="submit" class="btn btn-form">Detalle</button>
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
