@extends('site.layouts.template')


@section('slider')
@include('site.components.slider')
@endsection

@section('conteudo')
	<div class="services">
		<div class="container">
			<h2 class="w3l_head w3l_head1 text-justify">Quem Somos</h2>
			<p class="w3ls_head_para w3ls_head_para2 text-justify">Todo o trabalho da Empetrol reflete a preocupação em executar sua função apropriada como parte integrante da sociedade. </p>
			<p class="w3ls_head_para w3ls_head_para1 text-justify">Organizada e com o objetivo de atender aos seus clientes de forma efetiva, razão de sua existência, a Empetrol procura acompanhar e atualizar-se sempre com as constantes mudanças de legislação que ocorrem no país, buscando integrar-se de forma harmoniosa, assim como os planetas se mantêm juntos em seu movimento ordenado.</p>
			<p class="w3ls_head_para w3ls_head_para1">Empetrol acredita com isso estar apresentando uma proposta renovadora que não pretende ser exclusiva nem monopolizadora. Afinal, pensamos que é pela via de pluralidade de opções que se deve construir uma sociedade democrática e aberta.</p>
			
			 {{-- <div class="w3_agileits_services_grids">
				<div class="col-md-4 w3_agileits_services_grid">
					<div class="w3_agileits_services_grid_agile">
						<div class="w3_agileits_services_grid_1">
							<i class="fa fa-map" aria-hidden="true"></i>
						</div>
						<h3>Rutrum ipsum  </h3>
						<p>Donec semper rutrum ipsum et bibendum. Sed condimentum dolor velit.</p>
					</div>
				</div>
				<div class="col-md-4 w3_agileits_services_grid">
					<div class="w3_agileits_services_grid_agile">
						<div class="w3_agileits_services_grid_1">
							<i class="fa fa-globe" aria-hidden="true"></i>
						</div>
						<h3>Semper rutrum</h3>
						<p>Donec semper rutrum ipsum et bibendum. Sed condimentum dolor velit.</p>
					</div>
				</div>
				<div class="col-md-4 w3_agileits_services_grid">
					<div class="w3_agileits_services_grid_agile">
						<div class="w3_agileits_services_grid_1">
							<i class="fa fa-gears" aria-hidden="true"></i>
						</div>
						<h3>Dolor velit </h3>
						<p>Donec semper rutrum ipsum et bibendum. Sed condimentum dolor velit.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div> --}}
		</div>
	</div> 
<!-- branch -->
	<div class="branch-wthree">
		<div class="w3_agileits_services_grids">
			<div class="w3_agileits_services_grid">
			<h3 style="color:white; font-size:20px;">Trabalhamos com:
			Serviços Contábeis,
			Serviços Fiscais,
			Serviços de Pessoal,
			Registro de Empresas, etc.</h3>
				</div>
			</div>
			<br>
			<br>
			<a href="/servicos" class="btn btn-info">Confira nossos serviços</a>
		</div>
	
	</div>
