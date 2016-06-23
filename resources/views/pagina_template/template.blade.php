<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Agro-pluse Website Template | Home :: w3layouts</title>

    {!! Html::style('pagina_template/css/bootstrap.css') !!}
{!! Html::script('pagina_template/js/jquery.min.js') !!}

{!! Html::style('pagina_template/css/animate.css') !!}
		
		{!! Html::script('pagina_template/js/wow.min.js') !!}
		
		
		
		<script>
		 new WOW().init();
		</script>
		
{!! Html::style('pagina_template/css/style.css') !!}

		
 


		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
	
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

		
	
	</head>
	<body>
			


	        @include('pagina_template.slider')
			@include('pagina_template.menu')			
		
				
		
			
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header").addClass("fixed");
				}else{
					$(".header").removeClass("fixed");
				}
			 });
			 
		});
		</script>

	    @yield('content')
	


         @include('pagina_template.redes_sociales')	
			
		
			<div class="news-letter">
				<div class="container">
					<div class="news-letter-left wow fadeInLeft" data-wow-delay="0.4s">
						<h3><span> </span> Newsletter</h3>
					</div>
					<div class="news-letter-right wow fadeInRight" data-wow-delay="0.4s">
						<form>
							<input type="text" class="text" maxlength="20" value="Your Email here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email here';}">
							<input type="submit" value=" " />
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
	
	 @include('pagina_template.footer')	
			

			
		</div>

	</body>
</html>

