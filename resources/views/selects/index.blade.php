<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	{!! Html::style('bootstrap/css/bootstrap.css') !!}
 
  

 
</head>
<body>





  

        
<div class="container">
   <h1>Categories and Subcategories AJAX, select drop down</h1>

   <div class="col-lg-4">
        {!! Form::open(array('url'=>'','files'=>true)) !!}

          <div class="form-group">
             <label for="">Categories</label>
             <select class="form-control input-sm" name="category" id="category">
                @foreach($categories as $category)
                  <option value="{!! $category->id !!}">{!! $category->name !!}</option>
                  @endforeach
             </select>
          </div>

          <div class="form-group">
             <label for="">SubCategories</label>
             <select class="form-control input-sm" name="subcategory" id="subcategory">
                <option value=""></option>
               
             </select>
          </div>
          {!! Form::close() !!}
   </div>
</div>
      






	{!! Html::script('bootstrap/js/jquery.min.js') !!}

   {!! Html::script('bootstrap/js/bootstrap.min.js') !!}
   
<script>

    $('#category').on('change',function(e){
          console.log(e);

          var cat_id = e.target.value;

          //ajax
          $.get('/sitio/public/ajax-subcat?cat_id='+cat_id,function(data){
             
            //  console.log(data);

             $('#subcategory').empty();

           
             $.each(data,function(index,subcatObj){
                   $('#subcategory').append('<option value="'+subcatObj.id+'">'+subcatObj.name+'</option>');
             }); 
          });

    });
    
</script>

	
</body>
</html>