@extends('layouts.contentLayoutMaster')
{{-- page title --}}
@section('title','Estudiantes')
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection


@section('content')
<!-- Background color start -->
{{-- @include('students.create') --}}

<!-- Background color end -->

<!-- Gradient color start -->
<section id="backcolor-gradient">
  <div class="row">
    <div class="col-md-6">
      
      {{-- <livewire:students.table/> --}}	
      <form action="{{route('students.import.excel')}}" method="post" enctype="multipart/form-data">
         @csrf
         <div class="card">
          <div class="card-header">
            <h4 class="card-title">Importar Lista de Estudiantes</h4>
          </div>
          <div class="card-body">
            <div class="row">
              
              <div class=" col-md-12">
                <fieldset class="form-group">
                  <label for="basicInputFile">Selecciona el archivo excel</label>
                  <div class="custom-file">
                    <input type="file" name="file" class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Cargar archivo</label>
                  </div>
                </fieldset>
                <div class="form-actions d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary" data-dismiss="modal"> 
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5v14h14V7.83L16.17 5H5zm7 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm3-8H6V6h9v4z" opacity=".3"/><path d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm2 16H5V5h11.17L19 7.83V19zm-7-7c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zM6 6h9v4H6z"/></svg>
                      <span  class="align-middle ml-25 text-bold-600">Importar</span>    
                  </button>
              </div>
              </div>
              
            </div>
          </div>
        </div>
      </form>
      
      
    </div>
    <div class="col-md-12">
      <div class="card">
                 

        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        @if (isset($errors) && $errors->any())
            <div class="alert bg-rgba-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif

        @if (session()->has('failures'))

            <table class="table table-danger mb-0">
              <thead>
                <tr>
                    <th>Columna</th>
                    <th>Atributo</th>
                    <th>Error</th>
                    
                </tr>
              </thead>
              <tbody>
                @foreach (session()->get('failures') as $validation)
                    <tr>
                        <td class="text-bold-500">{{ $validation->row() }}</td>
                        <td>{{ $validation->attribute() }}</td>
                        <td>
                            <ul>
                                @foreach ($validation->errors() as $e)
                                    <li>{{ $e }}</li>
                                @endforeach
                            </ul>
                        </td>
                        
                    </tr>
                @endforeach
              </tbody>
            </table>

        @endif
        
      </div>
    </div>
  </div>
</section>
<!-- Gradient color end -->
@endsection
