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
      <form action="{{ route('students.import_process') }}" method="POST">
        @csrf

        <input type="hidden" name="csv_data_file_id" value="{{ $excel_data_file->id }}"/>

        <table class="min-w-full divide-y divide-gray-200 border">
            @if (isset($headings))
                <thead>
                <tr>
                    @foreach ($headings[0][0] as $excel_header_field)
                        {{--                                            @dd($headings)--}}
                        <th class="px-6 py-3 bg-gray-50">
                            <span class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">{{ $excel_header_field }}</span>
                        </th>
                    @endforeach
                </tr>
                </thead>
            @endif

            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
            @foreach($excel_data as $row)
                <tr class="bg-white">
                    @foreach ($row as $key => $value)
                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                            {{ $value }}
                        </td>
                    @endforeach
                </tr>
            @endforeach

            <tr>
                @foreach ($excel_data[0] as $key => $value)
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        <select name="fields[{{ $key }}]">
                            @foreach (config('app.db_fields') as $db_field)
                                <option value="{{ (\Request::has('header')) ? $db_field : $loop->index }}"
                                        @if ($key === $db_field) selected @endif>{{ $db_field }}</option>
                            @endforeach
                        </select>
                    </td>
                @endforeach
            </tr>
            </tbody>
        </table>

        <button type="submit" class="btn btn-primary" data-dismiss="modal"> 
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5v14h14V7.83L16.17 5H5zm7 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm3-8H6V6h9v4z" opacity=".3"/><path d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm2 16H5V5h11.17L19 7.83V19zm-7-7c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zM6 6h9v4H6z"/></svg>
            <span  class="align-middle ml-25 text-bold-600">Importar</span>    
        </button>
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
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif

                    @if (session()->has('failures'))

                        <table class="table table-danger">
                            <tr>
                                <th>Row</th>
                                <th>Attribute</th>
                                <th>Errors</th>
                                <th>Value</th>
                            </tr>

                            @foreach (session()->get('failures') as $validation)
                                <tr>
                                    <td>{{ $validation->row() }}</td>
                                    <td>{{ $validation->attribute() }}</td>
                                    <td>
                                        <ul>
                                            @foreach ($validation->errors() as $e)
                                                <li>{{ $e }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                       {{--  {{ $validation->values()[$validation->attribute()] }} --}}
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    @endif
      </div>
    </div>
  </div>
</section>
<!-- Gradient color end -->
@endsection
