@extends('layouts.contentLayoutMaster')

@section('title','Usuarios')

@section('actionbutton')
<a href="{{route('users.index')}}"  class="btn btn-secondary">
  <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg>
  <span class="align-middle ml-25 text-bold-600">Volver</span>
</a> 
@endsection
@section('content')

<section id="backcolor-gradient">
  <div class="row">
    <div class="col-md-8">
        
        <div class="card">
            <div class="card-content">
              <div class="card-body">
                <h4 class="card-title">Crear</h4>
                {!! Form::open(['route'=>'users.store']) !!}
                    @include('users.partials.form')
                {!! Form::close() !!}
                
              </div>
            </div>
          </div>
      
    </div>
  </div>
</section>

@endsection


  <!-- Modal right -->
{{--   <div class="modal fade modal-right" id="modal-create" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">VER REGIMEN LABORAL</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            {!! Form::open(['route'=>'users.store']) !!}
            @include('users.partials.form')
            {!! Form::close() !!} 
      </div>
    </div>
  </div> --}}