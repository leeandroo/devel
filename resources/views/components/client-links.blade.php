<div class="list-group mt-0" id="lista">
    <a href="{{ url('/user-profile') }}" class="list-item mt-1 p-0 @yield('perfil')">
        <div class="list-mark float-left mr-4"></div>
        <i class="far fa-user ml-2 mr-4 fa-fw icono"></i>Perfil
    </a>
      <a href="#" class="list-item mt-1 p-0">
        <div class="list-mark float-left mr-4"></div>
        <i class="far fa-edit ml-2 mr-4 fa-fw icono"></i>Actualizar datos
    </a>
    <a href="{{ url('/user-profile/mis-citas') }}" class="list-item mt-1 p-0 @yield('citas')">
        <div class="list-mark float-left mr-4"></div>
        <i class="far fa-calendar-check ml-2 mr-4 fa-fw icono"></i>Mis citas
    </a>
    <a href="#" class="list-item mt-1 p-0">
        <div class="list-mark float-left mr-4"></div>
        <i class="far fa-folder-open ml-2 mr-4 fa-fw icono"></i>Historial  
    </a>
    <a href="#" class="list-item mt-1 p-0">
        <div class="list-mark float-left mr-4"></div>
        <i class="far fa-list-alt ml-2 mr-4 fa-fw icono"></i>Cotizar servicios 
    </a>
    <a href="#" class="list-item mt-1 p-0">
        <div class="list-mark float-left mr-4"></div>
        <i class="fas fa-search ml-2 mr-4 fa-fw icono"></i>Explorar 
    </a>
</div>