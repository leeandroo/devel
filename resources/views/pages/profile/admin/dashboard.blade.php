@extends('layouts.dashboard')
@section('page-title', 'Perfil de '.Auth::user()->type)
@section('title', 'Dashboard')
@section('dash', 'active-item')
@section('contenido')
<div class="col-lg-4 mb-3">
    <div class="card info-card z-depth-0 p-2 pl-3 pr-3 mb-3">
        <span class="badge grey lighten-4 ml-3 mt-3 float-left z-depth-0">{{ Auth::user()->type }}</span>
        <div class="card-header mb-0 border-0 white d-flex justify-content-center">

            @if(Auth::user()->imagen == null)
                <div class="d-flex justify-content-center mb-2">
                    <div class="circle">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            @else
                <div class="avatar d-flex justify-content-center mb-3">
                    <img src="{{asset('dashboard/img/avatars/'.Auth::user()->imagen)}}" alt="avatar mx-auto white" class="img-fluid rounded-circle z-depth-0">
                </div>
            @endif
            
        </div>
        <div class="mt-3 text-center">
            <h4 class="title-card">{{ Auth::user()->name.' '.Auth::user()->lastname }}</h4>
            <p class="subtitle-card mb-2">{{ Auth::user()->calle.', '.Auth::user()->numero_calle }}</p>
            @if(Auth::user()->estado == 1)
                <p class="text-green generic-text">
                    <i class="fas fa-circle align-middle mr-1 conect-point"></i> Disponible
                </p>
            @else
                <p class="text-red generic-text">Ocupado</p>
            @endif
        </div>
    </div>
</div>
<div class="col-lg-8">
    <ul class="nav nav-tabs border-0" id="custom-profile-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#bodega" role="tab" aria-controls="home"
            aria-selected="true">Bodega</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#colaboradores" role="tab" aria-controls="profile"
            aria-selected="false">Colaboradores</a>
        </li>
    </ul>
    <div class="tab-content pl-0 pr-0" id="myTabContent">
        <div class="tab-pane fade show active" id="bodega" role="tabpanel" aria-labelledby="home-tab">
            <h1 class="title-card">Insumos criticos</h1>
        </div>
        <div class="tab-pane fade" id="colaboradores" role="tabpanel" aria-labelledby="profile-tab">
            <h1 class="title-card">Rendimiento</h1>
            <canvas id="myChart" style="width: 100%;"></canvas>
        </div>
    </div>
</div>
@endsection