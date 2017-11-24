@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Agenda de Jornadas</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <form action="agecreate" method="POST">
                    {{csrf_field()}}
                    <div class="contact-info">
                    <div class="row">
                     <div class="col-md-5 col-sm-5 ">
                             <div class="form-group">
                            <label for="sel1">Partido:</label>
                                <select class="form-control"  name="part">
                                @foreach ($partido as $parti)
                                      <option value="{{$parti->id}}">{{$parti->nombre.' - '.$parti->descripcion.' - '.$parti->fecha}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Arbitros:</label>
                                <select class="form-control chosen" id="arb" name="arb[]" multiple>
                                @foreach ($arbitro as $arb)
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
                                  <button type="submit" class="btn btn-form">Agendar</button>
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
