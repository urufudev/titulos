@extends('layouts.contentLayoutMaster')
{{-- page title --}}
@section('title','Importart Estudiantes Pedagógicos')
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection

@section('actionbutton')
@can('create', 'Models\Carrer')
  <a  href="{{route('carrers.create')}}" class="btn btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13 4H6v16h12V9h-5z" opacity=".3"/><path d="M20 8l-6-6H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8zm-2 12H6V4h7v5h5v11z"/></svg>

    <span  class="align-middle ml-25 text-bold-600">Nuevo</span>
  </a>
@endcan

@endsection
@section('content')
<!-- Background color start -->
{{-- @include('carrers.create') --}}

<!-- Background color end -->

<!-- Gradient color start -->
<section id="backcolor-gradient">
  <div class="row">
    <div class="col-md-12">
      
      {{-- <livewire:carrers.table/>	 --}}
      
    </div>
  </div>
</section>
<!-- Gradient color end -->
@endsection
