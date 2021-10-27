<!DOCTYPE html>
<html lang="es">
   <!-- Mirrored from ui8-unity.herokuapp.com/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Apr 2021 16:01:32 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
   <head>
      <meta charset="utf-8">
      <title>@yield('title')</title>
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
      <meta name="format-detection" content="telephone=no">
      <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
      <link rel="manifest" href="img/site.html">
      <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="theme-color" content="#ffffff">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,500;1,500&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" media="all" href="{{asset('frontend/css/app.css')}}">
      @livewireStyles
      <script>var viewportmeta = document.querySelector('meta[name="viewport"]');
         if (viewportmeta) {
           if (screen.width < 375) {
             var newScale = screen.width / 375;
             viewportmeta.content = 'width=375, minimum-scale=' + newScale + ', maximum-scale=1.0, user-scalable=no, initial-scale=' + newScale + '';
           } else {
             viewportmeta.content = 'width=device-width, maximum-scale=1.0, initial-scale=1.0';
           }
         }
      </script>
   </head>
   <body>
      <script>console.log(localStorage.getItem('darkMode'));
         if (localStorage.getItem('darkMode') === "on") {
         		document.body.classList.add("dark");
         		document.addEventListener("DOMContentLoaded", function() {
         		  document.querySelector('.js-switch-theme input').checked = true;
         		});
         }
      </script>
      <div class="page">
         <div class="sidebar">
            <div class="sidebar__top">
               <button class="sidebar__close">
                  <svg class="icon icon-close">
                     <use xlink:href="{{asset('frontend/img/sprite.svg#icon-close')}}"></use>
                  </svg>
               </button>
               <a class="sidebar__logo" href="index.html"><img class="sidebar__pic sidebar__pic_black" src="{{asset('frontend/img/logo.png')}}" alt="" /><img class="sidebar__pic sidebar__pic_white" src="{{asset('frontend/img/logo-white.png')}}" alt="" /></a><button class="sidebar__burger"></button>
            </div>
            <div class="sidebar__wrapper">
               <div class="sidebar__inner">
                  <a class="sidebar__logo" href="index.html"><img class="sidebar__pic" src="{{asset('frontend/img/logo-sm.png')}}" alt="" /></a>
                  <div class="sidebar__list">
                     <div class="sidebar__group">
                        <div class="sidebar__caption caption-sm">Admin<span> tools</span></div>
                        <div class="sidebar__menu">
                           <a class="sidebar__item" href="index.html">
                              <div class="sidebar__icon">
                                 <svg class="icon icon-overview">
                                    <use xlink:href="{{asset('frontend/img/sprite.svg#icon-overview')}}"></use>
                                 </svg>
                              </div>
                              <div class="sidebar__text">Pagina DREA</div>
                           </a>
                           <a class="sidebar__item active" href="products.html">
                              <div class="sidebar__icon">
                                 <svg class="icon icon-bag">
                                    <use xlink:href="{{asset('frontend/img/sprite.svg#icon-bag')}}"></use>
                                 </svg>
                              </div>
                              <div class="sidebar__text">Consulta de Titulos</div>
                           </a>
                           <a class="sidebar__item" href="campaigns.html">
                              <div class="sidebar__icon">
                                 <svg class="icon icon-chart">
                                    <use xlink:href="{{asset('frontend/img/sprite.svg#icon-chart')}}"></use>
                                 </svg>
                              </div>
                              <div class="sidebar__text">Institutos</div>
                           </a>
                           <a class="sidebar__item" href="schedules.html">
                              <div class="sidebar__icon">
                                 <svg class="icon icon-discovery">
                                    <use xlink:href="{{asset('frontend/img/sprite.svg#icon-discovery')}}"></use>
                                 </svg>
                              </div>
                              <div class="sidebar__text">Nosotros</div>
                           </a>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </div>
            <div class="sidebar__bottom">
               <label class="switch switch_theme js-switch-theme">
                  <input class="switch__input" type="checkbox" />
                  <span class="switch__in">
                     <span class="switch__box"></span>
                     <span class="switch__icon">
                        <svg class="icon icon-moon">
                           <use xlink:href="{{asset('frontend/img/sprite.svg#icon-moon')}}"></use>
                        </svg>
                        <svg class="icon icon-sun">
                           <use xlink:href="{{asset('frontend/img/sprite.svg#icon-sun')}}"></use>
                        </svg>
                     </span>
                  </span>
               </label>
            </div>
         </div>
         <div class="page__wrapper">
            <div class="page__center">
                @yield('content')
            </div>
         </div>
      </div>
      
      <!-- scripts-->
      <script src="{{asset('frontend/js/lib/jquery.min.js')}}"></script>
      <script src="{{asset('frontend/js/lib/owl.carousel.min.js')}}"></script>
      <script src="{{asset('frontend/js/lib/svg4everybody.min.js')}}"></script>
      <script src="{{asset('frontend/js/lib/apexcharts.min.js')}}"></script>
      <script src="{{asset('frontend/js/lib/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{asset('frontend/js/app.js')}}"></script>
      <script src="{{asset('frontend/js/charts.js')}}"></script>
      @livewireScripts
   </body>
</html>