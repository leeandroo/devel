<div class="list-group mt-0" id="lista">
    <a href="{{ url('/user-profile') }}" class="list-item mt-1 p-0 @yield('dash')">
        <div class="list-mark float-left mr-4"></div>
        <i class="fas fa-chart-line ml-2 mr-4 fa-fw icono"></i>Dashboard
    </a>
    <a href="{{ url('/user-profile/control-citas') }}" class="list-item mt-1 p-0 @yield('citas')">
        <div class="list-mark float-left mr-4"></div>
        <i class="far fa-calendar-check ml-2 mr-4 fa-fw icono"></i>Control de citas
    </a>
    <a href="{{ url('/admin-profile/insumo') }}" class="list-item mt-1 p-0 @yield('bodega')">
        <div class="list-mark float-left mr-4"></div>
        <i class="far fa-gem ml-2 mr-4 fa-fw icono"></i>Bodega
    </a>
    <a href="#" class="list-item mt-1 p-0">
        <div class="list-mark float-left mr-4"></div>
        <i class="far fa-folder-open ml-2 mr-4 fa-fw icono"></i>Colaboradores 
    </a>
    <a href="#" class="list-item mt-1 p-0">
        <div class="list-mark float-left mr-4"></div>
        <i class="far fa-folder-open ml-2 mr-4 fa-fw icono"></i>Recursos humanos 
    </a>
</div>