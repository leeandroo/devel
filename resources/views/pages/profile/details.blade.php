@extends('layouts.dashboard')
@section('page-title', 'Detalles')
@section('title', 'Detalle de cita')
@section('tareas','active-item')
@section('contenido')
<div class="col-lg-4 mb-3">
    <div class="card info-card z-depth-0 p-2 pl-3 pr-3 mb-3">
        <span class="badge grey lighten-4 ml-3 mt-3 float-left z-depth-0">{{ $cita->user->type }}</span>
        <div class="card-header mb-0 border-0 white d-flex justify-content-center">

            @if($cita->user->imagen == null)
                <div class="d-flex justify-content-center mb-4">
                    <div class="circle">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            @else
                <div class="avatar d-flex justify-content-center">
                    <img src="{{asset('dashboard/img/avatars/'.$cita->user->imagen)}}" alt="avatar mx-auto white" class="img-fluid rounded-circle z-depth-0">
                </div>
            @endif
            
        </div>
        <div class="mt-3 mb-3 text-center">
            <h4 class="title-card">{{ $cita->user->name.' '.$cita->user->lastname }}</h4>
            <p class="subtitle-card mb-2">{{ $cita->user->calle.', '.$cita->user->numero_calle }}</p>
            @if($cita->estado_whatsapp == 1)
                <p class="text-green generic-text">
                    <i class="fas fa-circle align-middle mr-1 conect-point"></i> WhatsApp disponible
                </p>
            @else
                <p class="text-red generic-text">WhatsApp inhabilitado</p>
            @endif
        </div>
        <div class="card-footer white border-0 mt-0">
            <div id="btn-date">
                <a type="button" class="btn btn-block info-color white-text z-depth-0" href="{{ url('/descargar/'.$cita->id) }}">
                    Descargar OT <i class="fas fa-download ml-2 fa-fw"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-8">
    <ul class="nav nav-tabs border-0" id="custom-profile-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">Información</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
            aria-selected="false">Detalle de atención</a>
        </li>
    </ul>
    <div class="tab-content pl-0 pr-0" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h1 class="title-card mt-2 mb-4">Servicio</h1>
            
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Food truck fixie
            locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit,
            blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
            Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum
            PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS
            salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit,
            sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester
            stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.
        </div>
    </div>
</div>

@endsection