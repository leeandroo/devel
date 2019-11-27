@extends('layouts.dashboard')
@section('page-title', 'Gestión de citas')
@section('title', 'Control de citas')
@section('citas', 'active-item')
@section('contenido')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <ul class="nav nav-tabs border-0" id="custom-profile-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#nuevas" role="tab" aria-controls="home"
            aria-selected="true"> 
                Recientes 
                <span class="badge badge-primary z-depth-0 ml-2">
                    {{  $citas->where('estado_cita', 'Nueva')->count()  }}
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
            aria-selected="false"> 
                Agendadas 
                <span class="badge badge-warning z-depth-0 ml-2">
                    {{  $citas->where('estado_cita', 'Agendada')->count()  }}
                </span>
            </a>
        </li>
    </ul>
    <div class="tab-content pl-0 pr-0" id="myTabContent">
        <div class="tab-pane fade show active" id="nuevas" role="tabpanel" aria-labelledby="home-tab">
            <div class="row p-0 m-0">
                @foreach($citas as $cita)
                    @if($cita->estado_cita == 'Nueva')
                    <div class="col-lg-4 mb-4 pl-0 pr-0 pr-lg-4 pr-lg-4">
                        <div class="card info-card z-depth-0 p-2 pl-3 pr-3">
                            <span class="badge grey lighten-4 ml-3 mt-3 float-left z-depth-0">Nueva</span>
                            <div class="card-header mb-0 border-0 white d-flex justify-content-center">
                
                                @if($cita->user->imagen == null)
                                    <div class="circle">
                                        <i class="fas fa-user"></i>
                                    </div>
                                @else
                                    <div class="avatar">
                                        <img src="{{asset('dashboard/img/avatars/'.$cita->user->imagen)}}" alt="avatar mx-auto white" class="img-fluid rounded-circle z-depth-0">
                                    </div>
                                @endif
                                
                            </div>
                            <div class="mt-3 text-center">
                                <h4 class="title-card">{{ $cita->user->name.' '.$cita->user->lastname }}</h4>
                                <p class="subtitle-card mb-2">{{ $cita->user->calle.', '.$cita->user->numero_calle }}</p>
                                @if($cita->estado_whatsapp == 1)
                                    <p class="text-green generic-text">
                                       <i class="fas fa-circle align-middle mr-1 conect-point"></i> WhatsApp habilitado
                                    </p>
                                @else
                                    <p class="text-red generic-text">WhatsApp desactivado</p>
                                @endif
                            </div>
                    
                            <div class="card-body">
                                <div class="info-card-body">
                                    <div class="mb-4">
                                        <h1 class="info-card-title mb-2 text-left">Servicio</h1>
                                        <p class="info-card-text">
                                            {{ $cita->servicio->nombre }} <br>
                                            <i class="far fa-bookmark mr-2 fa-fw"></i>{{$cita->servicio->tipo }}
                                        </p>
                                    </div>
                                    <div class="">
                                        <h1 class="info-card-title mb-2 text-left">Observación</h1>
                                        <p class="info-card-text mb-0">
                                            {{ $cita->descripcion }}
                                        </p>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="card-footer white border-0 mt-0">
                                <div id="btn-date">
                                    <a type="button" class="btn btn-block blue accent-3 white-text z-depth-0" data-toggle="modal" data-target="#modal-{{$cita->id}}">
                                        Agendar cita <i class="fas fa-check ml-2 fa-fw"></i>
                                    </a>
                                </div>
                            </div>

                            @include('pages.agenda.schedule')
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade pl-0 pr-0" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row p-0 m-0">
                @foreach($citas as $cita)
                    @if($cita->estado_cita == 'Agendada')
                    <div class="col-lg-4 mb-4 pl-0 pr-0 pr-lg-4 pr-lg-4">
                        <div class="card info-card z-depth-0 p-2 pl-3 pr-3">
                            <span class="badge grey lighten-4 ml-3 mt-3 float-left z-depth-0">{{ $cita->estado_cita }}</span>
                    
                            <div class="card-header mb-0 border-0 white d-flex justify-content-center">
                
                                @if($cita->user->imagen == null)
                                    <div class="circle">
                                        <i class="fas fa-user"></i>
                                    </div>
                                @else
                                    <div class="avatar">
                                        <img src="{{asset('dashboard/img/avatars/'.$cita->user->imagen)}}" alt="avatar mx-auto white" class="img-fluid rounded-circle z-depth-0">
                                    </div>
                                @endif
                                
                            </div>
                            <div class="mt-3 text-center">
                                <h4 class="title-card">{{ $cita->user->name.' '.$cita->user->lastname }}</h4>
                                <p class="subtitle-card mb-2">{{ $cita->user->calle.', '.$cita->user->numero_calle }}</p>
                                @if($cita->estado_whatsapp == 1)
                                    <p class="text-green generic-text">
                                       <i class="fas fa-circle align-middle mr-1 conect-point"></i> WhatsApp habilitado
                                    </p>
                                @else
                                    <p class="text-red generic-text">WhatsApp desactivado</p>
                                @endif
                            </div>
                    
                            <div class="card-body">
                                <div class="info-card-body">
                                    <div class="mb-4">
                                        <h1 class="info-card-title mb-2 text-left">Servicio</h1>
                                        <p class="info-card-text">
                                            {{ $cita->servicio->nombre }} <br>
                                            {{$cita->servicio->tipo }}
                                        </p>
                                    </div>
                                    <div class="">
                                        <h1 class="info-card-title mb-2 text-left">Observación</h1>
                                        <p class="info-card-text mb-0">
                                            {{ $cita->descripcion }}
                                        </p>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="card-footer white border-0 mt-0">
                                <div id="btn-date">
                                    <a type="button" class="btn btn-block warning-color white-text z-depth-0" data-toggle="modal" data-target="#modal-{{$cita->id}}">
                                        Editar responsable <i class="fas fa-edit ml-2 fa-fw"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
