@extends('basico/plantilla')

@section('content')
<div class="container">
	<div class="row">
		<table class="table table-bordered table-hover">
	<tr>
		<td><strong>ID</strong></td>
		<td><strong>NOMBRE</strong></td>
		<td><strong>IMAGEN</strong></td>
		<td><strong>PRECIO</strong></td>
	</tr>

@foreach ($productos as $producto)
<tr>
<style type="text/css">
	
	@import url(https://fonts.googleapis.com/css?family=Kalam:700);

	#nombre{
		font-family: 'Kalam', cursive;
	}
</style>
       
      
		<td>{{ $producto->id }}</td>
		<td><div id="nombre">{{ $producto->prod_nombre}}</div></td>
		<td>{{ $producto->imagen}}</td>
		

		<td> 
          
		
         <?php  $val=round(($producto->precio/1000)*100);
                echo $val."%";

          ?>
          @if($val<=50)
		<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{$val}}"
  aria-valuemin="0" aria-valuemax="100" style="width:{{$val}}%">
    <span class="sr-only">{{$val}}% Complete</span>
  </div>
</div>
@else
<div class="progress">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{$val}}"
  aria-valuemin="0" aria-valuemax="100" style="width:{{$val}}%">
    <span class="sr-only">{{$val}}% Complete</span>
  </div>
</div>
@endif


	</td>
	</tr>

  @endforeach                 
                    
                    
             
              </table>
	</div>
</div>

@endsection