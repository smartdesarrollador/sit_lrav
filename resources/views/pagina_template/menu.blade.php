
<div class="header">
					<div class="sticky-navigation">
					<div class="fixed-header">
						<div class="container">
							<div class="top-menu">
								<span class="menu"> </span>
					            <ul>
					            	
                                    <li class="active">{!! Html::link(url('pagina1'), 'Home') !!}</li>
					            	<li>{!! Html::link(url('pagina1/about'), 'About Us') !!}</li>
					                
					                <li><a href="services.html">Services</a></li>
					                <li><a href="products.html">Products</a></li>
					                <li><a href="contact.html">Contacto</a></li>
					                <li>{!! Html::link(url('pagina1/pagina'), 'Pagina') !!}</li>
					                <li>{!! Html::link(url('pagina1/imagen'), 'Imagenes') !!}</li>
					            </ul>
				            </div>
							<script>
								$("span.menu").click(function(){
									$(".top-menu ul").slideToggle(500, function(){
									});
								});
							</script>
				            <!----- search ---->
				            <div class="top-search">
				            	<form>
				            		<input type="text">
				            		<input type="submit" value="serach" />
				            	</form>
				            </div>
				            <div class="clearfix"> </div>
				            <!----- search ---->
				          </div>
						  </div>
			        </div>
				</div>