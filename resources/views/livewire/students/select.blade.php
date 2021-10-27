<div>
    {{-- <div class="form-group row">
        <label for="institute_id" class="col-md-4 col-form-label text-md-right">Institute*</label>

        <div class="col-md-6">

            <select wire:model="institute" name="institute_id" class="form-control" required>
                
                @foreach ($institutes as $institute)
                    <option value="{{ $institute->id }}">{{ $institute->name }}</option>
                @endforeach
            </select>
        </div>
    </div> --}}

    <div class="row">
        <div class="col-md-6 col-12">
            <div class="form-group">
                <label for="institute_id">Instituto</label>
                    <select wire:model="institute" name="institute_id" class="form-control" required>
                        <option value="">Selecciona un Instituto</option>
                        @foreach ($institutes as $institute)
                            <option value="{{ $institute->id }}">{{ $institute->name }}</option>
                        @endforeach
                    </select>
                @error('institute_id')
                <div class="text-danger fs-15">{{$message}}</div>
                @enderror 
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="form-group">
                <label for="carrer_id">Carrera</label>
                    <select wire:model="carrer" name="carrer_id" class="form-control" required>
                        <option value="" selected>Selecciona un Instituto</option>
                        @if ($carrers->count() == 0)
                            <option value="">-- Selecciona primero un Instituto --</option>
                        @endif
                        @foreach ($carrers as $carrer)
                            <option value="{{ $carrer->id }}" >{{ $carrer->name }}</option>
                        @endforeach
                    </select>
                @error('carrer_id')
                <div class="text-danger fs-15">{{$message}}</div>
                @enderror 
            </div>
          </div>

          
    </div>
    

    <div class="row" wire:ignore>
        <div class="col-md-3 col-12">
            <div class="form-group">
                <label >Numero del Titulo</label>
                {{Form::text('title_number',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                @error('title_number')
                <div class="text-danger fs-15">{{$message}}</div>
                @enderror 
            </div>
          </div>

          <div class="col-md-4 col-12">
            <div class="form-group">
                <label >Nombre del Titulo</label>
                {{Form::text('title_name',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                @error('title_name')
                <div class="text-danger fs-15">{{$message}}</div>
                @enderror 
            </div>
          </div>

          <div class="col-md-5 col-12">
            <div class="form-group">
                <label >Nivel de Titulo</label>
                    @if ($typeinsti == 'TECNOLOGICO')
                        {{Form::select('title_level',[null => 'Selecciona'] + ['TECNICO' => 'TÉCNICO','PROFESIONAL TECNICO' => 'PROFESIONAL TÉCNICO','PROFESIONAL' => 'PROFESIONAL'],null,['class'=>'form-control','autocomplete'=>'off'])}}
                    @else 
                        {{Form::select('title_level',[null => 'Selecciona'] + ['INICIAL' => 'INICIAL','PRIMARIA' => 'PRIMARIA','SECUNDARIA' => 'SECUNDARIA'],null,['class'=>'form-control','autocomplete'=>'off'])}}
                    @endif
                    @error('title_level')
                    <div class="text-danger fs-15">{{$message}}</div>
                    @enderror  
            </div>
          </div>
    </div>
    <div class="form-group" wire:ignore>
        <label >Fecha del Titulo</label>
        {{Form::date('title_date',(isset($student)) ? $student->title_date  : null,['class'=>'form-control','autocomplete'=>'off'])}}
        @error('title_date')
        <div class="text-danger fs-15">{{$message}}</div>
        @enderror 
    </div>
    

    
    <a href="">{{$typeinsti}}</a>
    @if ($typeinsti == 'TECNOLOGICO')
        <div class="row">
            <div class="col-md-4 col-12">
                <div class="form-group" wire:ignore> 
                    <label >Código del Titulo</label>
                    {{Form::text('title_code',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    @error('title_code')
                    <div class="text-danger fs-15">{{$message}}</div>
                    @enderror 
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="form-group" wire:ignore>
                    <label >Número de Registro del Titulo</label>
                    {{Form::text('title_regnumber',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    @error('title_regnumber')
                    <div class="text-danger fs-15">{{$message}}</div>
                    @enderror 
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="form-group" wire:ignore>
                    <label >Número de Resolución del Titulo</label>
                    {{Form::text('title_resnumber',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    @error('title_resnumber')
                    <div class="text-danger fs-15">{{$message}}</div>
                    @enderror 
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-12">
                <div  class="form-group" wire:ignore>
                    <label >Fecha de Registro del Titulo en la DREA</label>
                    {{Form::date('title_regdate',(isset($student)) ? $student->title_date : null,['class'=>'form-control','autocomplete'=>'off'])}}
                    @error('title_regdate')
                    <div class="text-danger fs-15">{{$message}}</div>
                    @enderror 

                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group" wire:ignore>
                    <label >Reg. del Titulo en Libro de Institución</label>
                    {{Form::text('title_regbook',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    @error('title_regbook')
                    <div class="text-danger fs-15">{{$message}}</div>
                    @enderror 
                </div>
            </div>
            <div class="col-md-2 col-12">
                <div class="form-group" wire:ignore>
                    <label >Número Folio</label>
                    {{Form::text('title_folio',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    @error('title_folio')
                    <div class="text-danger fs-15">{{$message}}</div>
                    @enderror 
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6 col-12">
                <div class="form-group" wire:ignore>
                    <label >Nombre Completo del Director del Instituto</label>
                    {{Form::text('ins_director',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    @error('ins_director')
                    <div class="text-danger fs-15">{{$message}}</div>
                    @enderror 
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group" wire:ignore>
                    <label >Nombre Completo del Secretario Académico del Instituto</label>
                    {{Form::text('ins_secretary',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    @error('ins_secretary')
                    <div class="text-danger fs-15">{{$message}}</div>
                    @enderror 
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-6 col-12">
                <div class="form-group" wire:ignore>
                    <label >Nombre Completo del Secretario General de la DREA</label>
                    {{Form::text('dre_secretary',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    @error('dre_secretary')
                    <div class="text-danger fs-15">{{$message}}</div>
                    @enderror 
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group" wire:ignore>
                    <label >Nombre Completo del Responsable de Actas y Cert. de la DREA</label>
                    {{Form::text('dre_certificate',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    @error('dre_certificate')
                    <div class="text-danger fs-15">{{$message}}</div>
                    @enderror 
                </div>
            </div>

    </div>
    @else 
    xd
    @endif

</div>
