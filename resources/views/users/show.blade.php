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
<a href="{{route('users.index')}}"  class="btn btn-secondary">
  <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg>
  <span class="align-middle ml-25 text-bold-600">Volver</span>
</a> 
@endsection

@section('content')
<!-- page user profile start -->
<section class="page-user-profile">
  <div class="row">
    <div class="col-12">
      <!-- user profile heading section start -->
      <div class="card">
        
          <div class="user-profile-images">
            <!-- user timeline image -->
            <img src="{{asset('images/profile/profile-banner.jpg')}}"
              class="img-fluid rounded-top user-timeline-image"  alt="user timeline image">
            <!-- user profile image -->
            <img src="{{$user->profile->photo}}" class="user-profile-image rounded"
              alt="user profile image" height="140" width="140">
          </div>
          <div class="user-profile-text">
            <h4 class="mb-0 text-bold-500 profile-text-color">{{$user->full_namea}}</h4>
            <small>{{$user->profile->position->name ?? 'Sin cargo'}}</small>
          </div>
          <!-- user profile nav tabs start -->
          <div class="card-body px-0">
            <ul
              class="nav user-profile-nav justify-content-center justify-content-md-start nav-pills border-bottom-0 mb-0"
              role="tablist">
              <li class="nav-item mb-0">
                <a class=" nav-link d-flex px-1 active" id="profile-tab" data-toggle="tab" href="#profile"
                  aria-controls="profile" role="tab" aria-selected="true"><i class="bx bx-copy-alt"></i><span
                  class="d-none d-md-block"> Perfil</span></a>
              </li>
              <li class="nav-item mb-0">
                <a class="nav-link d-flex px-1" id="friends-tab" data-toggle="tab" href="#friends"
                  aria-controls="friends" role="tab" aria-selected="false"><i class="bx bx-message-alt"></i><span
                  class="d-none d-md-block"> Compañeros</span></a>
              </li>
              
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
              
              
              <div class="tab-pane" id="friends" aria-labelledby="friends-tab" role="tabpanel">
                <!-- user profile nav tabs friends start -->
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <h5>Compañeros de Oficina: {{$user->office->name}}</h5>
                      <div class="row">
                      {{-- @foreach($users->chunk(3) as $chunk)
                        <div class="row">
                            @foreach($chunk as $userp)
                              <div class="col-6">
                                {{$userp->full_namea}}
                              </div>
                            @endforeach
                        </div>
                      @endforeach --}}
                      @foreach($users->chunk(6) as $chunk)
                        <div class="col-6">
                          <ul class="list-unstyled mb-0">

                            
                            @foreach($chunk as $userp)
                            <li class="media my-50">
                              <a href="JavaScript:void(0);">
                                <div class="avatar mr-1">
                                  <img src="{{$userp->profile->photo}}" alt="avtar images"
                                    width="32" height="32">
                                  <span class="avatar-status-online"></span>
                                </div>
                              </a>
                              <div class="media-body">
                                <h6 class="media-heading mb-0"><a href="javaScript:void(0);">{{$userp->full_namea}}</a></h6>
                                
                               
                                <small class="text-muted"> {{$userp->profile->position->name ?? 'Sin Descripcion'}}</small>
                                
                              </div>
                            </li>
                            @endforeach

                          </ul>
                        </div>
                        @endforeach
                        
                      </div>
                      
                    </div>
                  </div>
                </div>
                <!-- user profile nav tabs friends ends -->
              </div>
              <div class="tab-pane active" id="profile" aria-labelledby="profile-tab" role="tabpanel">
                <!-- user profile nav tabs profile start -->

                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <h5 class="card-title">Detalles de Perfil</h5>
                        
                      <div class="list-group list-group-flush">
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 d-flex">
                          <div class="list-icon">
                            <i class="badge-circle badge-circle-light-secondary bx bx-user-circle mr-1 text-primary"></i>
                          </div>
                          <div class="list-content">
                            <h5>{{$user->full_namea}}</h5>
                            <p class="mb-0">
                              Nombre completo
                            </p>
                          </div>
                        </a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 d-flex">
                          <div class="list-icon">
                            <i class="badge-circle badge-circle-light-secondary bx bxs-user-badge mr-1 text-danger"></i>
                          </div>
                          <div class="list-content">
                            <h5>{{$user->dni}}</h5>
                            <p class="mb-0">
                             DNI
                            </p>
                          </div>
                        </a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 d-flex">
                          <div class="list-icon">
                            <i class="badge-circle badge-circle-light-secondary bx bx-mail-send mr-1 text-success"></i>
                          </div>
                          <div class="list-content">
                            <h5>{{$user->email}}</h5>
                            <p class="mb-0">
                              Correo Electrónico
                            </p>
                          </div>
                        </a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 d-flex">
                          <div class="list-icon">
                            <i class="badge-circle badge-circle-light-secondary bx bx-cake mr-1 text-warning"></i>
                          </div>
                          <div class="list-content">
                            <h5>{{ $user->profile->birthday->format('j F Y')  ?? 'Sin datos'}}</h5>
                            {{$user->profile->birthday->format('d \\d\\e F \\d\\e\\l Y')}}
                            <p class="mb-0">
                              Fecha de Nacimiento

                            </p>
                          </div>
                        </a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 d-flex">
                          <div class="list-icon">
                            <i class="badge-circle badge-circle-light-secondary bx bxs-user-detail mr-1 text-success"></i>
                          </div>
                          <div class="list-content">
                            <h5>{{$user->profile->genre ?: 'Sin datos'}}</h5>
                            <p class="mb-0">
                              Genero
                            </p>
                          </div>
                        </a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 d-flex">
                          <div class="list-icon">
                            <i class="badge-circle badge-circle-light-secondary bx bx-phone mr-1 text-success"></i>
                          </div>
                          <div class="list-content">
                            <h5>{{$user->profile->phone ?: 'Sin datos'}}</h5>
                            <p class="mb-0">
                              Celular
                            </p>
                          </div>
                        </a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 d-flex">
                          <div class="list-icon">
                            <i class="badge-circle badge-circle-light-secondary bx bxs-landscape mr-1 text-silver"></i>
                          </div>
                          <div class="list-content">
                            <h5>{{$user->profile->departament ?: 'Sin datos'}} / {{$user->profile->province ?: 'Sin datos'}} / {{$user->profile->district ?: 'Sin datos'}}</h5>
                            <p class="mb-0">
                              Departamento / Provincia / Distrito
                            </p>
                          </div>
                        </a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 d-flex">
                          <div class="list-icon">
                            <i class="badge-circle badge-circle-light-secondary bx bx-home mr-1 text-info"></i>
                          </div>
                          <div class="list-content">
                            <h5>{{$user->profile->address ?: 'Sin datos'}}</h5>
                            <p class="mb-0">
                              Dirección
                            </p>
                          </div>
                        </a>
                        
                      </div>
                      <hr>
                      <h5 class="card-title">Detalles Laborales</h5>
                      <div class="list-group list-group-flush">
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 d-flex">
                          <div class="list-icon">
                            <i class="badge-circle badge-circle-light-secondary bx bx-briefcase mr-1 text-primary"></i>
                          </div>
                          <div class="list-content">
                            <h5>{{$user->profile->position ? $user->profile->position->name : 'Sin datos'}}</h5>
                            <p class="mb-0">
                              Cargo
                            </p>
                          </div>
                        </a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 d-flex">
                          <div class="list-icon">
                            <i class="badge-circle badge-circle-light-secondary bx bx-line-chart mr-1 text-danger"></i>
                          </div>
                          <div class="list-content">
                            <h5>{{$user->profile->condition ? $user->profile->condition->name : 'Sin datos'}}</h5>
                            <p class="mb-0">
                             Condición Laboral
                            </p>
                          </div>
                        </a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 d-flex">
                          <div class="list-icon">
                            <i class="badge-circle badge-circle-light-secondary bx bxs-paste mr-1 text-success"></i>
                          </div>
                          <div class="list-content">
                            <h5>{{$user->profile->laboral ? $user->profile->laboral->name : 'Sin datos'}}</h5>
                            <p class="mb-0">
                              Régimen Laboral
                            </p>
                          </div>
                        </a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 d-flex">
                          <div class="list-icon">
                            <i class="badge-circle badge-circle-light-secondary bx bxs-skull mr-1 text-warning"></i>
                          </div>
                          <div class="list-content">
                            <h5>{{$user->profile->pension ? $user->profile->pension->name : 'Sin datos'}}</h5>
                            <p class="mb-0">
                              Régimen Pensionario

                            </p>
                          </div>
                        </a>
                       
                        
                      </div>

                      
                      {{-- <button class="btn btn-sm d-none d-sm-block float-right btn-light-primary mb-2">
                        <i class="cursor-pointer bx bx-edit font-small-3 mr-50"></i><span>Edit</span>
                      </button>
                      <button class="btn btn-sm d-block d-sm-none btn-block text-center btn-light-primary">
                        <i class="cursor-pointer bx bx-edit font-small-3 mr-25"></i><span>Edit xd</span></button> --}}
                    </div>
                  </div>
                </div>
                <!-- user profile nav tabs profile ends -->
              </div>
            </div>
          </div>
  
        </div>
      </div>
      <!-- user profile content section start -->
    </div>
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