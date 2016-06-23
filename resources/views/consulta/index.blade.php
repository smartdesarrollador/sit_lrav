@extends('basico/plantilla')

@section('content')
<div class="container">
	<div class="row">
		<table class="table table-bordered table-hover">
	<tr>
		<td><strong>Titulo</strong></td>
		<td><strong>Descripcion</strong></td>
	</tr>

@foreach ($users as $post)
<tr>
		<td>{{ $post->nombre}}</td>
		<td>{{ $post->descripcion }}</td>
	</tr>

  @endforeach                 
                    
                    
             
              </table>
	</div>
</div>

@endsection