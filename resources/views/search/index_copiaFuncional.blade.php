@extends('layouts.frontend.front')

@section('title','Consulta de Titulos DREA')

@section('content')
<div class="page__row page__row_head">
  <div class="page__col">
     <div class="page__hello h5">Hola,</div>
     <div class="page__welcome h2">Bienvenido de nuevo 👋</div>
  </div>
  <div class="page__col">
     <div class="header">
        <button class="header__burger"></button>
        <div class="search">
           <div class="search__field">
              <input class="search__input" type="text" disabled />
              <button class="search__toggle">
                 {{-- <svg class="icon icon-search">
                    <use xlink:href="{{asset('frontend/img/sprite.svg#icon-search')}}"></use>
                 </svg>
                 <svg class="icon icon-close">
                    <use xlink:href="{{asset('frontend/img/sprite.svg#icon-close')}}"></use>
                 </svg> --}}
              </button>
           </div>
        </div>
        {{-- <button class="header__search">
           <svg class="icon icon-search">
              <use xlink:href="{{asset('frontend/img/sprite.svg#icon-search')}}"></use>
           </svg>
        </button> --}}
        <div class="notifications">
           {{-- <button class="notifications__open">
              <svg class="icon icon-bell">
                 <use xlink:href="{{asset('frontend/img/sprite.svg#icon-bell')}}"></use>
              </svg>
              <span class="notifications__counter">2</span>
           </button> --}}
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
        {{-- <a class="header__user" href="#">
           <img class="header__pic" src="{{asset('frontend/img/ava.png')}}" alt="" />
         </a> --}}
     </div>
  </div>
</div>
<div class="page__content">
  <div class="banner">
     <div class="banner__container">
        <div class="banner__preview" >
          <img class="banner__pic"  src="{{asset('frontend/img/buho.svg')}}" alt="">
        </div>
        <div class="banner__wrap">
           <div class="banner__title h3">REGISTRO DE TÍTULOS PROFESIONALES</div>
           <div class="banner__text">Complete los campos de Tipo de Documento y Numero de Documento para
            realizar la busqueda. </div>
        </div>
     </div>
  </div>


     <livewire:students.search/>	

</div>
@endsection
