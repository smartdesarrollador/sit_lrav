@extends('basico/plantilla')

@section('content')
<div class="container">
	<div class="row">
		<table class="table table-bordered table-hover">
	<tr>
		<td><strong>Titulo</strong></td>
		<td><strong>Descripcion</strong></td>
		<td><strong>clase</strong></td>
	</tr>

@foreach ($users as $post)
<tr>
		<td>{{ $post->nombre }}</td>
		<td>{{ $post->body }}</td>
		<td>{{ $post->nombreclase }}</td>
	</tr>

  @endforeach                 
                    
                    
             
              </table>
              
	</div>
</div>

@endsection