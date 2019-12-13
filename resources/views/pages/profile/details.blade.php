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
        <div class="mt-3 text-center">
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
                    <h1 class="info-card-title mb-2 text-left">Hora de atención</h1>
                    <p class="info-card-text mb-0">
                        <i class="far fa-clock mr-2"></i>{{ $cita->hora_inicio.' - '.$cita->hora_termino }}
                    </p>
                </div>
                
            </div>
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

    </ul>
    <div class="tab-content pl-0 pr-0" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="card-header white border-0 pl-5 pr-5 pt-4 pb-1">
                <a class="btn btn-success btn-sm btn-rounded m-0 float-right" data-toggle="modal" data-target="#modalSupplies" >
                    <i class="fas fa-plus"></i> Agregar insumo
                </a>
                <h1 class="title-card mt-2 mb-4">Materiales</h1>
            </div>
            <div class="card">
                <div class="card-body">
                    @if($cita->insumos->count() > 0)
                    <table class="table table-responsive-sm ">
                        <thead>
                            <tr>
                                <th class="table-title">Insumo</th>
                                <th class="table-title">Cantidad</th>
                                <th class="table-title">Precio </th>
                                <th class="table-title">Costo final </th>
                                <th class="table-title">Opciones </th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cita->insumos as $insumo)
                                <tr>
                                    <td class="table-text align-baseline">{{ $insumo->nombre }}</td>
                                    <td class="table-text align-baseline">{{ $insumo->cantidad }}</td>
                                    <td class="table-text align-baseline">{{ $insumo->precio}}</td>
                                    <td class="table-text align-baseline">{{ $insumo->precio*$insumo->cantidad}}</td>
                                    <td colspan="5" class="table-text align-baseline">
                                        <a href="{{ url("/eliminar/insumos/{$cita->id}") }}" class="btn btn-sm danger-color white-text">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <blockquote class="blockquote bq-warning">
                            <p class="bq-title">No se han agregado insumos</p>
                            <p>
                                Despues de realizar su solicitud estas quedan pendientes de su confirmación y que se les asigne personal, fechas y horarios.
                            </p>
                        </blockquote>
                    @endif
                </div>
            </div>
            @include('pages.agenda.supplies')
        </div>

    </div>
</div>

@endsection