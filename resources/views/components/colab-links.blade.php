<div class="list-group mt-0" id="lista">
    <a href="{{ url('/user-profile') }}" class="list-item mt-1 p-0 @yield('perfil')">
        <div class="list-mark float-left mr-4"></div>
        <i class="far fa-user ml-2 mr-4 fa-fw icono"></i>Mis datos
    </a>
      <a href="#" class="list-item mt-1 p-0">
        <div class="list-mark float-left mr-4"></div>
        <i class="fas fa-chart-line ml-2 mr-4 fa-fw icono"></i>Valoraciones
    </a>
    <a href="{{ url('/user-profile/tareas') }}" class="list-item mt-1 p-0 @yield('tareas')">
        <div class="list-mark float-left mr-4"></div>
        <i class="far fa-calendar-check ml-2 mr-4 fa-fw icono"></i>Servicios asignados
    </a>
    <a href="#" class="list-item mt-1 p-0">
    <div class="list-mark float-left mr-4"></div>
        <i class="far fa-gem ml-2 mr-4 fa-fw icono"></i>Calendario
    </a>
    <a href="#" class="list-item mt-1 p-0">
        <div class="list-mark float-left mr-4"></div>
        <i class="far fa-folder-open ml-2 mr-4 fa-fw icono"></i>Documentos 
    </a>
    <a href="#" class="list-item mt-1 p-0">
        <div class="list-mark float-left mr-4"></div>
        <i class="fas fa-search ml-2 mr-4 fa-fw icono"></i>Equipo 
    </a>
</div>