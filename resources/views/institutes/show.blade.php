@extends('layouts.contentLayoutMaster')

@section('title','Trabajo Presencial')

@section('actionbutton')
<a href="{{route('institutes.index')}}"  class="btn btn-secondary">
  <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg>
  <span class="align-middle ml-25 text-bold-600">Volver</span>
</a> 
@endsection
@section('content')

<section id="backcolor-gradient">
  <div class="row">
    <div class="col-12">
    <div class="card widget-user-details mb-1">
      <div class="card-header">
        <div class="card-title-details d-flex align-items-center">
          {{-- <div class="avatar bg-rgba-primary p-25 mr-2 ml-0">
            <img class="img-fluid" src="{{asset('images/profile/user-uploads/social-2.jpg')}}" alt="img placeholder"
              height="70" width="70">
          </div> --}}
          <div>
            <h4 class="text-bold-600">{{ $institute->modular }} | {{ $institute->name }}</h4>
            
          </div>
        </div>
        
      </div>
      <div Class="card-body">
        <div class="table-responsive">
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td class="pb-0 pl-0 font-medium-3"><strong>Tipo de Instituto</strong></td>
                <td class="pb-0 pl-0 font-medium-3"><strong>Dirección</strong></td>
                
                <td class="pb-0 font-medium-3"><strong>Código de Local</strong></td>
                
                
              </tr>
              <tr>
                <td class="pl-0">
                  
                  <div class="badge badge-light-primary text-bold-500 font-medium-3 py-50 d-inline-flex align-items-center">
                    <i class="bx bx-time mr-1"></i>
                    {{$institute->type}}
                  </div>
                </td>
                <td class="pl-0">
                  <div class="badge badge-light-success text-bold-500 font-medium-3 py-50 d-inline-flex align-items-center">
                    <i class="bx bxs-map mr-1"></i>
                    {{$institute->address}}
                  </div>
                </td>
                
                <td>
                  <div class="badge badge-light-danger text-bold-500 font-medium-3 py-50 d-inline-flex align-items-center">
                    <i class="bx bx-group mr-1"></i>
                    {{$institute->local}}
                  </div>
                </td>
                
                {{-- {{count($institute->presencialworks) }}
                {{count($institute->presencialworks)  / $institute->userlimit * 100}} --}}
              </tr>
            </tbody>
          </table>
        </div>
        <p class="font-medium-3">Progreso</p>
        <div class="progress progress-bar-primary progress-sm ">
          <div class="progress-bar progress-label" role="progressbar" aria-valuenow="20" style='width:50%'></div>
        </div>

      </div>

     

    </div>
    


    <div class="container">
      <div class="row">
        <div class="col-lg-12">

          

          <div class="card widget-notification">
            <div class="card-header border-bottom">
              <h4 class="card-title d-flex align-items-center">
                <i class="bx bx-book-bookmark font-medium-5 mr-1"></i>Lista de Carreras</h4>
              <div class="heading-elements">
                @can('create', 'Models\Carrer')
                  <a  href="{{route('institutes.carrers.create',$institute)}}" class="btn btn-primary btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="18px" height="18px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13 4H6v16h12V9h-5z" opacity=".3"/><path d="M20 8l-6-6H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8zm-2 12H6V4h7v5h5v11z"/></svg>

                    <span  class="align-middle ml-25 text-bold-600">Nuevo</span>
                  </a>
                @endcan
                
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="list-group list-group-flush">
                @forelse ($institute->carrers as $carrer)
                <li class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                  <div class="list-left d-inline-flex align-items-center">
                    <div class="list-icon mr-1">
                      <div class="avatar bg-rgba-primary m-0 p-25">
                        <div class="avatar-content">
                          <i class="bx bx-book text-primary font-medium-5"></i>
                        </div>
                      </div>
                    </div>
                    <div class="list-content">
                      
                      <h5>{{$carrer->id}} | {{$carrer->name}}</h5>
                      <small class="text-muted d-block">{{$carrer->status}}</small>
                    </div>
                  </div>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    @if(request()->routeIs('institutes.show'))
                    @can('update', $carrer)    
                    <a href="{{route('institutes.carrers.edit',[$institute, $carrer])}}" class="btn btn-icon btn-success" data-toggle="tooltip" data-placement="top" data-original-title="Editar">
                        <i class="bx bx-edit"></i>
                      </a>
                      
                     @endcan 
                      @can('forceDelete', $carrer)  
 
                      @if($carrer->status=='ACTIVO')
                      <a style="cursor:pointer" data-target="#modal-delete-{{$institute->id}}-{{$carrer->id}}" data-toggle="modal" class="btn btn-icon btn-danger" data-placement="top" data-toggle="tooltip" title="Eliminar" >
                        <i class="bx bx-trash-alt white"></i>
                      </a>
                        
                        @elseif($carrer->status=='INACTIVO')
                        <a style="cursor:pointer" data-target="#modal-delete-{{$institute->id}}-{{$carrer->id}}" data-toggle="modal" class="btn btn-icon btn-warning" data-placement="top" data-toggle="tooltip" title="Habilitar" >
                          <i class="bx bx-check-square white"></i>
                        </a>
                        
                        @endif
                     @endcan 
                     @endif
                    </div>
                  {{-- <div class="readable-mark-icon mark-as-read" data-toggle="tooltip" data-placement="left" title="" data-original-title="Mark as Unread">
                    <i class="bx bxs-circle font-medium-1 text-light-secondary"></i>
                  </div> --}}
                </li>
                <div >@include('carrers.modal')</div>
                @empty
                <li class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                  <div class="list-left d-flex">
                    <div class="list-icon mr-1">
                      <div class="avatar bg-rgba-primary m-0 p-25">
                        <div class="avatar-content">
                          <i class="bx bx-edit-alt text-primary font-medium-5"></i>
                        </div>
                      </div>
                    </div>
                    <div class="list-content">
                      <span class="list-title text-bold-500">No tiene carreras registradas</span>
                      
                    </div>
                  </div>
                  <div class="readable-mark-icon mark-as-read" data-toggle="tooltip" data-placement="left" title="" data-original-title="Mark as Unread">
                    <i class="bx bxs-circle font-medium-1 text-light-secondary"></i>
                  </div>
                </li>
                
                @endforelse
              </ul>
            </div>
          </div>


        </div>
      </div>
    </div>

  </div>
  </div>
</section>

@endsection