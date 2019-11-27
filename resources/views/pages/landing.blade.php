@extends('layouts.main')
@section('titulo', 'Electro Global')
@section('contenido')
	<!-- HEADER START -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar fixed-top z-depth-0">
			<div class="container">
				<!-- Navbar brand -->
				<a class="navbar-brand" href="#fondo">
					<i class="fas fa-globe icon-brand"></i> 
					<div class="name-brand">
						<p class="first-name">Eletro <span class="second-name">Global</span></p>
					</div>
				</a>
				<!-- Collapse button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
				aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<!-- Collapsible content -->
				<div class="collapse navbar-collapse" id="basicExampleNav">
				<!-- Links -->
					<ul class="navbar-nav ml-auto smooth-scroll">
						<!-- <li class="nav-item active">
							<a class="nav-link" href="#" id="relawayBLK">INICIO
							<span class="sr-only">(current)</span>
							</a>
						</li> -->
						<li class="nav-item">
							<a class="nav-link" href="#caracteristicas">Nosotros</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#diferencias">Servicios</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#servicios">Equipo</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#costos">Precios</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#agenda">Comunidad</a>
						</li>
					</ul>
					<!-- Links -->
					@if(Auth::user())
						<form class="form-inline" action="{{ url('/user-profile') }}" method="get">
							<div class="md-form my-0">
								<button type="submit" class="btn" id="btn-sign-in">Mi perfil  <i class="fa fa-arrow-right ml-1 fa-fw"></i> </button>
							</div>
						</form>
					@else
						<form class="form-inline" action="{{ url('/login') }}" method="get">
							<div class="md-form my-0">
								<button type="submit" class="btn" id="btn-sign-in">Ingresar <i class="fa fa-sign-in-alt ml-1 fa-fw"></i></button>
							</div>
						</form>
					@endif
				</div>
			<!-- Collapsible content -->	
			</div>
		</nav>
		<!--/.Navbar-->
		<!--MASK-->
		<div class="view" id="fondo">
			<div class="wrapper">
				<div id="background"></div>
			</div>
			<div class="mask">
				
				<div class="row">
					
					<div class="col-lg-6">
						<div class="banner">
							<!--cabeza-->
							<div class="banner-title mb-5">
								<div class="banner-mark mb-4"></div>
								<h2>Unete a nuestra red de</h2>
								<h3>Colaboradores <span class="teal-text">Electro</span></h3>
							</div>
							<!--cabeza-->
				
							<!--descripcion-->
							<p class="banner-text responsive-text">Registra tu cuenta de colaborador, podrás publicar y admimistrar tus propios servicios</h4>
				
							<!--descripcion-->
							<div class="mt-5">
								<button type="button" class="btn m-0 light-blue darken-3 white-text btn-lg">Registra tu cuenta <i class="ml-2 fa fa-arrow-right"></i></button>
							</div>
						</div>
					</div>
					<div class="col-lg-6"></div>
				</div>
				
			</div>
		</div>
	</header>	
	<!-- HEADER END -->

	<!-- BODY START -->
	<main class="mt-0">
		<div class="container align-items-center">
			<!--SECTION NOSOTROS START-->
			<section id="caracteristicas" class="container text-left">
					<!-- Section heading -->
					<div class="row align-items-center my-5">
						<div class="col-lg-6 col-md-12 mb-lg-0 mb-4">
							<h2 class="title">Acerca de nosotros</h2>
							<div>
								<hr class="ra d-inline-block">
							</div>
							<!-- Section description -->
							<p class="grey-text text-left">
							Global Electro es una empresa que entrega servicios eléctricos en la ciudad de Calama, dicha empresa, se encuentra constituida hace un año, sin embargo, sus operaciones comenzaron hace aproximadamente un mes y medio, ante lo anterior, la solicitud del proyecto nace en base a las siguientes razones:
							</p>
							<p class="grey-text text-left">Aspiramos a</p>
							<ul class="grey-text text-left">
								<li><i class="fas fa-check cyan-text"></i> Ser los mejores del mercado</li>
								<li><i class="fas fa-check cyan-text"></i> Siempre estar disponibles </li>
								<li><i class="fas fa-check cyan-text"></i> Ser transparentes con el cliente</li>
								<li><i class="fas fa-check cyan-text"></i> Ofrecer servicios de calidad</li>
							</ul>
						</div>
						<div class="col-lg-6 mb-lg-0 mb-4">
							<div id="map-container" class="map-container z-depth-5 " style="height :400px;"></div>
						</div>
					</div>
					<!-- Grid row -->
			</section>
			<hr class="my-5">
			<!--SECTION NOSOTROS END-->

			<!--SECTION EQUIPO START-->
			<section id="equipo" class="container text-center">
				<div class="row align-items-cente">
					<div class="col-lg-12 col-md-12 mb-lg-0 mb-4">
						<h2 class="title ">Nuestro equipo</h2>
						<div>
							<hr class="ra d-inline-block">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
						<div class="card card-cascade narrower my-4">
							<div class="card-body">
								<i class="fas fa-user-tie fa-4x cyan-text my-3"></i>
								<div class="text-center">
									<h5 class="card-title">Guillermo Valencia</h5>
									<p class="card-text grey-text">Gerente general y fundador</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
						<div class="card card-cascade narrower my-4">
							<div class="card-body">
								<i class="fas fa-user fa-4x cyan-text my-3"></i>
								<div class="text-center">
									<h5 class="card-title">Guillermo Valencia</h5>
									<p class="card-text grey-text">Administrador y co-fundador</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
						<div class="card card-cascade narrower my-4">
							<div class="card-body">
								<i class="fas fa-users fa-4x cyan-text my-3"></i>
								<div class="text-center">
									<h5 class="card-title">Equipo Sermalet</h5>
									<p class="card-text grey-text">Estrategia, ejecución y soporte</p>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</section>
			<hr class="my-5">
			<!--SECTION EQUIPO END-->

			<!--SECTION DIFERENCIAS START-->
			<section id="diferencias" class="container text-left my-3">
					<!-- Section heading -->
					<div class="row align-items-center my-5">
						<div class="col-lg-6 mb-lg-0 mb-4">
							<img src="https://promociones.visa.com/content/image/display/n_im_20150907200740701.jpg" alt="Sample project image" class="img-fluid rounded z-depth-5">
						</div>
						<div class="col-lg-6 col-md-12 mb-lg-0 mb-4">
							<h2 class="title ">Qué nos diferencia</h2>
							<div>
								<hr class="ra d-inline-block">
							</div>
							<!-- Section description -->
							<p class="grey-text text-left">
								En Sermalet nos especializamos en enforcamos en nuestros clientes, por tal razón, tenemos un equipo humano altamente calificado para entregar un servicio de suma calidad y cuidado. Además como empresa se coloca especial enfasis en lo siguiente 
							</p>
							<ul>
								<div class="my-5">
									<h6 class="sub-title"><i class="fas fa-award cyan-text"></i> Calidad</h6>
									<p class="grey-text text-left">
										Nuestros grupo humano esta calificado para entregar soluciones acordes a las necesidades del cliente
									</p>
								</div>
								<div class="my-5">
									<h6 class="sub-title"><i class="fas fa-business-time cyan-text"></i> Disponibilidad</h6>
									<p class="grey-text text-left">
										Sermalet ofrece servicios del tipo 24/7, siempre disponibles para atender a nuestros clientes
									</p>
								</div>
								<div class="my-5">
									<h6 class="sub-title"><i class="fas fa-search cyan-text"></i> Transparencia</h6>
									<p class="grey-text text-left">
										La confianza del cliente es primordial, por eso nos enfocamos en ser honestos y directos con nuestros clientes
									</p>
								</div>
							</ul>
						</div>
					</div>
					<!-- Grid row -->
			</section>
			<hr class="my-5">
			<!--SECTION DIFERENCIAS END-->

			<!--SECTION SERVICIOS START-->
			<section id="servicios" class="container text-left">
					<!-- Section heading -->
				<div class="row align-items-center my-5">
					<div class="col-lg-6 col-md-12 mb-lg-0 mb-4">
						<h2 class="title ">Nuestros servicios</h2>
						<div>
							<hr class="ra d-inline-block">
						</div>
							<!-- Section description -->
						<p class="grey-text text-left">
							Ofrecemos diversos servicios electricos, enfocados en distintos grupos de clientes y necesidades
						</p>
							<!-- Grid row -->
						<ul>
							<div class="row mb-3">
								<div class="col-md-11 col-10">
									<h5 class="sub-title"><i class="fas fa-industry cyan-text"></i> Electricidad industrial</h5>
									<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam,
									aperiam minima elit assumenda voluptate velit.</p>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-md-11 col-10">
									<h5 class="sub-title"><i class="fas fa-store cyan-text"></i> Electricidad Comercial</h5>
									<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam,
									aperiam minima elit assumenda voluptate velit.</p>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-md-11 col-10">
									<h5 class="sub-title"><i class="fas fa-home cyan-text"></i> Electricidad residencial</h5>
									<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam,
									aperiam minima elit assumenda voluptate velit.</p>
								</div>
							</div>
						</ul>
					</div>
					<div class="col-lg-6 mb-lg-0 mb-4">
						<img src="https://1stop4all.nl/wp-content/uploads/2016/09/shutterstock_155918309.jpg" alt="Sample project image" class="img-fluid rounded z-depth-5">
					</div>
						
				</div>
			</section>
			<hr class="my-5">
			<!--SECTION SERVICIOS END-->
			<section id="costos" class="container text-center">
				<div class="row align-items-cente">
					<div class="col-lg-12 col-md-12 mb-lg-0 mb-4">
						<h2 class="title ">Plan de costos</h2>
						<div>
							<hr class="ra d-inline-block">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
						<div class="card card-cascade narrower my-4">
							<div class="card-body">
								<i class="fas fa-user-tie fa-4x cyan-text my-3"></i>
								<div class="text-center">
									<h5 class="card-title">Guillermo Valencia</h5>
									<p class="card-text grey-text">Gerente general y fundador</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
						<div class="card card-cascade narrower my-4">
							<div class="card-body">
								<i class="fas fa-user fa-4x cyan-text my-3"></i>
								<div class="text-center">
									<h5 class="card-title">Guillermo Valencia</h5>
									<p class="card-text grey-text">Administrador y co-fundador</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
						<div class="card card-cascade narrower my-4">
							<div class="card-body">
								<i class="fas fa-users fa-4x cyan-text my-3"></i>
								<div class="text-center">
									<h5 class="card-title">Equipo Sermalet</h5>
									<p class="card-text grey-text">Estrategia, ejecución y soporte</p>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</section>
			<hr class="my-5">
			<!--SECTION AGENDA START-->
			<section id="agenda" class="container text-left my-5">
				<!-- grid row -->
					<div class="container">
						<div class="row pt-lg-5 mt-lg-5 align-items-center">
							<div class="col-lg-6 mb-lg-0 mb-4">
								<img src="https://www.idcontrol.es/wp-content/uploads/2016/03/Contratar-servicios-de-control-de-plagas-ID-Control-de-Plagas.jpg" alt="Sample project image" class="img-fluid rounded z-depth-5">
							</div>
							<div class="col-lg-6 col-md-12 d-inline-block">
								<h2 class="title ">Agenda tu servicio</h2>
								<div>
									<hr class="ra d-inline-block">
								</div>
							<!-- Section description -->
								<p class="grey-text text-left">
									Agenda tu proxima atención, al solicitar tu servicio nosotros nos encargaremos del resto, asi ahorras tiempo en contizaciones y consultas. Te aseguramos lo siguiente: 
								</p>
								<li class="grey-text text-left"><i class="fas fa-check cyan-text"></i> Te notificaremos la confirmación de la cita</li>
								<li class="grey-text text-left"><i class="fas fa-check cyan-text"></i> Se enviará la hora, el responsable y los costos de la cita</li>
								<p class="text-left mt-2">
									<a href=""class="btn cyan white-text" id="relawaySB">Comenzar solicitud <i class="fas fa-angle-right"></i></a>
								</p>
							</div>
						</div>
					</div>
			</section>
			<!--SECTION AGENDA END-->			
		</div>
	
	</main>
	<!-- BODY END -->

	<footer id="footer" class="page-footer elegant-color-dark mt-4 text-left">
  		<div class="text-center py-4">
		</div>
		<!--Footer Links-->
		<div class="container text-center text-md-left mt-5">
			<div class="row mt-3">
			<!--First column-->
			<div class="col-md-3 col-lg-4 col-xl-3 mb-4">
				<h6 class="text-uppercase font-weight-bold">
				<strong>Useful links</strong>
				</h6>
				<hr class="info-color mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
				<p>
				<a id="footer-link-faq" href="/docs/jquery/getting-started/faq/">Frequently Asked Questions</a>
				</p>
				<p>
				<a id="footer-link-browsers" href="/general/browsers-and-devices/">Browsers and devices</a>
				</p>
				<p>
				<a id="footer-link-license" href="/general/license/">License</a>
				</p>
				<p>
				<a id="footer-link-changelog" href="/docs/jquery/changelog/">ChangeLog</a>
				</p>
				<p>
				<a id="footer-link-policy" href="/general/privacy-policy/">Privacy Policy</a>
				</p>
				<p>
				<a id="footer-link-refund" href="/general/return-refund-policy/">Return/Refund policy</a>
				</p>
				<p>
				<a id="footer-link-students" href="/general/mdb-academy/">Students and universities</a>
				</p>
			</div>
			<!--/.First column-->
			<!--Second column-->
			<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
				<h6 class="text-uppercase font-weight-bold">
				<strong>Resources</strong>
				</h6>
				<hr class="info-color mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
				<p>
				<a id="footer-link-jquery" href="/docs/jquery/">MDB jQuery</a>
				</p>
				<p>
				<a id="footer-link-angular" href="/docs/angular/">MDB Angular</a>
				</p>
				<p>
				<a id="footer-link-react" href="/docs/react/">MDB React</a>
				</p>
				<p>
				<a id="footer-link-vue" href="/docs/vue/">MDB Vue</a>
				</p>
				<p>
				<a id="footer-link-brandflow" href="/support/">Support forum</a>
				</p>
				<p>
				<a id="footer-link-brandflow" href="/snippets/">MDB Editor &amp; Snippets </a>
				</p>
				<p>
				<a id="footer-link-brandflow" href="/articles/">Articles</a>
				</p>
				<p>
				<a id="footer-link-brandflow" href="/user/mdbootstrap/">News</a>
				</p>
				<p>
				<a id="footer-link-freebies" href="/freebies/">Free templates</a>
				</p>
				<p>
				<a id="footer-link-templates" href="/templates/">Premium templates</a>
				</p>
			</div>
			<!--/.Second column-->
			<!--Third column-->
			<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
				<h6 class="text-uppercase font-weight-bold">
				<strong>Free tutorials</strong>
				</h6>
				<hr class="info-color mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
				<p>
				<a id="footer-link-tutBootstrap" href="/education/">Basics (HTML/CSS/JS)</a>
				</p>
				<p>
				<a id="footer-link-tutBootstrap" href="/education/bootstrap/">Bootstrap &amp; web design</a>
				</p>
				<p>
				<a id="footer-link-tutAngular" href="/education/angular/">Angular</a>
				</p>
				<p>
				<a id="footer-link-tutAngular" href="/education/react/">React</a>
				</p>
				<p>
				<a id="footer-link-tutAngular" href="/education/vue/">Vue</a>
				</p>
				<p>
				<a id="footer-link-tutWordpress" href="/education/wordpress/">WordPress</a>
				</p>
				<p>
				<a id="footer-link-tutWebpush" href="/articles/">Miscellaneous</a>
				</p>
			</div>
			<!--/.Third column-->
			<!--Fourth column-->
			<div class="col-md-4 col-lg-3 col-xl-3">
				<h6 class="text-uppercase font-weight-bold">
				<strong>Company</strong>
				</h6>
				<hr class="info-color mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
				<p>
				<i class="fas fa-envelope mr-3"></i> contact@mdbootstrap.com</p>
				<!-- <p>
					<i class="fas fa-building mr-3"></i> Our story</p> -->
				<p>
				<a id="footer-link-team" href="/general/our-team/">
					<i class="fas fa-users mr-3"></i> Our team</a>
				</p>
				<p>
				<a id="footer-link-company" href="/general/contact/">
					<i class="fas fa-bullhorn mr-3"></i> Company data</a>
				</p>
				<p>
				<a id="footer-link-formedia" href="/general/press-pack/">
					<i class="fas fa-bullhorn mr-3"></i> For media</a>
				</p>
			</div>
			<!--/.Fourth column-->
			</div>
		</div>
		<!--/.Footer Links-->
		<!-- Copyright-->
		<div class="footer-copyright py-3 text-center">
			© 2019 Copyright:
			<a href="https://www.MDBootstrap.com">
			<strong> MDBootstrap.com</strong>
			</a>
		</div>
	<!--/.Copyright -->
	</footer>
@endsection 