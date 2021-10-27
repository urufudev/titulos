@extends('layouts.fullLayoutMaster')
{{-- page title --}}
@section('title','Coming Soon')

{{-- page scripts --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/coming-soon.css')}}">
@endsection

@section('content')
<!-- coming soon start -->
<section>
  <div class="row flexbox-container">
    <div class="col-md-6 col-12 text-center p-3">
      <h1 class="error-title mb-2">Sistema de Personal</h1>
      <p class="mb-1">:v </p>
      <div class="col-12">
        <!-- Buttons with Icon -->
        <a href="{{route('login')}}"  class="btn btn-primary mr-1 mb-1">
          <i class="bx bx-exit"></i>
          <span class="align-middle ml-25">Iniciar Sesión</span></a>
        <a href="{{route('register')}}"  class="btn btn-secondary mr-1 mb-1">
          <i class="bx bx-building"></i>
          <span class="align-middle ml-25"> Registrarse</span></a>
        
      </div>

    </div>
    <div class="col-md-6 d-lg-block d-none p-2">
      <img class="img-fluid cs-effect cs-effect-bounce" src="{{asset('images/pages/comingsoon.png')}}" alt="coming soon" width="650">
    </div>
  </div>
</section>
<!--/ coming soon end -->
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('vendors/js/coming-soon/jquery.countdown.min.js')}}"></script>
@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/pages/coming-soon.js')}}"></script>
@endsection