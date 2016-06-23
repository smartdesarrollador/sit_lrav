@extends('bootstrap.principal')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Ejemplo Crud - Crear Usuario</div>

        <div class="panel-body">
          {!! Form::open(['route' => 'usuario.store','method'=>'post']) !!}
                          <div class="form-group">
                              {!! Form::label('Nombre'); !!}
                              {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del Usuario']); !!}
                          </div>
                          <div class="form-group">
                              {!! Form::label('Correo'); !!}
                              {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa su Email']); !!}
                          </div>
                          <div class="form-group">
                              {!! Form::label('Password'); !!}
                              {!! Form::password('password',['class'=>'form-control']); !!}
                          </div>
                          
                          <div class="form-group">
                             
                              {!! Form::submit('Registrar!',['class'=>'btn btn-primary']); !!}
                          </div>
                    {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection