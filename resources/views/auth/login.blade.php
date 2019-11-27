@extends('layouts.main')
@section('titulo', 'Iniciar sesión')
@section('contenido')
    
    <div class="mask d-flex justify-content-center" id="form-background">
        <div class="accent-background"></div>
        <div class="row" id="centrar">
            <div class="col-lg-12 text-center">
                <div class="welcome">
                    <h1>¡Gusto de verte!</h1>
                    <p>Por favor, ingrese sus datos para iniciar sesión</p>
                </div>
            </div>
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="card" id="login-card">
                    <div class="card-header white border-0">
                        <div class="brand">
                            <i class="fa fa-globe icon-brand mr-2"></i>
                            <div class="name-brand">
                                <p class="first-name">Eletro <br> <span class="second-name">Global</span></p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-body">
                        
                        <form action="{{ route('login') }}" method="post" >
                            {!! csrf_field() !!}
                            <div class="form-row text-center mb-3">
                                <div class="register-text">
                                    <h1>¿Nuevo por aquí?  <a href="{{ url('register') }}">Registrarme</a></h1>
                                </div>
                            </div>
                            <div class="form-row mb-4">
                                <div class="col-lg-12" >
                                    <label for="email"> <i class="fa fa-envelope mr-1 fa-fw"></i> Ingresa tu correo</label>
                                    <input name="email" class="form-control validate" type="email">
                                </div>
                                <div class="col-lg-12 mt-2" >
                                    <label for="password"> <i class="fa fa-key mr-1 fa-fw"></i> Ingresa tu contraseña</label>
                                    <input name="password" class="form-control validate" type="password">
                                </div>
                            </div>		
                            
                            <div class="md-form my-0 text-center" id="btn-login">
                                <button type="submit" class="btn light-blue darken-4 white-text">Iniciar sesión <i class="ml-2 fa fa-sign-in-alt fa-fw"></i></button>
                            </div>

                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- <div class="container">
    <div class="row" id="centrar">
        <div class="col-lg-8" id="centrar">
            <div class="card">
                <div class="row">
                    <div class="col-lg-7" id="centrar">
                        <div class="container-fluid">
                            <div class="card-body ml-3 mr-0">
                                <form class="align-items-center" style="color: #757575;" action="{{ route('login') }}" method="post">
                                    {!! csrf_field() !!}
                                    <div class="form-row mb-3 mt-3 text-center">
                                        <div class="col-lg-12">
                                            <h2 class="font-weight-bold black-text"><i class="fas fa-bolt animated tada infinite "></i> BIENVENIDO</h2>	
                                            <p class="text-center grey-text my-0" style="font-size: 15px;">
                                                Ingresa tus credenciales para iniciar sesión.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-row mt-3 mb-4">
                                        <div class="col-lg-12" >
                                            <label for="email">Ingresa tu correo</label>
                                            <input name="email" class="form-control validate" type="email">
                                        </div>
                                        <div class="col-lg-12 mt-2" >
                                            <label for="password">Ingresa tu contraseña</label>
                                            <input name="password" class="form-control validate" type="password">
                                        </div>
                                    </div>		
                                    
                                    <div class="md-form my-0 text-center" id="btnLogin">
                                        <button type="submit" class="btn">Iniciar sesión</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5" id="centrar">
                        <div class="card-body contact h-100 white-text" style="background-color: black;">
                            <div class="container text-left">
                                <h3 class="my-4 pb-2">¿NUEVO POR AQUÍ?</h3>
                                <p  style="font-size: 15px;">
                                    Registra tu cuenta de usuario, para unirte a nuestra red de clientes, con ello podras: 
                                </p>
                                <li><i class="fas fa-check white-text"></i> Solicitar los servicios que necesites al momento</li>
                                <li><i class="fas fa-check white-text"></i> Controlar cada servicio que te hemos prestado</li>
                                <div class="md-form" id="btnRegistrar">
                                    <a  class="btn" href="{{url('/register')}}">Registrarse</a>
                                </div>														
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->