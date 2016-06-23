@extends('basico/plantilla')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">{!! Form::label('Ejemplo Formulario'); !!}</div>

				<div class="panel-body">
					

					{!! Form::open(array('url' => 'metodo/post')) !!}
                          <div class="form-group">
                          	  {!! Form::label('Nombre'); !!}
                          	  {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del Usuario']); !!}
                          </div>
                          <div class="form-group">
                          	  {!! Form::label('E-mail'); !!}
                          	  {!! Form::text('correo',null,['class'=>'form-control','placeholder'=>'Ingresa su Email']); !!}
                          </div>
                          <div class="form-group">
                          	  {!! Form::label('Password'); !!}
                          	  {!! Form::password('password',['class'=>'form-control']); !!}
                          </div>
                           <div class="form-group">
                          	  {!! Form::label('File'); !!}
                          	  {!! Form::file('file',['class'=>'btn btn-warning']); !!}
                          </div>
                          <div class="form-group">
                          	  {!! Form::label('casillero'); !!}
                          	  {!! Form::checkbox('checkbox','uno',['class'=>'form-control']); !!}
                          </div>
                           <div class="form-group">
                          	  {!! Form::label('radio'); !!}
                          	  {!! Form::radio('radio',null,['class'=>'form-control']); !!}
                          </div>
                          <div class="form-group">
                          	  {!! Form::label('cuadro de Numeros'); !!}
                          	  {!! Form::number('numero',null,['class'=>'form-control']); !!}
                          </div>
                          <div class="form-group">
                          	  {!! Form::label('fecha'); !!}
                          	  {!! Form::date('fecha',\Carbon\Carbon::now(),['class'=>'form-control']); !!}
                          </div>
                          <div class="form-group">
                          	 
                          	  {!! Form::submit('Click Me!',['class'=>'btn btn-primary']); !!}
                          </div>
                    {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection