@extends('administrador.template')

@section('content')

  @if (Session::has('message'))
          <div class="alert alert-success">{{ Session::get('message') }}</div>
  @endif

  


        @if(!$producto->isEmpty()) 
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

    

      @if(!$producto->isEmpty())

        

          <table class="table table-bordered">
              <tr>
                <th>Producto</th>
                <th>imagen</th>
                <th>descripcion</th>
                <th>precio</th>
                <th>categoria_id</th>
                <th>Editar</th>
                <th>Eliminar</th>

              </tr>
              @foreach ($producto as $post)
                  <tr>
                    <td width="500">{{ $post->prod_nombre }}</td>
                    <td width="500">{{ $post->imagen }}</td>
                     <td width="500">{{ $post->descripcion }}</td>
                      <td width="500">${{ $post->precio }}</td>
                       <td width="500">{{ $post->categoria_id}}</td>
                    <td width="60" align="center">
                      {!! Html::link(route('administracion.edit', $post->id), 'Edit', array('class' => 'btn btn-success btn-md')) !!}
                    </td>
                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('administracion.destroy', $post->id), 'method' => 'DELETE')) !!}
                          <button type="submit" class="btn btn-danger btn-md">Delete</button>
                      {!! Form::close() !!}
                    </td>
                  </tr>
              @endforeach
          </table>
          <?php echo $producto->render(); ?>
      @endif
		</div>
	</div>

  <div class="row">
  <div class="col-md-3 pull-right">
    {!! Html::link(route('administracion.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!}
       </div>
</div>
@endif
</div>

			@stop