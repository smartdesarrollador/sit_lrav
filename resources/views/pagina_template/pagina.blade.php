
@extends('pagina_template.template')

@section('content')
    
<h1>hola mundo</h1>

<div class="container">
	<div class="row">
		<table class="table table-bordered table-hover">
	<tr>
		<td><strong>producto</strong></td>
		<td><strong>Descripcion</strong></td>
		<td><strong>categoria</strong></td>
	</tr>

@foreach ($productos as $producto)
<tr>
		<td>{{ $producto->prod_nombre }}</td>
		<td>{{ $producto->descripcion }}</td>
		<td>{{ $producto->nombre }}</td>
	</tr>

  @endforeach                 
                    
                    
             
              </table>
              
	</div>
</div>

@stop