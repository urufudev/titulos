@extends('layouts.contentLayoutMaster')
{{-- page Title --}}
@section('title','Dashboard')
{{-- vendor css --}}
@section('vendor-styles')

<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/extensions/swiper.min.css')}}">
@endsection
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/dashboard-ecommerce.css')}}">
@endsection

@section('content')
<!-- Dashboard Ecommerce Starts -->
<section id="widgets-Statistics">
  <div class="row">
    <div class="col-12 mt-1 mb-2 ">
      <h2 class="text-capitalize">Hola {{ Auth::user()->name ?? 'Invitado'}}  😄,</h2>
      <h1>Bienvenido de nuevo 👋</h1>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-8 col-md-12 col-sm-12">
      <div class="row d-none d-md-flex d-xl-flex">
        <div class="col-xl-4 col-md-4 col-sm-6">
          <div class="card text-center">
            <div class="card-body">
              <div class="badge-circle badge-circle-lg badge-circle-light-info mx-auto my-1">
                <i class="bx bx-group font-medium-5"></i>
              </div>
              <p class="text-muted mb-0 line-ellipsis">Estudiantes Titulados</p>
              <h2 class="mb-0">{{$students}}</h2>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-4 col-sm-6">
          <div class="card text-center">
            <div class="card-body">
              <div class="badge-circle badge-circle-lg badge-circle-light-warning mx-auto my-1">
                <i class="bx bx-building-house font-medium-5"></i>
              </div>
              <p class="text-muted mb-0 line-ellipsis">Institutos Técnologicos</p>
              <h2 class="mb-0">{{$institutes_t}}</h2>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-4 col-sm-6">
          <div class="card text-center">
            <div class="card-body">
              <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto my-1">
                <i class="bx bx-sitemap font-medium-5"></i>
              </div>
              <p class="text-muted mb-0 line-ellipsis">Institutos Pedagogicos</p>
              <h2 class="mb-0">{{$institutes_p}}</h2>
            </div>
          </div>
        </div>

      </div>

      {{-- Seccion widget --}}
      

    </div>

    
  </div>
</section>
<section id="widgets-chart" >
  <div class="row ">
    <div class="col-12 mt-1 mb-2">
      <h4>Acceso directo</h4>
      <hr>
    </div>
  </div>


  <div class="row ">
    <div class="col-lg-4 col-md-4">

      <div class="card  kb-hover-1">
        <div class="row no-gutters">
          <div class="col-lg-4 col-md-12 d-flex align-items-center justify-content-center p-1">
            <i  class="livicon-evo"
              data-options="name: users.svg; size: 80px; strokeColorAlt: #FDAC41; strokeColor: #5A8DEE; style: lines-alt; eventOn: .kb-hover-1;">
            </i>
          </div>
          <div class="col-lg-8 col-md-12">
            <div class="card-body text-center">
              <h4 class="card-title ">Importar Estudiantes</h4>
              <p class="card-text ">Click para importar lista de estudiantes.</p>
              <a href="{{route('students.import.index')}}" class="btn btn-secondary white">Ver</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    {{-- Historial de registro de asistencia --}}
    <div class="col-lg-4 col-md-4">

      <div class="card  kb-hover-2">
        <div class="row no-gutters">
          <div class="col-lg-4 col-md-12 d-flex align-items-center justify-content-center p-1">
            <i  class="livicon-evo"
              data-options="name: building.svg; size: 80px; strokeColorAlt: #FDAC41; strokeColor: #5A8DEE; style: lines-alt; eventOn: .kb-hover-2;">
            </i>
          </div>
          <div class="col-lg-8 col-md-12">
            <div class="card-body text-center">
              <h4 class="card-title ">Lista de Institutos</h4>
              <p class="card-text ">Click para ver la lista de Institutos.</p>
              <a href="{{route('institutes.index')}}" class="btn btn-secondary white">Ver</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    

  </div>

</section>
<!-- Dashboard Ecommerce ends -->
@endsection

@section('vendor-scripts')
<script src="{{asset('vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('vendors/js/extensions/swiper.min.js')}}"></script>
@endsection

@section('page-scripts')
<script src="{{asset('js/scripts/pages/dashboard-ecommerce.js')}}"></script>
@endsection

