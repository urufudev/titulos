

{{-- navabar  --}}
<div class="header-navbar-shadow"></div>
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu 
@if(isset($configData['navbarType'])){{$configData['navbarClass']}} @endif" 
data-bgcolor="@if(isset($configData['navbarBgColor'])){{$configData['navbarBgColor']}}@endif">
  <div class="navbar-wrapper">
    <div class="navbar-container content">
      <div class="navbar-collapse" id="navbar-mobile">
        <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon bx bx-menu"></i></a></li>
          </ul>
          <ul class="nav navbar-nav bookmark-icons">
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="https://www.pixinvent.com/demo/frest-bootstrap-laravel-admin-dashboard-template/demo-1/app-email" data-toggle="tooltip" data-placement="top" title="" data-original-title="Email"><i class="ficon bx bx-envelope"></i></a></li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="https://www.pixinvent.com/demo/frest-bootstrap-laravel-admin-dashboard-template/demo-1/app-chat" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat"><i class="ficon bx bx-chat"></i></a></li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="https://www.pixinvent.com/demo/frest-bootstrap-laravel-admin-dashboard-template/demo-1/app-todo" data-toggle="tooltip" data-placement="top" title="" data-original-title="Todo"><i class="ficon bx bx-check-circle"></i></a></li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="https://www.pixinvent.com/demo/frest-bootstrap-laravel-admin-dashboard-template/demo-1/app-calendar" data-toggle="tooltip" data-placement="top" title="" data-original-title="Calendar"><i class="ficon bx bx-calendar-alt"></i></a></li>
          
            <li class="nav-item d-none d-lg-block"><a class="nav-link fs-16">
              <div class="  font-medium-2" id="time"></div>  
            </a>
          </li>
            
          </ul>
          <ul class="nav navbar-nav">
            <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon bx bx-star warning"></i></a>
              <div class="bookmark-input search-input">
                <div class="bookmark-input-icon"><i class="bx bx-search primary"></i></div>
                <input class="form-control input" type="text" placeholder="Explore Frest..." tabindex="0" data-search="template-search">
                <ul class="search-list"></ul>
              </div>
            </li>
          </ul>
        </div>
        
        <ul class="nav navbar-nav float-right">
      
          <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
          <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
            <div class="search-input">
              <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
              <input class="input" type="text" placeholder="Buscar..." tabindex="-1" data-search="template-search">
              <div class="search-input-close"><i class="bx bx-x"></i></div>
              <ul class="search-list"></ul>
            </div>
          </li>
          
          <li class="dropdown dropdown-user nav-item">
            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
              <div class="user-nav d-sm-flex d-none">
                <span class="user-name">{{ Auth::user()->name ?? 'Invitado'}} </span>
                <span class="user-status text-muted">Cargo :v</span>
              </div>
              <span><img class="round" src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{ Auth::user()->name}}+{{ Auth::user()->ap_paterno}}" alt="avatar" height="40" width="40"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right pb-0">
              <a class="dropdown-item" href="#">
                <i class="bx bx-user mr-50"></i> PERFIL
              </a>
              <a class="dropdown-item" href="{{asset('app-email')}}">
                <i class="bx bx-envelope mr-50"></i> My Inbox
              </a>
              <a class="dropdown-item" href="{{asset('app-todo')}}">
                <i class="bx bx-check-square mr-50"></i> Task</a>
                <a class="dropdown-item" href="{{asset('app-chat')}}"><i class="bx bx-message mr-50"></i> Chats
              </a>
              <div class="dropdown-divider mb-0"></div>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"><i class="bx bx-power-off mr-50"></i> Logout
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form> 
            </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
