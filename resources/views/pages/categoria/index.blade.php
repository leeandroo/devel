@extends('layouts.dashboard')
@section('page-title', 'Gestión de categorias')
@section('title', 'Bodega')
@section('bodega', 'active-item')
@section('contenido')

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

    <div>

        @include('pages.categoria.create')
    </div>

</div>
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
    <div class="card z-depth-0">
        <div class="card-body">
            <div class="container-fluid">
                <h1 class="title-card">Lista de Categorias</h1>
                <table class="table table-borderless table-responsive-sm ">
                    <thead>
                        <tr>
                            <th class="table-title">ID</th>
                            <th class="table-title">Nombre</th>
                            <!-- <th class="table-title">Categoria</th> -->
                            <th class="table-title">Descripción</th>
                            <th class="table-title">Opciones</th>
                        </tr>
                    </thead>
                    <tbody >
                            @foreach ($categorias as $categoria)
                                <tr>
                                    <th class="table-text align-baseline">{{ $categoria->id }} </th>
                                    <td class="table-text align-baseline">{{ $categoria->nombre }} </td>
                                    <td class="table-text align-baseline">{{ $categoria->descripcion }} </td>

                                    <td class="align-baseline">
                                            
                                            <a href="{{ URL::action('CategoriaController@edit', $categoria->id ) }}" class="btn cyan white-text" id="btn-aceptar">Editar</a> 
                                            <a href="" data-target="#modal-delete-{{$categoria->id}}" data-toggle="modal" class="btn red white-text" id="btn-aceptar">Eliminar</a>                                                                                                               
                                    </td>
                                </tr>
                            @include('pages.categoria.modal')
                            @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5"></td>
                        </tr>
                    </tfoot>    
                </table>              
            </div>
            {{ $categorias->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
</div>





@endsection 