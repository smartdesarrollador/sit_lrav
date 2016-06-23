<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Chart JS Graph Examples | Gentallela Alela! by Colorlib</title>
{!! Html::style('grafico/css/bootstrap.min.css') !!}
{!! Html::style('grafico/fonts/css/font-awesome.min.css') !!}
{!! Html::style('grafico/css/animate.min.css') !!}
{!! Html::style('grafico/css/custom.css') !!}
{!! Html::style('grafico/css/green.css') !!}

{!! Html::script('grafico/js/jquery.min.js') !!}
  
  

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body class="nav-md">



  @yield('content')

  
  {!! Html::script('grafico/js/bootstrap.min.js') !!}
  {!! Html::script('grafico/js/moment/moment.min.js') !!}
  {!! Html::script('grafico/js/chartjs/chart.min.js') !!}
  {!! Html::script('grafico/js/progressbar/bootstrap-progressbar.min.js') !!}
  {!! Html::script('grafico/js/nicescroll/jquery.nicescroll.min.js') !!}
  {!! Html::script('grafico/js/icheck/icheck.min.js') !!}
  {!! Html::script('grafico/js/custom.js') !!}
  {!! Html::script('grafico/js/pace/pace.min.js') !!}

  @section('scripts')

    @show 

 

</body>

</html>
