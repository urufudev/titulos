@extends('layouts.contentLayoutMaster')

@section('title','Estudiantes')

@section('actionbutton')
<a href="{{route('students.index')}}"  class="btn btn-secondary">
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
                <h4 class="card-title">Editar</h4>
                {!! Form::model($student,['route'=>['students.update', $student->id],'method'=>'PUT']) !!}
                                
                    @include('students.partials.form')

                {!! Form::close() !!}  
                
              </div>
            </div>
          </div>
      
    </div>
  </div>
</section>

@endsection