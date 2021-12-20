{{-- vertical-menu --}}
@if($configData['mainLayoutType'] == 'vertical-menu')
<div class="main-menu menu-fixed @if($configData['theme'] === 'light') {{"menu-light"}} @else {{'menu-dark'}} @endif menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
      <li class="nav-item mr-auto">
          <a class="navbar-brand" href="{{asset('/')}}">
          <div class="brand-logo">
            <img src="{{asset('images/logo/logo.png')}}" class="logo" alt="">
          </div>
          <h2 class="brand-text mb-0">
            @if(!empty($configData['templateTitle']) && isset($configData['templateTitle']))
            {{$configData['templateTitle']}}
            @else
            DREA
            @endif
          </h2>
          </a>
      </li>
          <li class="nav-item nav-toggle">
          <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
            <i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i>
            <i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i>
          </a>
          </li>
      </ul>
      </div>
      
      {{-- card sidebar --}}
      {{-- <div class="d-flex justify-content-center">
        <div class="avatar bg-rgba-primary p-50">
          <img class="img-fluid" src="https://www.pixinvent.com/demo/frest-bootstrap-laravel-admin-dashboard-template/demo-1/images/portrait/small/avatar-s-20.jpg" width="80" height="80" alt="avtar img holder">
          <span class="avatar-status-online"></span>
        </div>
      </div>
      <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
              
            <li class="nav-item">
              <a class="text-center">
                           
                <h5 class="brand-text ">{{ Auth::user()->full_namea}}</h5>
                <span class="brand-text">SOPORTE TÉCNICO PAD</span>
              </a>
            </li>
          </ul>
            
          </div> --}}
      <header class="chat-user-profile-header text-center">
        <div class="my-2">
          <div class="avatar avatar-content bg-rgba-primary p-50">
            <img class="img-fluid" src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{ Auth::user()->name}}+{{ Auth::user()->ap_paterno}}" width="80" height="80" alt="user_avatar" >
            <span class="avatar-status-online"></span>
          </div>
          <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
              
            <li class="nav-item">
              <a class="text-center">
                           
                <h5 class="brand-text ">{{ Auth::user()->full_namea ?? 'Invitado'}}</h5>
                {{-- <span class="brand-text">SOPORTE TÉCNICO PAD</span> --}}
              </a>
            </li>
          </ul>
            
          </div>
          
        </div>
      </header>
      <div class="divider divider-light">
        <div class="divider-text">
          <i class="bx bxs-dashboard"></i>
        </div>
      </div>
      {{-- card sidebar --}}
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
          
        <li class="navigation-header"><span>Inicio</span></li>
        <li class="nav-item {{(request()->is('dashboard'.'*')) ? 'active' : '' }}">
          <a href="{{asset('/dashboard')}}  ">
            <i class="menu-livicon" data-icon="cpu"></i>                   
          <span class="menu-title">Inicio</span>
          </a>
        </li>
        <li class="navigation-header"><span>Parametros</span></li>
{{--         @can('viewAny', 'Models\Office')
        <li class="nav-item  ">
          <a href="http://10.15.1.250:8000/dashboard ">
            <i class="menu-livicon" data-icon="building"></i>                   
            <span class="menu-title">Oficinas</span>
          </a>
          <ul class="menu-content">
            @can('create', 'Models\Office')
                <li {{(request()->is('offices/create')) ? 'class=active' : '' }}>
                  <a href="{{route('offices.create')}}">
                    <i class="bx bx-right-arrow-alt"></i>
                  <span class="menu-item">Crear Oficina</span>
                  </a>
                </li>
                @endcan
                @can('viewAny', 'Models\Office')
                <li {{(request()->is('offices')) ? 'class=active' : '' }}>
                  <a href="{{route('offices.index')}}">
                    <i class="bx bx-right-arrow-alt"></i>
                  <span class="menu-item">Lista de Oficinas</span>
                  </a>
                </li>
                @endcan
          </ul>
        </li>
        @endcan --}}
        @can('viewAny', 'Models\User')
        <li class="nav-item  ">
          <a href="#">
            <i class="menu-livicon" data-icon="users"></i>                   
            <span class="menu-title">Usuarios</span>
          </a>
          <ul class="menu-content">
              @can('create', 'Models\User')
                <li {{(request()->is('users/create')) ? 'class=active' : '' }}>
                  <a href="{{route('users.create')}}">
                    <i class="bx bx-right-arrow-alt"></i>
                  <span class="menu-item">Crear Usuario</span>
                  </a>
                </li>
                @endcan
                @can('viewAny', 'Models\User')
                <li {{(request()->is('users')) ? 'class=active' : '' }}>
                  <a href="{{route('users.index')}}">
                    <i class="bx bx-right-arrow-alt"></i>
                  <span class="menu-item">Lista de Usuarios</span>
                  </a>
                </li>
                @endcan
          </ul>
        </li>
        @endcan
        @can('viewAny', 'Models\Institute')
        <li class="nav-item  ">
          <a href="#">
            <i class="menu-livicon" data-icon="briefcase"></i>                   
            <span class="menu-title">Institutos</span>
          </a>
          <ul class="menu-content">
              @can('create', 'Models\Institute')
                <li {{(request()->is('institutes/create')) ? 'class=active' : '' }}>
                  <a href="{{route('institutes.create')}}">
                    <i class="bx bx-right-arrow-alt"></i>
                  <span class="menu-item">Crear Instituto</span>
                  </a>
                </li>
                @endcan
                @can('viewAny', 'Models\Institute')
                <li {{(request()->is('institutes')) ? 'class=active' : '' }}>
                  <a href="{{route('institutes.index')}}">
                    <i class="bx bx-right-arrow-alt"></i>
                  <span class="menu-item">Lista de Institutos</span>
                  </a>
                </li>
                @endcan
          </ul>
        </li>
        @endcan

        @can('viewAny', 'Models\Student')
        <li class="nav-item  ">
          <a href="#">
            <i class="menu-livicon" data-icon="briefcase"></i>                   
            <span class="menu-title">Estudiantes</span>
          </a>
          <ul class="menu-content">
              @can('create', 'Models\Student')
                <li {{(request()->is('students/create')) ? 'class=active' : '' }}>
                  <a href="{{route('students.create')}}">
                    <i class="bx bx-right-arrow-alt"></i>
                  <span class="menu-item">Crear Estudiantes</span>
                  </a>
                </li>
                @endcan
                @can('viewAny', 'Models\Student')
                <li {{(request()->is('students')) ? 'class=active' : '' }}>
                  <a href="{{route('students.index')}}">
                    <i class="bx bx-right-arrow-alt"></i>
                  <span class="menu-item">Lista de Estudiantes</span>
                  </a>
                </li>
                @endcan
                <li {{(request()->is('students.import.index')) ? 'class=active' : '' }}>
                  <a href="{{route('students.import.index')}}">
                    <i class="bx bx-right-arrow-alt"></i>
                  <span class="menu-item">Importar Estudiantes</span>
                  </a>
                </li>
              
          </ul>
        </li>
        @endcan
        
