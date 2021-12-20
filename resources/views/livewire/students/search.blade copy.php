<div>
    {{-- {!! Form::open(['route' => 'front.search', 'method' => 'post']) !!} --}}
    {{-- {{ csrf_field() }} --}}
    
 {{--    <form wire:submit.prevent="findStudent" >
    <div class="body">
      <div class="form-group">
        <label >Tipo de Documento</label>
            
            {{Form::select('document_type',[null => 'Selecciona'] + ['DNI' => 'DNI','CE' => 'CE'],null,['class'=>'form-control  ','autocomplete'=>'off','wire:model'=>'document_type'])}}
            <small class="text-muted">Find helper text here for given textbox.</small>
            @error('document_type')
            <div class="text-danger fs-15">{{$message}}</div>
            @enderror  
    </div>
        <div class="form-group">
            <label >Numero de Documento</label>
            {{Form::text('document_number',null,['class'=>'form-control bestupper','autocomplete'=>'off','maxlength'=>'10','wire:model'=>'document_number'])}}
            @error('document_number')
            <div class="text-danger fs-15">{{$message}}</div>
            @enderror 
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                  
                  {{Form::select('document_type',[null => 'Selecciona'] + ['DNI' => 'DNI','CE' => 'CE'],null,['class'=>'form-control input-group-text ','autocomplete'=>'off','wire:model'=>'document_type'])}}
                </div>
                <input type="text" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon1">
              </div>
        </div>



            <div class="form-group">
                <button type="submit" class="btn btn-block btn-lg btn-primary waves-effect"> Buscar</button>
        </div>
        
    </div>

    </form> --}}

  <div class="container">

    <div class="card bg-primary bg-lighten-1">
      <div class="row no-gutters">
        <div class="col-lg-4 col-md-12 d-flex align-items-center justify-content-center p-1">
          <img src="{{asset('images/elements/apple-lap.png')}}" class="card-img img-fluid" alt="apple-lap.png">
        </div>
        <div class="col-lg-8 col-md-12">
          <div class="card-body text-center">
            <h4 class="card-title white">New Arrival</h4>
            <p class="card-text white">Mac Book.</p>
            <button class="btn btn-secondary">Buy Now</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-header">
        
        <h4 class="card-title d-flex align-items-center">
          <i class="bx bx-detail font-medium-4 mr-1"></i>REGISTRO REGIONAL DE GRADOS ACADÉMICOS Y TÍTULOS PROFESIONALES
        </h4>
      </div>
      <div class="card-body">
        <form wire:submit.prevent="findStudent" >
          <div class="form-body">
            <div class="row">
              <div class="col-12">
                <p>Complete los campos de  <code>Tipo de Documento</code> y <code>Numero de Documento</code> para
                  realizar la busqueda.</p>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label >Tipo de Documento</label>
                      
                      {{Form::select('document_type',[null => 'Selecciona'] + ['DNI' => 'DNI','CE' => 'CE'],null,['class'=>'form-control  ','autocomplete'=>'off','wire:model'=>'document_type'])}}
                      
                      @error('document_type')
                      <div class="text-danger fs-15">{{$message}}</div>
                      @enderror  
                </div>
              </div>
              <div class="col-sm-8">
                <label >Numero de Documento</label>
                <div class="form-group position-relative has-icon-left">
                  {{Form::text('document_number',null,['class'=>'form-control bestupper','autocomplete'=>'off','maxlength'=>'10','wire:model'=>'document_number','placeholder'=>'N° Documento'])}}
                  <div class="form-control-position">
                    <i class="bx bx-user"></i>
                  </div>
                  @error('document_number')
                  <div class="text-danger fs-15">{{$message}}</div>
                  @enderror
              </div>
              </div>
            </div>

          </div>
          <div class="form-actions d-flex justify-content-end">
            <button type="submit" class="btn btn-primary mr-1">Buscar</button>
            <button type="reset" class="btn btn-light-primary">Limpiar</button>
          </div>
        </form>
      </div>
    </div>

    @if ($students != null)
    <div class="card">
      <div class="card-header border-bottom">
        <h4 class="card-title d-flex align-items-center">
          <i class="bx bx-list-ul font-medium-4 mr-1"></i>Resultados</h4>
        <div class="heading-elements">
          <button type="button" class="btn btn-sm btn-light-primary">Imprimir</button>
        </div>
      </div>
      <!-- Table with no outer spacing -->
      <div class="table-responsive">
        <table class="table mb-0">
          <thead>
            <tr>
              <th>Nombre Completo</th>
              <th>Titulo</th>
              <th>Institución</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($students as $student)
            <tr>
              <td class="text-bold-500">{{$student->fullname}}</td>
              <td>{{$student->title_name}} - {{$student->title_level}}</td>
              <td>{{$student->institute->name}}</td>
            </tr>
            @empty
            No se encontraron resultados
            @endforelse 
            
            
          </tbody>
        </table>
      </div>
    </div>
    @endif
  </div>


  
{{-- @if ($students != null)
    @forelse ($students as $item)
    <a href="">{{$item->name}}</a>
    @empty
    vacio:'v'
    @endforelse  
@endif --}}


 {{--    @forelse ($students  as $student)
    <tr class="text-center">
        <td class="border px-4 py-2">{{ $student->document_type }}</td>
        <td class="border px-4 py-2">{{ $student->document_number }}</td>
        
    </tr>
@empty
    <tr class="text-center">
        <td colspan="4" class="py-3 italic">No hay información</td>
    </tr>
@endforelse --}}

    {{-- {!! Form::close() !!} --}}
</div>
