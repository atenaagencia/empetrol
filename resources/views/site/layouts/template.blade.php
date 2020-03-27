<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Empetrol</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Corporative Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/empetrol.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="head-top-agileinfo">
	<div class="header w3layouts">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					{{-- <a class="navbar-brand" href="index.html"> --}}
				<img src="/images/logo.png" alt="" href="index.html" class=" logo">
					{{-- </a> --}}
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-13 fontenav" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li class="active"><a href="/">Home</a></li>
							<li><a href="/servicos">Serviços</a></li>
							<li><a href="/galeria">Galeria</a></li>
							{{-- <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Short Codes <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="icons.html">Icons</a></li>
									<li><a href="typography.html">Typography</a></li>
								</ul>
							</li> --}}
							<li><a href="#afooter">Contato</a></li>
						</ul>
						
					</nav>
				</div>
			</nav>
		</div>
	</div>
	<!-- banner -->
	@yield('slider')
	</div>
<!-- //banner -->
			
@yield('conteudo')

<!-- //testimonial -->
<!-- footer -->
	<div class="footer-w3-agile">
		<div class="container">
			<h2>Fale Conosco</h2>
			<p class="w3ls_head_para w3ls_head_para2">Lorem ipsum dolor amet sit Donec semper rutrum  </p>
		</div>
	</div>
<!-- //footer -->
<!-- foot-agileits -->
	<div class="foot-agileits-w3layouts" id="afooter">
		<div class="container">
			<div class="col-md-4 contact-info">
				<div class="w3ls-cont">
					<div class="address">	
						<i class="glyphicon glyphicon-globe"></i>
						<p class="p3">Rua Valério Pereiro,nº 127, primeiro andar, Centro</p>
						<p class="p3">Petrolina, Pernambuco</p>
						<p class="p3">56.300-300</p>
					</div>
					<div class="phone">
						<i class="glyphicon glyphicon-phone-alt"></i>
						<p class="p4">87-38612772</p>
					</div>
					<div class="email-info">
						<i class="glyphicon glyphicon-envelope"></i>
						<p class="p4"><a href="mailto:email2@example.com">email2@example.com</a></p>
					</div>
					<ul class="social-icons1">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-8 map-w3-agileits">
				<iframe src=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3936.2781528359906!2d-40.500661785210404!3d-9.396968893266177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x77370420c12564d%3A0x13a531264abf3e93!2sR.%20Val%C3%A9rio%20Pereira%2C%20127%20-%20Centro%2C%20Petrolina%20-%20PE%2C%2056304-060!5e0!3m2!1spt-BR!2sbr!4v1585340593296!5m2!1spt-BR!2sbr"  allowfullscreen></iframe>
			</div>
			<div class="clearfix"></div>
			<div class="copyright-agileinfo">
				<p>©2020 Corportaivo. Todos os Direitos Reservados por <a href="http://atenaagencia.com/" target="_blank">Atena</a></p>
			</div>
		</div>
	</div>
<!-- //foot-agileits -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script src="js/responsiveslides.min.js"></script>

</body>
</html>