<!-- //branch -->
<!-- team -->
	<div class="team-agileits">
		<div class="container">
		<h3 class="w3l_head w3l_head1">Equipe</h3>
			<p class="w3ls_head_para w3ls_head_para2">Nossa equipe é contituida por profissionáis capacitados</p>
			<div class="team-grids">
				<div class="col-md-4 team-grid">
					<div class="pic">
						<div class="stack twisted">	
							<img src="images/snull.png" alt=" " class="img-responsive" />
						</div>
						{{-- <div class="pic-caption top-to-bottom">
							<h5 class="pic-title">Voluptate</h5>
							<p>autem vel eum iure repreh qui in voluptate ea.</p>
						</div> --}}
					</div>
					<h4>Manuelito</h4>
					<p>Dono</p>
					{{-- <ul class="social-nav model-3d-0">
						  <li><a href="#" class="facebook">
							  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
						  <li><a href="#" class="twitter"> 
							  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
						  <li><a href="#" class="instagram">
							  <div class="front"><i class="fa fa-dribbble" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-dribbble" aria-hidden="true"></i></div></a></li>
						  <li><a href="#" class="pinterest">
							  <div class="front"><i class="fa fa-vimeo" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-vimeo" aria-hidden="true"></i></div></a></li>
					</ul> --}}
				</div>
				<div class="col-md-4 team-grid">
					<div class="pic">
						<div class="stack twisted">	
							<img src="images/snull.png"snull.png" " class="img-responsive" />
						</div>
						{{-- <div class="pic-caption top-to-bottom">
							<h5 class="pic-title">eumiure</h5>
							<p>autem vel eum iure repreh qui in voluptate ea.</p>
						</div> --}}
					</div>
					<h4>Gabriela</h4>
					<p>Dep.pessoal</p>
					{{-- <ul class="social-nav model-3d-0">
						  <li><a href="#" class="facebook">
							  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
						  <li><a href="#" class="twitter"> 
							  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
						  <li><a href="#" class="instagram">
							  <div class="front"><i class="fa fa-dribbble" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-dribbble" aria-hidden="true"></i></div></a></li>
						  <li><a href="#" class="pinterest">
							  <div class="front"><i class="fa fa-vimeo" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-vimeo" aria-hidden="true"></i></div></a></li>
					</ul> --}}
				</div>
				<div class="col-md-4 team-grid">
					<div class="pic">
						<div class="stack twisted">	
							<img src="images/snull.png" alt=" " class="img-responsive" />
						</div>
						{{-- <div class="pic-caption top-to-bottom">
							<h5 class="pic-title">reprehquin</h5>
							<p>autem vel eum iure repreh qui in voluptate ea.</p>
						</div> --}}
					</div>
					<h4>Mark Carl</h4>
					<p>Manager</p>
					{{-- <ul class="social-nav model-3d-0">
						  <li><a href="#" class="facebook">
							  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
						  <li><a href="#" class="twitter"> 
							  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
						  <li><a href="#" class="instagram">
							  <div class="front"><i class="fa fa-dribbble" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-dribbble" aria-hidden="true"></i></div></a></li>
						  <li><a href="#" class="pinterest">
							  <div class="front"><i class="fa fa-vimeo" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-vimeo" aria-hidden="true"></i></div></a></li>
					</ul> --}}
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
<!-- testimonial -->
	<div class="testimonial agileinfo">
		<div class="container">
			<div class="about-heading testimonial-heading">
				<h3>Depoimentos</h3>
			</div>
			<div class="testimonial-grid">
					<div class="slider">
							<div class="callbacks_container">
								<ul class="rslides" id="slider3">
									<li>
										<div class="agileits-w3layouts">
											<i class="fa fa-quote-right" aria-hidden="true"></i>
											<p>Donec feugiat tellus sem, laoreet iaculis orci lobortis vel. Sed sed luctus orci, at lacinia risus. Ut porttitor ante ac tincidunt elementum. Curabitur ex dolor, condimentum vitae nunc vel, pulvinar semper justo. Vestibulum et aliquet magna, maximus dapibus enim. Vestibulum ex lectus, posuere eu viverra at, mattis et enim. Nam efficitur sem et lectus fringilla, at pharetra nulla luctus. Nunc cursus, augue ac ultricies volutpat, neque erat congue justo, ac pretium tellus eros a neque. Integer ipsum sem, consectetur a mollis.</p>
											<h5>Shaun <span>- Founder</span></h5>
										</div>
									</li>
									<li>
										<div class="agileits-w3layouts">
											<i class="fa fa-quote-right" aria-hidden="true"></i>
											<p>Pellentesque urna ex, ultricies a nunc at, pretium maximus nisi. Vestibulum non auctor diam. Mauris eget consectetur mauris. Aenean leo elit, accumsan vel elit vitae, mattis ultricies lacus. Cras consectetur justo lorem, sed dictum sapien eleifend at.Donec sed orci a dui aliquam tempor. Praesent in ipsum ut nunc porttitor lacinia.Donec eu sapien et arcu dictum rutrum.Ut laoreet vitae augue at accumsan. Nam pharetra sagittis purus et condimentum. Vestibulum cursus porttitor pretium.In egestas finibus rutrum. Nulla facilisi.</p>
											<h5>Rogerer <span>- CEO</span></h5>
										</div>
									</li>
								</ul>
							</div>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
							<!--banner Slider starts Here-->
					</div>
			</div>
		</div>
	</div>

@endsection

