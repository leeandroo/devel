@extends('layouts.dashboard')
@section('page-title', 'Gestión de Bodega')
@section('title', 'Bodega')
@section('bodega', 'active-item')

@section('buscador')
<div class="col-lg-12">
    @include('pages.insumo.searchInsumo')
</div>
@endsection

@section('boton-agregar')
<a class="btn btn-success btn-sm btn-rounded m-0 float-right" href="{{ url('/admin-profile/create') }}">
    <i class="fas fa-plus"></i> Nuevo insumo
</a>
@endsection

@section('contenido')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
    <div class="card z-depth-0">
        <div class="card-header white border-0 pl-5 pr-5 pt-4 pb-4">
            <a class="btn btn-success btn-sm btn-rounded m-0 float-right" href="{{ url('/admin-profile/create') }}">
                <i class="fas fa-plus"></i> Nuevo insumo
            </a>
            <p class="title-card mb-3">Lista de insumos</p>

        </div>
        <div class="card-body">
            <table class="table table-borderless table-responsive-sm text-center ">
                <thead>
                    <tr>
                        <th class="table-title">Código</th>
                        <th class="table-title">Nombre</th>
                        <th class="table-title">Cantidad</th>
                        <th class="table-title">Precio</th>
                        <th class="table-title">Descripción</th>
                        <th class="table-title">Opciones</th>
                    </tr>
                <tbody class="text-center">
                        @foreach ($insumos as $insumo)
                            <tr>
                                <td class="table-text align-baseline" style="width: 100px">{{ $insumo->codigo }} </td>
                                <td class="table-text align-baseline">{{ $insumo->nombre }} </td>      
                                <td class="table-text align-baseline">{{ $insumo->stock }} </td>
                                <td class="table-text align-baseline">{{ $insumo->precio }} </td>
                                <td class="table-text align-baseline">{{ $insumo->descripcion }} </td>
                                <td class="align-baseline" id="">
                                <a href="{{ URL::action('InsumoController@edit', $insumo->id ) }}" class="btn btn-sm btn-rounded cyan white-text mb-2">
                                    <i class="far fa-edit"></i>
                                </a> 
                                <a href="" data-target="#modal-delete-{{$insumo->id}}" data-toggle="modal" class="btn btn-sm btn-rounded danger-color white-text mb-2">
                                    <i class="far fa-trash-alt"></i> 
                                </a> 
                                </td>
                            </tr>
                        @include('pages.insumo.modal')
                        @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5"></td>
                    </tr>
                </tfoot>    
            </table> 
            {{ $insumos->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
</div>

@endsection 