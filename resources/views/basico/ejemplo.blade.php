@extends('basico/plantilla')

@section('content')

<h1>ejemplo de tabla</h1>
<div class="container">
	<table class="table  table-bordered table-hover">
	<thead>
	<tr>
		<td>primero</td>
		<td>segundo</td>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>primero</td>
		<td>segundo</td>
	</tr>
	<tr>
		<td>primero</td>
		<td>segundo</td>
	</tr>
	<tr>
		<td>primero</td>
		<td>segundo</td>
	</tr>
	</tbody>
</table>
</div>

<h1>ejemplo imagen</h1>

<div class="container">
	
	<img src="http://lorempixel.com/400/200" alt="" class="img-thumbnail magictime">
</div>

<h1>ejemplo boton</h1>

<div class="container">
	
	<button type="button" class="btn btn-primary">
<spam class="glyphicon glyphicon-search"></spam>
	buscar</button>
</div>

<h1>ejemplo formulario</h1>

<div class="container">
  
  <form role="form">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>



@endsection