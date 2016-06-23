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
		<td><img src="{{ $producto->imagen }}" width="100" height="100"></td>
		<td>{{ $producto->nombre }}</td>
	</tr>

  @endforeach   


                    
                    
             
              </table>
              <?php echo $productos->render(); ?>
              
	</div>
</div>

@stop