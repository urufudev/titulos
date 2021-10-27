<div>
    <div class="card">
        <!-- datatable start -->
        <div class="card-header">
          <div class="table-responsive">
              
              <div class="dataTables_wrapper dt-bootstrap4 no-footer ">
                  <div class="row">
                      <div class="col-sm-12 col-md-6">
                         <div class="dataTables_length" >
                            <label>
                               <select wire:model="perPage" aria-controls="example1" class="custom-select form-control form-control-sm font-medium-1">
                                  <option value="10">10</option>
                                  <option value="25">25</option>
                                  <option value="50">50</option>
                                  <option value="100">100</option>
                               </select>
                            </label>
                         </div>
                      </div>
                      <div class="col-sm-12 col-md-6">
                         <div  class="dataTables_filter">
                             <label>
                                 <input wire:model="search" type="search" class="form-control  font-medium-1" placeholder="Buscar..." aria-controls="example1">
                                 {{-- @if($search != '')
                                 <a wire:click="clear">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        
                                 </a>
                    
                                @endif --}}
                                </label>
                            </div>
                      </div>
                   </div>
              </div>
          </div>
        </div>
        <div class="table-responsive">
          <table  class="table table-hover mb-1 ">
            <thead>
              <tr class="font-medium-2" style="cursor:pointer">
                <th wire:click.prevent="sortBy('id')" class="font-medium-1 text-center"  >
                    ID @include('partials._sort-icon',['field'=>'id'])
                </th>
                
                <th wire:click.prevent="sortBy('document_number')" class="font-medium-1 text-center"  >
                  DOCUMENTO @include('partials._sort-icon',['field'=>'document_number'])
              </th>
                <th wire:click.prevent="sortBy('name')" class="font-medium-1" >
                    
                    NOMBRE @include('partials._sort-icon',['field'=>'name'])
                    
                </th>

                <th wire:click.prevent="sortBy('insname')" class="font-medium-1">
                    
                    INSTITUTO @include('partials._sort-icon',['field'=>'insname'])
                    
                </th >
                <th wire:click.prevent="sortBy('carname')"  class="font-medium-1 text-center">
                    
                    CARRERA @include('partials._sort-icon',['field'=>'carname'])
                </th>

                <th  width="10%" class="text-center font-medium-1 ">
                    <b>ACCIÓNES</b> </th>
              </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
              <tr class="font-medium-2"> 
                <td class="text-center align-middle"><b>{{ $student->id }}</b> </td>
                <td class="text-center align-middle"><b>{{ $student->document_number }}</b> </td>
                <td class="align-middle">{{ $student->name }}</td>
                <td class="align-middle">{{ $student->institute->name }}</td>
                <td class="align-middle">{{ $student->carrer->name }}</td>
                
                <td class="text-bold-600 text-center">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      @can('show', $student)    
                      <a href="{{route('students.show',$student->id)}}" class="btn btn-icon btn-info" data-toggle="tooltip" data-placement="top" data-original-title="Ver">
                          <i class="bx bx-show"></i>
                        </a>
                       @endcan 
                      @can('update', $student)    
                      <a href="{{route('students.edit',$student->id)}}" class="btn btn-icon btn-success" data-toggle="tooltip" data-placement="top" data-original-title="Editar">
                          <i class="bx bx-edit"></i>
                        </a>
                       @endcan 
                        @can('forceDelete', $student)  
                        

                        @if($student->status=='ACTIVO')
                        <a style="cursor:pointer" data-target="#modal-delete-{{$student->id}}" data-toggle="modal" class="btn btn-icon btn-danger" data-placement="top" data-toggle="tooltip" title="Eliminar" >
                          <i class="bx bx-trash-alt white"></i>
                        </a>
                        
                        @elseif($student->status=='INACTIVO')
                        <a style="cursor:pointer" data-target="#modal-delete-{{$student->id}}" data-toggle="modal" class="btn btn-icon btn-warning" data-placement="top" data-toggle="tooltip" title="Habilitar" >
                          <i class="bx bx-check-square white"></i>
                        </a>
                        
                        @endif
                       @endcan 
                      </div>

                </td>
                <div >@include('students.modal')</div>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- datatable ends -->
         @if($students->count())
            <div class="card-footer">
{{--                 Viewing {{ $students->firstItem() }} - {{ $students->lastItem() }} of {{ $students->total() }} entries
 --}}
                {{ $students->links('partials.custom-pagination') }}
            </div>
            
            @else
            <div class="card-footer text-center">
                
                <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="primary" width="48px" height="48px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 4v16h11.6l-2.85-2.85c-.83.55-1.79.83-2.75.83-1.28 0-2.55-.49-3.53-1.46-1.95-1.95-1.95-5.11 0-7.05C9.45 8.49 10.72 8 12 8c1.28 0 2.55.49 3.53 1.46 1.71 1.71 1.92 4.34.64 6.28L18 17.58V9l-5-5H6z" opacity=".3"/><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 15.58l-1.84-1.84c1.28-1.94 1.07-4.57-.64-6.28C14.55 8.49 13.28 8 12 8c-1.28 0-2.55.49-3.53 1.46-1.95 1.95-1.95 5.11 0 7.05.97.97 2.25 1.46 3.53 1.46.96 0 1.92-.28 2.75-.83L17.6 20H6V4h7l5 5v8.58zm-3.01-4.59c0 .8-.31 1.55-.88 2.11-.56.56-1.31.88-2.11.88s-1.55-.31-2.11-.88c-.56-.56-.88-1.31-.88-2.11s.31-1.55.88-2.11S11.2 10 12 10s1.55.31 2.11.88c.57.56.88 1.31.88 2.11z"/></svg>
                <div class="text-primary font-weight-bold text-center mt-2 fs-16">No hay resultados para la búsqueda "{{$search}}" en la página {{$page}} al mostrar {{$perPage}} por página</div>
            </div>
            @endif
      </div>
</div>
