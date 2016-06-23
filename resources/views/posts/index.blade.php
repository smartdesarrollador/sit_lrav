@extends('bootstrap.principal')
 
@section('content')

<div class="col-md-12">
  @if (Session::has('message'))
          <div class="alert alert-success">{{ Session::get('message') }}</div>
  @endif
        @if(!$posts->isEmpty()) 
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
      @if(!$posts->isEmpty())
          <table class="table table-bordered">
              <tr>
                <th>Título</th>
                <th>body</th>
                <th>Editar</th>
                <th>Eliminar</th>

              </tr>
              @foreach ($posts as $post)
                  <tr>
                    <td width="500">{{ $post->title }}</td>
                    <td width="500">{{ $post->body }}</td>
                    <td width="60" align="center">
                      {!! Html::link(route('post.edit', $post->id), 'Edit', array('class' => 'btn btn-success btn-md')) !!}
                    </td>
                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('post.destroy', $post->id), 'method' => 'DELETE')) !!}
                          <button type="submit" class="btn btn-danger btn-md">Delete</button>
                      {!! Form::close() !!}
                    </td>
                  </tr>
              @endforeach
          </table>
          <?php echo $posts->render(); ?>
      @endif
		</div>
	</div>

  <div class="row">
  <div class="col-md-3 pull-right">
    {!! Html::link(route('post.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!}
       </div>
</div>
@endif
</div>

@endsection