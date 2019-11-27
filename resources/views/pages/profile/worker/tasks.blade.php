@extends('layouts.dashboard')
@section('page-title', 'Calendario')
@section('title', 'Calendario')
@section('tareas', 'active-item')
@section('contenido')

<div class="col-lg-12">
    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}

</div>
@endsection