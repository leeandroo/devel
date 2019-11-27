<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('dashboard/css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">
	<script type="text/javascript" src="{{asset('dashboard/js/jquery-3.3.1.min.js')}}"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <script src="{{asset('dashboard/js/all.js')}}"></script>
</head>
	<body class="fixed-sn white-skin grey lighten-4">
		<!--Double navigation-->
		<header>
			<!-- Sidebar navigation -->
			<div id="slide-out" class="side-nav fixed z-depth-0">
				<li>
					<div class="logo-wrapper border-0 text-left">
						<a href="#"><img src="{{asset('dashboard/img/logo.PNG')}}"
							class="img-fluid flex-center m-0"></a>
					</div>	
				</li>
				
				@if(Auth::user()->type == 'Cliente')
					@include('components.client-links')
				@elseif(Auth::user()->type == 'Trabajador' || Auth::user()->type == 'Colaborador')
					@include('components.colab-links')
				@else
					@include('components.admin-links')
				@endif

				<hr class="grey lighten-5 ml-3 mr-3">

				<div class="opciones mb-4">
					<a href="{{ url('/user-profile') }}" class="list-item mt-1 p-0">
						<div class="list-mark float-left mr-4"></div>
						<i class="fas fa-headset ml-2 mr-4 fa-fw icono"></i>Contacto
					</a>
					<a href="{{ url('/user-profile/mis-citas') }}" class="list-item mt-1 p-0">
						<div class="list-mark float-left mr-4"></div>
						<i class="fas fa-question ml-2 mr-4 fa-fw icono"></i>Soporte
					</a>
				</div>
				
				<form action="{{ route('logout') }}" method="post">
					{!! csrf_field() !!}
					<div class="md-form my-0 text-center" id="btn-logout">
						<button type="submit" class="btn white border border-primary z-depth-0">Cerrar sesión <i class="fa fa-arrow-right ml-2"></i>  </button>
					</div>
				</form>
				<div class="sidenav-bg mask-strong"></div>
			</div>
			<!--/. Sidebar navigation -->
			<!-- Navbar -->
			
			<!-- /.Navbar -->
		</header>
		<!--/.Double navigation-->

		<!-- Content -->
		<div class="main">
			<nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar z-depth-0" id="custom-nav-dashboard">
				<div class="nav-content">
					<div class="menu">
						<a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
					</div>
					<!-- SideNav slide-out button -->
					<div class="nav-title">
						@yield('title')
					</div>
					<!--/. SideNav slide-out button-->

					<!-- Dropdown button -->
					<ul class="navbar-nav float-right">
						<li class="nav-item dropdown">
							<a class="float-right" id="settings" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							<i class="far fa-user"></i></a>
							<div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
							<a class="dropdown-item" href="#">Cerrar sesión</a>
							</div>
						</li>
					</ul>
					<!--/. Dropdown button -->
				</div>
			</nav>  
			<!-- <div class="row" id="carrusel">
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="card light-blue darken-3 minicard mb-4" >
						<div class="card-body light-blue darken-4 p-0">
							<div class="minicard-icon d-flex justify-content-center">
								<div class="circle p-1 light-blue darken-3">
									<i class="fas fa-calendar-times white-text"></i>
								</div>
							</div>
							<div class="minicard-content pt-3">
								<div class="minicard-number ml-3">10</div>
								<div class="minicard-text mb-0 mt-0">Citas canceladas</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="card blue darken-1 minicard mb-4" >
						<div class="card-body blue p-0">
							<div class="minicard-icon d-flex justify-content-center">
								<div class="circle p-1 blue darken-1">
									<i class="fas fa-chess-king text-center white-text"></i>
								</div>
							</div>
							<div class="minicard-content pt-3">
								<div class="minicard-number">60</div>
								<div class="minicard-text">Citas realizadas</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="card amber darken-1 minicard mb-4" >
						<div class="card-body amber p-0">
							<div class="minicard-icon d-flex justify-content-center">
								<div class="circle p-1 amber darken-1">
									<i class="fas fa-star white-text"></i>
								</div>
							</div>
							<div class="minicard-content pt-3">
								<div class="minicard-number">4,2</div>
								<div class="minicard-text">Nota promedio</div>
							</div>
						</div>
					</div>
				</div>	
				<div class="col-lg-3 col-sm-6 col-sm-6 col-12">
					<div class="card teal darken-1 minicard" >
						<div class="card-body teal p-0">
							<div class="minicard-icon d-flex justify-content-center">
								<div class="circle p-1 teal darken-1">
									<i class="fas fa-calendar-check white-text"></i>
								</div>
							</div>
							<div class="minicard-content pt-3">
								<div class="minicard-number">75</div>
								<div class="minicard-text">Puntos recientes</div>
							</div>
						</div>
					</div>
				</div>	
				<div class="col-lg-4 mt-5">
					<div class="page-subtitle mb-4">Ultimas valoraciones</div>
				</div> 
			</div> -->
			<div class="row mt-5">
				@yield('contenido')
			</div>
		</div>
		<!--/Content -->
		
		
		
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src="{{asset('dashboard/js/popper.min.js')}}"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="{{asset('dashboard/js/mdb.js')}}"></script>
		<script type="text/javascript" src="{{asset('dashboard/js/main.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.9.0/lang-all.js"></script>
	</body>
</html>