{{-- 
        @can('viewAny', 'Models\Pension')
        <li class="nav-item  ">
          <a href="#">
            <i class="menu-livicon" data-icon="piggybank"></i>                   
            <span class="menu-title">Régimen Pensionario</span>
          </a>
          <ul class="menu-content">
              @can('create', 'Models\Pension')
                <li {{(request()->is('pensions/create')) ? 'class=active' : '' }}>
                  <a href="{{route('pensions.create')}}">
                    <i class="bx bx-right-arrow-alt"></i>
                  <span class="menu-item">Crear R. Pensionario</span>
                  </a>
                </li>
                @endcan
                @can('viewAny', 'Models\Pension')
                <li {{(request()->is('pensions')) ? 'class=active' : '' }}>
                  <a href="{{route('pensions.index')}}">
                    <i class="bx bx-right-arrow-alt"></i>
                  <span class="menu-item">Lista de R. Pensionario</span>
                  </a>
                </li>
                @endcan
          </ul>
        </li>
        @endcan

        @can('viewAny', 'Models\Condition')
        <li class="nav-item  ">
          <a href="#">
            <i class="menu-livicon" data-icon="settings"></i>                   
            <span class="menu-title">Condicion Laboral</span>
          </a>
          <ul class="menu-content">
              @can('create', 'Models\Condition')
                <li {{(request()->is('conditions/create')) ? 'class=active' : '' }}>
                  <a href="{{route('conditions.create')}}">
                    <i class="bx bx-right-arrow-alt"></i>
                  <span class="menu-item">Crear C. Laboral</span>
                  </a>
                </li>
                @endcan
                @can('viewAny', 'Models\Condition')
                <li {{(request()->is('conditions')) ? 'class=active' : '' }}>
                  <a href="{{route('conditions.index')}}">
                    <i class="bx bx-right-arrow-alt"></i>
                  <span class="menu-item">Lista de C. Laboral</span>
                  </a>
                </li>
                @endcan
          </ul>
        </li>
        @endcan

        @can('viewAny', 'Models\Position')
        <li class="nav-item  ">
          <a href="#">
            <i class="menu-livicon" data-icon="grid"></i>                   
            <span class="menu-title">Cargos</span>
          </a>
          <ul class="menu-content">
              @can('create', 'Models\Position')
                <li {{(request()->is('positions/create')) ? 'class=active' : '' }}>
                  <a href="{{route('positions.create')}}">
                    <i class="bx bx-right-arrow-alt"></i>
                  <span class="menu-item">Crear Cargo</span>
                  </a>
                </li>
                @endcan
                @can('viewAny', 'Models\Position')
                <li {{(request()->is('positions')) ? 'class=active' : '' }}>
                  <a href="{{route('positions.index')}}">
                    <i class="bx bx-right-arrow-alt"></i>
                  <span class="menu-item">Lista de Cargos</span>
                  </a>
                </li>
                @endcan
          </ul>
        </li>
        @endcan --}}

        @can('viewAny', 'Models\Role')
        <li class="nav-item  ">
          <a href="#">
            <i class="menu-livicon" data-icon="diagram"></i>                   
            <span class="menu-title">Roles</span>
          </a>
          <ul class="menu-content">
              @can('create', 'Models\Role')
                <li {{(request()->is('roles/create')) ? 'class=active' : '' }}>
                  <a href="{{route('roles.create')}}">
                    <i class="bx bx-right-arrow-alt"></i>
                  <span class="menu-item">Crear Rol</span>
                  </a>
                </li>
                @endcan
                @can('viewAny', 'Models\Role')
                <li {{(request()->is('roles')) ? 'class=active' : '' }}>
                  <a href="{{route('roles.index')}}">
                    <i class="bx bx-right-arrow-alt"></i>
                  <span class="menu-item">Lista de Roles</span>
                  </a>
                </li>
                @endcan
          </ul>
        </li>
        @endcan

      </ul>
      </div>
  </div>
