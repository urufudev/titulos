

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
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hora"><i class="ficon bx bx-time"></i></a></li>

            <li class="nav-item d-none d-lg-block"><a class="nav-link fs-16">
              <div class="  font-medium-2" id="time"></div>  
            </a>
          </li>
            
          </ul>

        </div>
        
        <ul class="nav navbar-nav float-right">
      
          <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>

          </li>
          
          <li class="dropdown dropdown-user nav-item">
            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
              <div class="user-nav d-sm-flex d-none">
                <span class="user-name">{{ Auth::user()->name ?? 'Invitado'}} </span>
                {{-- <span class="user-status text-muted">Cargo :v</span> --}}
              </div>
              <span><img class="round" src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{ Auth::user()->name}}+{{ Auth::user()->ap_paterno}}" alt="avatar" height="40" width="40"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right pb-0">
              
              
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"><i class="bx bx-power-off mr-50"></i> Salir
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
