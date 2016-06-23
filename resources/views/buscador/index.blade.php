@extends('basico/plantilla')

@section('content')
<div class="container">
	<div class="row">

{!! Form::open(array
(
  'action' => 'BuscadorController@index',
  'method' => 'GET',
  'role' => 'form',
  'class' => 'form-incline'
))
!!}

{!! Form::input('text','buscar',Input::get('buscar'),array('class'=>'form-control')) !!}
{!! Form::input('submit',null,'Buscar',array('class'=>'btn btn-primary')) !!}
{!! Form::close() !!}

<hr>
   <label class="label label-info">Pagina {{$paginacion->CurrentPage() }} de un total de {{$paginacion->total() }} filas</label>
<hr>


<?php foreach($paginacion as $row): ?>
<ul class="list-inline">
	<li>
		<a href="{{$row->href}}" target="_blank"></a>
		<img src="{{$row->src}}" title="{{$row->titulo}}">
	</li>
	<li>{{$row->descripcion}}</li>
</ul>
<?php endforeach; ?>

<div class="container">
	{!! $paginacion->appends(array("buscar"=>Input::get("buscar"))) !!}
</div>

	</div>
</div>

@endsection