@endif
{{-- horizontal-menu --}}
@if($configData['mainLayoutType'] == 'horizontal-menu')
<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-light navbar-without-dd-arrow
@if($configData['navbarType'] === 'navbar-static') {{'navbar-sticky'}} @endif" role="navigation" data-menu="menu-wrapper">
  <div class="navbar-header d-xl-none d-block">
      <ul class="nav navbar-nav flex-row">
      <li class="nav-item mr-auto">
          <a class="navbar-brand" href="{{asset('/')}}">
          <div class="brand-logo">
            <img src="{{asset('images/logo/logo.png')}}" class="logo" alt="">
          </div>
          <h2 class="brand-text mb-0">
            @if(!empty($configData['templateTitle']) && isset($configData['templateTitle']))
            {{$configData['templateTitle']}}
            @else
            Frest
            @endif
          </h2>
          </a>
      </li>
      <li class="nav-item nav-toggle">
          <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
          <i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
          </a>
      </li>
      </ul>
  </div>
  <div class="shadow-bottom"></div>
  <!-- Horizontal menu content-->
  <div class="navbar-container main-menu-content" data-menu="menu-container">
      <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="filled">

        <li class=" nav-item" >
          <a class=" nav-link" href="{{URL('')}}" >
            <i class="menu-livicon" data-icon="home"></i>
            <span>Inicio</span>
          </a>
        </li>

        <li class="nav-item {{(request()->is('dashboard'.'*')) ? 'active' : '' }}">
          <a class=" nav-link" href="{{URL('')}}" >
            <i class="menu-livicon" data-icon="cpu"></i>                   
          <span class="menu-title">Inicio</span>
          </a>
        </li>

        

        <li class="dropdown nav-item" data-menu="dropdown">
          <a class="dropdown-toggle nav-link" href="index.html" data-toggle="dropdown">
            <i class="menu-livicon" data-icon="diagram"></i>
            <span>Inicio</span>
          </a>
          <ul class="dropdown-menu">
            <li data-menu=""><a class="dropdown-item align-items-center" href="dashboard-ecommerce.html" data-toggle="dropdown">
              <i class="bx bx-right-arrow-alt"></i><span data-i18n="eCommerce">eCommerce</span></a>
            </li>
            <li data-menu=""><a class="dropdown-item align-items-center" href="dashboard-analytics.html" data-toggle="dropdown">
              <i class="bx bx-right-arrow-alt"></i><span data-i18n="Analytics">Analytics</span></a>
            </li>
          </ul>
        </li>

      </ul>
  </div>
  <!-- /horizontal menu content-->
  </div>
