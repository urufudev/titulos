@extends('layouts.contentLayoutMaster')

@section('title','Usuarios')

@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/extensions/swiper.min.css')}}">
@endsection
{{-- page-styles --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-user-profile.css')}}">
@endsection

@section('actionbutton')
<a href="{{route('students.index')}}"  class="btn btn-secondary">
  <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg>
  <span class="align-middle ml-25 text-bold-600 white">Volver</span>
</a> 
@endsection

@section('content')
<!-- page user profile start -->
<section class="page-user-profile">
  <div class="row">
    @forelse ($students as $name => $studentdetails)
    <div class="col-12">
      <!-- user profile heading section start -->
      <div class="card">
        
          <div class="user-profile-images">
            <!-- user timeline image -->
            <img src="{{asset('images/drea/profile/profile-banner.jpg')}}"
              class="img-fluid rounded-top user-timeline-image"  alt="user timeline image">
            <!-- user profile image -->
            <img src="{{asset('images/drea/profile/5.png')}}" style="background-color: #F3F4F6;" class="user-profile-image rounded"
              alt="user profile image" height="140" width="140">
          </div>
          <div class="user-profile-text">
            <h4 class="mb-0 text-bold-500 profile-text-color"> {{$name}}</h4>

          </div>
          <!-- user profile nav tabs start -->
          <div class="card-body px-0">
            
            <ul
              class="nav user-profile-nav justify-content-center justify-content-md-start nav-pills border-bottom-0 mb-0"
              role="tablist">
              @forelse ($studentdetails as $student)
              <li class="nav-item mb-0">
                <a class=" nav-link d-flex px-1 @if($loop->first) active @endif" id="{{$loop->index}}-tab" data-toggle="tab" href="#profile-{{$loop->index}}"
                  aria-controls="profile-{{$loop->index}}" role="tab"  @if($loop->first) aria-selected="true" @else aria-selected="false" @endif><i class="bx bx-building-house"></i><span
                  class="d-none d-md-block"> {{$student->institute->name ?: 'Sin datos'}}</span></a>
              </li>
              
              @empty
            @endforelse
           
            </ul>

           
            
          </div>
          <!-- user profile nav tabs ends -->
        
      </div>
      <!-- user profile heading section ends -->

      <!-- user profile content section start -->
      <div class="container">
        <div class="row">
          <!-- user profile nav tabs content start -->
          <div class="col-lg-12">
            <div class="tab-content">
            
            @forelse ($studentdetails as $student)
            <div class="tab-pane @if($loop->first) active @endif" id="profile-{{$loop->index}}" aria-labelledby="{{$loop->index}}-tab"  role="tabpanel">
                <!-- user profile nav tabs friends start -->
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <h5 class="card-title">Detalles del Titulo</h5>
                        
                      <div class="list-group list-group-flush">
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 d-flex">
                          <div class="list-icon">
                            <i class="badge-circle badge-circle-light-secondary bx bx-hash mr-1 text-primary"></i>
                          </div>
                          <div class="list-content">
                            <h5>{{$student->title_number ?: 'Sin datos'}}</h5>
                            <p class="mb-0">
                              Numero del Título
                            </p>
                          </div>
                        </a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 d-flex">
                          <div class="list-icon">
                            <i class="badge-circle badge-circle-light-secondary bx bx-file mr-1 text-danger"></i>
                          </div>
                          <div class="list-content">
                            <h5>{{$student->title_name ?: 'Sin datos'}}</h5>
                            <p class="mb-0">
                             Nombre del Título
                            </p>
                          </div>
                        </a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 d-flex">
                          <div class="list-icon">
                            <i class="badge-circle badge-circle-light-secondary bx bx-menu-alt-left mr-1 text-success"></i>
                          </div>
                          <div class="list-content">
                            <h5>{{$student->title_level ?: 'Sin datos'}}</h5>
                            <p class="mb-0">
                             Nivel del Título
                            </p>
                          </div>
                        </a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 d-flex">
                          <div class="list-icon">
                            <i class="badge-circle badge-circle-light-secondary bx bx-hash mr-1 text-warning"></i>
                          </div>
                          <div class="list-content">
                            <h5>{{ $student->title_resnumber  ?: 'Sin datos'}}</h5>
                            <p class="mb-0">
                               Número de Resolución del Título
                            </p>
                          </div>
                        </a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 d-flex">
                          <div class="list-icon">
                            <i class="badge-circle badge-circle-light-secondary bx bx-calendar-event mr-1 text-success"></i>
                          </div>
                          <div class="list-content">
                            <h5>{{$student->title_regdate_formated ?: 'Sin datos'}}</h5>
                            <p class="mb-0">
                              Fecha de Resolución del Título
                            </p>
                          </div>
                        </a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 d-flex">
                          <div class="list-icon">
                            <i class="badge-circle badge-circle-light-secondary bx bx-folder-open mr-1 text-success"></i>
                          </div>
                          <div class="list-content">
                            <h5>{{$student->title_regbook ?: 'Sin datos'}}</h5>
                            <p class="mb-0">
                              Libro de Resolución del Título
                            </p>
                          </div>
                        </a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 d-flex">
                          <div class="list-icon">
                            <i class="badge-circle badge-circle-light-secondary bx bx-calendar-event mr-1 text-silver"></i>
                          </div>
                          <div class="list-content">
                            <h5>{{$student->title_date_formated ?: 'Sin datos'}}</h5>
                            <p class="mb-0">
                              Fecha de Emisión del Titulo
                            </p>
                          </div>
                        </a>

                        
                      </div>
                      
                    </div>
                  </div>
                </div>
                <!-- user profile nav tabs friends ends -->
              </div>
            @empty
            @endforelse
              
              
              
            </div>
          </div>
  
        </div>
      </div>
      <!-- user profile content section start -->
    </div>
    @empty
    @endforelse
  </div>
</section>
<!-- page user profile ends -->
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('vendors/js/extensions/swiper.min.js')}}"></script>
@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/pages/page-user-profile.js')}}"></script>
@endsection