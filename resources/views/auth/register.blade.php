@extends('layouts.main')
@section('titulo', 'Iniciar sesión')
@section('contenido')
    <div class="mask d-flex justify-content-center" id="form-background">
        <div class="accent-background"></div>
        
        <div class="row" id="centrar">
            <div class="col-lg-12">
                <div class="welcome text-center">
                    <h1>Bienvenido!</h1>
                    <p>Ingrese sus datos para registrar su cuenta de usuario</p>
                </div>
            </div>
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="card mb-5" id="register-card">
                    <div class="card-header white border-0">
                        <div class="brand">
                            <i class="fa fa-globe icon-brand mr-2"></i>
                            <div class="name-brand">
                                <p class="first-name">Eletro <br> <span class="second-name">Global</span></p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-body">
                        <form action="{{ route('register_client') }}" method="post">
                            {!! csrf_field() !!}
                            
                            
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-lg-6 col-6 my-2">
                                        <!-- <label for="nombre" class="mt-1 box-label">Nombre</label> -->
                                        <input name="nombre" class="form-control " type="text" placeholder="Nombre">
                                    </div>
                                    <div class="col-lg-6 col-6 my-2">
                                        <!-- <label for="apellido" class="mt-1 box-label">Apellido</label> -->
                                        <input name="apellido" class="form-control " type="text" placeholder="Apellido">
                                    </div>
                                    <div class="col-lg-6 col-6 my-2" >
                                        <!-- <label for="rut" class="mt-1 box-label">RUT</label> -->
                                        <input name="rut" class="form-control " type="text" placeholder="RUT">
                                    </div>
                                    <div class="col-lg-6 col-6 my-2">
                                        <!-- <label for="telefono" class="mt-1 box-label">Teléfono</label> -->
                                        <input name="telefono" class="form-control " type="text" placeholder="Telefono">
                                    </div>
                                    <div class="col-lg-9 col-sm-6 my-2">
                                        <!-- <label for="direccion" class="mt-1 box-label">Dirección</label> -->
                                        <input name="calle" class="form-control " type="text" placeholder="Dirección">
                                    </div>
                                    <div class="col-lg-3 col-sm-6 my-2">
                                        <!-- <label for="direccion" class="mt-1 box-label">Dirección</label> -->
                                        <input name="numero" class="form-control " type="text" placeholder="Número">
                                    </div>
                                    <div class="col-lg-12 col-sm-12 my-2" >
                                        <!-- <label for="email" class="mt-1 box-label">Correo</label> -->
                                        <input name="email" class="form-control " type="email" placeholder="Email">
                                    </div>
                                    
                                    <div class="col-lg-6 col-12 my-2">
                                        <!-- <label for="contraseña" class="mt-1 box-label">Contraseña</label> -->
                                        <input name="contraseña" class="form-control " type="password" placeholder="Contraseña">
                                    </div>
                                    <div class="col-lg-6 col-12 my-2">
                                        <!-- <label for="confirmar" class="mt-1 box-label">Confirmar</label> -->
                                        <input name="confirmar" class="form-control " type="password" placeholder="Confirma Contraseña">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="md-form my-0 text-center" id="btn-register">
                                <button type="submit" class="btn light-blue darken-4 white-text">Registrar cuenta <i class="fas fa-user-plus ml-2 fa-fw"></i>  </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection