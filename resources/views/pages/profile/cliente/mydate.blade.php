@extends('layouts.dashboard')
@section('page-title', 'Mis citas')
@section('title', 'Mis citas')
@section('citas', 'active-item')
@section('contenido')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <ul class="nav nav-tabs border-0" id="custom-profile-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#nuevas" role="tab" aria-controls="home"
            aria-selected="true"> <i class="far fa-calendar-plus mr-2 fa-fw"></i>  Recientes </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
            aria-selected="false"> <i class="far fa-calendar-check mr-2 fa-fw"></i>  Agendadas </a>
        </li>
    </ul>
    <div class="tab-content pl-0 pr-0" id="myTabContent">
        <div class="tab-pane fade show active" id="nuevas" role="tabpanel" aria-labelledby="home-tab">
            <div class="row p-0 m-0">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 mb-4 pl-0">
                    <div class="card info-card-default z-depth-0">
                        <div class="card-body">
                            <div class="md-form my-0 text-center new-date-button">
                                <button type="button" class="btn z-depth-0" data-toggle="modal" data-target="#modalCita">
                                    <i class="far fa-calendar-plus fa-3x mb-3"></i> <br>
                                    <span class="grey-text">Solicitar servicio</span> 
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach(Auth::user()->servicios as $servicio)
                    @if($servicio->pivot['estado_cita'] == 'Nueva')
                    <div class="col-lg-3 mb-4 pl-0">
                        <div class="card info-card z-depth-0 p-2">
                            <div class="card-header border-0 white">
                                <div class="icon-date float-right">
                                    <a href="" class="delete-button-alt">
                                        <i class="fas fa-times float-right"></i>
                                    </a>
                                </div>
                                <div class="title-card">{{ $servicio->tipo }}</div>
                                <hr class="white">
                            </div>
                            <div class="card-body">
                                <h1 class="info-card-title mb-2 text-left">{{ $servicio->nombre }}</h1>
                                <div class="info-card-body text-left">
                                    <div class="info-card-text">
                                        {{ $servicio->pivot['descripcion'] }}
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer white border-0">
                                @if($servicio->pivot['estado_whatsapp'] == 1)
                                    <span data-toggle="popover-hover" data-content="Whatsapp habilitado">
                                        <i class="fab fa-whatsapp float-right fa-fw icon-wsp"></i>
                                    </span>
                                @endif

                                <p class="card-footer-text">
                                    <i class="fa fa-check fa-fw"></i> {{ $servicio->pivot['estado_cita'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach

                @include('pages.agenda.create')
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row p-0 m-0">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 mb-4 pl-0">
                    <div class="card info-card-default z-depth-0">
                        <div class="card-body">
                            <div class="md-form my-0 text-center new-date-button">
                                <button type="button" class="btn z-depth-0" data-toggle="modal" data-target="#modalCita">
                                    <i class="far fa-calendar-plus fa-3x mb-3"></i> <br>
                                    <span class="grey-text">Solicitar servicio</span> 
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($servicios as $servicio)
                    @if($servicio->pivot['estado_cita'] == 'Agendada')
                    <div class="col-lg-3 mb-4 pl-0">
                        <div class="card info-card z-depth-0 p-2">
                            <div class="card-header border-0 white">
                                <div class="icon-date float-right">
                                    <a href="" class="delete-button-alt">
                                        <i class="fas fa-times float-right"></i>
                                    </a>
                                </div>
                                <div class="title-card">{{ $servicio->tipo }}</div>
                                <hr class="white">
                            </div>
                            <div class="card-body">
                                <h1 class="info-card-title mb-2 text-left">{{ $servicio->nombre }}</h1>
                                <div class="info-card-body text-left">
                                    <div class="info-card-text">
                                        {{ $servicio->pivot['descripcion'] }}
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer white border-0">
                                @if($servicio->pivot['estado_whatsapp'] == 1)
                                    <span data-toggle="popover-hover" data-content="Whatsapp habilitado">
                                        <i class="fab fa-whatsapp float-right fa-fw icon-wsp"></i>
                                    </span>
                                @endif

                                <p class="card-footer-text">
                                    <i class="fa fa-check fa-fw"></i> {{ $servicio->pivot['estado_cita'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach

                @include('pages.agenda.create')
            </div>
        </div>
    </div>
</div>

@endsection