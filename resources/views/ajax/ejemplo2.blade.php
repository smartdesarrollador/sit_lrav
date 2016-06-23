 @extends('ajax/template_ajax')

@section('content')


@for($i = 1; $i < 3; $i++)

<p id="texto{{ $i }}">El producto mas vendido es {{ $user->prod_nombre }}</p>

<button id="hide{{ $i }}">Hide</button>
<button id="show{{ $i }}">Show</button>
@endfor
     
@endsection
  


 @section('scripts')
    
{!! Html::script('ajax/script.js') !!}

@endsection