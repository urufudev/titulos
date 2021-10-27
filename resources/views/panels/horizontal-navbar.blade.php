<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-brand-center @if($configData['navbarBgColor'] !== 'bg-white' )) {{$configData['navbarBgColor']}} @else {{'bg-primary'}} @endif
@if($configData['navbarType'] === 'navbar-static') {{'navbar-static-top'}} @else {{'fixed-top'}} @endif
@if($configData['theme'] === 'light') {{"menu-light"}} @else {{'menu-dark'}} @endif">
  <div class="navbar-header d-xl-block d-none">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item">
      <a class="navbar-brand" href="{{asset('/')}}">
          <div class="brand-logo">
          <img src="{{asset('images/logo/logo-light.png')}}" class="logo" alt="">
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
    </ul>
  </div>
  <div class="navbar-wrapper">
    <div class="navbar-container content">
      <div class="navbar-collapse" id="navbar-mobile">
        <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu mr-auto"><a class="nav-link nav-menu-main menu-toggle" href="#"><i class="bx bx-menu"></i></a></li>
          </ul>
          
          
        </div>
        <ul class="nav navbar-nav float-right d-flex align-items-center">
          
          <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>


          {{-- <li class="dropdown dropdown-user nav-item">
            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
              <div class="user-nav d-lg-flex d-none">
                <span class="user-name">John Doe</span><span class="user-status">Available</span>
              </div>
              <span><img class="round" src="{{asset('images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right pb-0">
              <a class="dropdown-item" href="{{asset('page-user-profile')}}"><i class="bx bx-user mr-50"></i> Edit Profile</a>
              <a class="dropdown-item" href="{{asset('app-email')}}"><i class="bx bx-envelope mr-50"></i> My Inbox</a>
              <a class="dropdown-item" href="{{asset('app-todo')}}"><i class="bx bx-check-square mr-50"></i> Task</a>
              <a class="dropdown-item" href="{{asset('app-chat')}}"><i class="bx bx-message mr-50"></i> Chats</a>
              <div class="dropdown-divider mb-0"></div>
              <a class="dropdown-item" href="{{asset('auth-login')}}"><i class="bx bx-power-off mr-50"></i> Logout</a>
            </div>
          </li> --}}
        </ul>
      </div>
    </div>
  </div>
</nav>