@endif

{{-- vertical-box-menu --}}
@if($configData['mainLayoutType'] == 'vertical-menu-boxicons')
<div class="main-menu menu-fixed @if($configData['theme'] === 'light') {{"menu-light"}} @else {{'menu-dark'}} @endif menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
    <li class="nav-item mr-auto">
      <a class="navbar-brand" href="{{asset('/')}}">
        <div class="brand-logo">
          <img src="{{asset('images/logo/logo.png')}}" class="logo" alt="">
        </div>
        <h2 class="brand-text mb-0">
          @if(!empty($configData['templateTitle']) && isset($configData['templateTitle']))
          {{$configData['templateTitle']}}
          @else
          Frest
          @endif
        </h2>
      </a>
    </li>
    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="bx-disc"></i></a></li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">
      @if(!empty($menuData[2]) && isset($menuData[2]))
      @foreach ($menuData[2]->menu as $menu)
          @if(isset($menu->navheader))
              <li class="navigation-header"><span>{{$menu->navheader}}</span></li>
          @else
          <li class="nav-item {{(request()->is($menu->url.'*')) ? 'active' : '' }}">
            <a href="@if(isset($menu->url)){{asset($menu->url)}} @endif" @if(isset($menu->newTab)){{"target=_blank"}}@endif>
            @if(isset($menu->icon))
              <i class="{{$menu->icon}}"></i>
            @endif
            @if(isset($menu->name))
              <span class="menu-title">{{ $menu->name}}</span>
            @endif
            @if(isset($menu->tag))
              <span class="{{$menu->tagcustom}}">{{$menu->tag}}</span>
            @endif
           </a>
          @if(isset($menu->submenu))
            @include('panels.sidebar-submenu',['menu' => $menu->submenu])
          @endif
          </li>
          @endif
      @endforeach
      @endif
  </ul>
  </div>
</div>
@endif
