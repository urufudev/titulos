

<p class="mb-2">Selecciona el tipo de Instituto.</p>
<ul class="nav nav-pills">
    <li class="nav-item">
    <a class="nav-link active" id="base-pilltec" data-toggle="pill" href="#pilltec" aria-expanded="true">
        INST. TECNOLÓGICO
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" id="base-pillpedagogico" data-toggle="pill" href="#pillpedagogico" aria-expanded="false">
    INST. PEDAGÓGICO
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" id="base-pillescuela" data-toggle="pill" href="#pillescuela" aria-expanded="false">
        ESCUELA
    </a>
    </li>
</ul>
<div class="tab-content">
    
    {{-- {{Form::hidden('type','TECNOLÓGICO')}} --}}
    {{-- START TECNOLOGICO --}}
    <div role="tabpanel" class="tab-pane active" id="pilltec" aria-expanded="true" aria-labelledby="base-pilltec">
        {{-- {!! Form::open(['route'=>'students.store']) !!} --}}
        {{-- <div class="form-group">
            <label >Instituto</label>
                
                {{Form::select('institute_id',$institutes,null,['class'=>'form-control','autocomplete'=>'off','id'=>'instituteList'])}}
                @error('institute_id')
                <div class="text-danger fs-15">{{$message}}</div>
                @enderror  
          </div> --}}

          {{-- <div class="form-group">
            <label >Instituto</label>
                
            <select id="carrer_id" name="carrer_id" class="form-control" required>

            </select>
          </div> --}}



          
          {{-- <livewire:students.select :institute="{!!(isset($student)) ? $student->institute_id : null!!}"> --}}	
        @livewire('students.select', ['carrer' => (isset($student)) ? $student->carrer_id : null])

          

          

              <div class="form-group">
                  <label >Nombre</label>
                  {{Form::text('name',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                  @error('name')
                  <div class="text-danger fs-15">{{$message}}</div>
                  @enderror 
              </div>

                <div class="form-group">
                    <label >Apellido Paterno</label>
                    {{Form::text('ap_paterno',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    @error('ap_paterno')
                    <div class="text-danger fs-15">{{$message}}</div>
                    @enderror 
                </div>

                <div class="form-group">
                    <label >Apellido Materno</label>
                    {{Form::text('ap_materno',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    @error('ap_materno')
                    <div class="text-danger fs-15">{{$message}}</div>
                    @enderror 
                </div>
                
                <div class="form-group">
                    <label >Tipo de Documento</label>
                        
                        {{Form::select('document_type',[null => 'Selecciona'] + ['DNI' => 'DNI','CE' => 'CE'],null,['class'=>'form-control','autocomplete'=>'off'])}}
                        @error('document_type')
                        <div class="text-danger fs-15">{{$message}}</div>
                        @enderror  
                </div>
              <div class="form-group">
                  <label >Numero de Documento</label>
                  {{Form::text('document_number',null,['class'=>'form-control bestupper','autocomplete'=>'off','maxlength'=>'10'])}}
                  @error('document_number')
                  <div class="text-danger fs-15">{{$message}}</div>
                  @enderror 
              </div>

              <div class="form-group">
                <label >Numero del Titulo</label>
                {{Form::text('title_number',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                @error('title_number')
                <div class="text-danger fs-15">{{$message}}</div>
                @enderror 
            </div>

            <div class="form-group">
                <label >Nombre del Titulo</label>
                {{Form::text('title_name',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                @error('title_name')
                <div class="text-danger fs-15">{{$message}}</div>
                @enderror 
            </div>

            <div class="form-group">
                <label >Nivel de Titulo</label>
                    
                    {{Form::select('title_level',[null => 'Selecciona'] + ['TÉCNICO' => 'TÉCNICO','PROFESIONAL TÉCNICO' => 'PROFESIONAL TÉCNICO','PROFESIONAL' => 'PROFESIONAL'],null,['class'=>'form-control','autocomplete'=>'off'])}}
                    @error('title_level')
                    <div class="text-danger fs-15">{{$message}}</div>
                    @enderror  
            </div>

            <div class="form-group">
                <label >Fecha del Titulo</label>
                {{Form::date('title_date',(isset($student)) ? $student->title_date : null,['class'=>'form-control','autocomplete'=>'off'])}}
                @error('title_date')
                <div class="text-danger fs-15">{{$message}}</div>
                @enderror 
            </div>

            <div class="form-group">
                <label >Código del Titulo</label>
                {{Form::text('title_code',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                @error('title_code')
                <div class="text-danger fs-15">{{$message}}</div>
                @enderror 
            </div>

            <div class="form-group">
                <label >Número de Registro del Titulo</label>
                {{Form::text('title_regnumber',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                @error('title_regnumber')
                <div class="text-danger fs-15">{{$message}}</div>
                @enderror 
            </div>

            <div class="form-group">
                <label >Número de Resolución del Titulo</label>
                {{Form::text('title_resnumber',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                @error('title_resnumber')
                <div class="text-danger fs-15">{{$message}}</div>
                @enderror 
            </div>

            <div class="form-group">
                <label >Fecha de Registro del Titulo en la DREA</label>
                {{Form::date('title_regdate',(isset($student)) ? $student->title_date : null,['class'=>'form-control','autocomplete'=>'off'])}}
                @error('title_regdate')
                <div class="text-danger fs-15">{{$message}}</div>
                @enderror 
            </div>
            
            <div class="form-group">
                <label >Libro de Institución del Titulo</label>
                {{Form::text('title_regbook',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                @error('title_regbook')
                <div class="text-danger fs-15">{{$message}}</div>
                @enderror 
            </div>

            <div class="form-group">
                <label >Número Folio</label>
                {{Form::text('title_folio',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                @error('title_folio')
                <div class="text-danger fs-15">{{$message}}</div>
                @enderror 
            </div>

            <div class="form-group">
                <label >Nombre Completo del Director del Instituto</label>
                {{Form::text('ins_director',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                @error('ins_director')
                <div class="text-danger fs-15">{{$message}}</div>
                @enderror 
            </div>

            <div class="form-group">
                <label >Nombre Completo del Secretario Académico del Instituto</label>
                {{Form::text('ins_secretary',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                @error('ins_secretary')
                <div class="text-danger fs-15">{{$message}}</div>
                @enderror 
            </div>

            <div class="form-group">
                <label >Nombre Completo del Secretario General de la DREA</label>
                {{Form::text('dre_secretary',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                @error('dre_secretary')
                <div class="text-danger fs-15">{{$message}}</div>
                @enderror 
            </div>

            <div class="form-group">
                <label >Nombre Completo del Responsable de Actas y Certificados de la DREA</label>
                {{Form::text('dre_certificate',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                @error('dre_certificate')
                <div class="text-danger fs-15">{{$message}}</div>
                @enderror 
            </div>
          
              <div class="form-group">
                  <select id="viewSelector">
                      <option value="0">-- Select a View --</option>       
                      <option value="view1">view1</option>
                      <option value="view2">view2</option>
                      <option value="view3">view3</option>
                   </select>
              </div>
          
              <div class="form-group">
                  <div id="view1">
                      <a href="">v1</a>
                    </div>
                    <div id="view2a">
                      <a href="">v2</a>
                    </div>
                    <div id="view2b">
                      <a href="">v2b</a>
                    </div>
                    <div id="view3">
                      <a href="">v3</a>
                    </div>
              </div>
          
                
          
          
          <div class="form-actions d-flex justify-content-end">
              <button type="submit" class="btn btn-primary" data-dismiss="modal"> 
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5v14h14V7.83L16.17 5H5zm7 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm3-8H6V6h9v4z" opacity=".3"/><path d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm2 16H5V5h11.17L19 7.83V19zm-7-7c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zM6 6h9v4H6z"/></svg>
                  <span  class="align-middle ml-25 text-bold-600">Guardar</span>    
              </button>
          </div>
          
          @section('page-scripts')
          <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
          
            $(document).ready(function () {
             
                $('#instituteList').on('change',function(e) {
                 
                 var institute_id = e.target.value;
          
                 $.ajax({
                       
                       url:"{{ route('carrerdep') }}",
                       type:"POST",
                       data: {
                        institute_id: institute_id
                        },
                      
                       success:function (data) {
                          console.log(data.carrers[0].type);
                        $('#carrer_id').empty('');
                        $('#type').append('<option>'+data.carrers[0].type+'</option>');
                        $.each(data.carrers[0].carrers,function(index,carrer){
                            
                            $('#carrer_id').append('<option value="'+carrer.id+'">'+carrer.name+'</option>');
                        })
          
                       }
                   })
                });
          
            });
          </script>
          
          <script>
          
           $(document).ready(function() {
            $.viewMap = {
              '0' : $([]),
              'view1' : $('#view1'),
              'view2' : $('#view2a, #view2b'),
              'view3' : $('#view3')
            };
          
            $('#viewSelector').change(function() {
              // hide all
              $.each($.viewMap, function() { this.hide(); });
              // show current
              $.viewMap[$(this).val()].show();
            }).change();
          });   
          </script>
          @endsection
          {{-- {!! Form::close() !!} --}}
    </div>
    {{-- END TECNOLOGICO --}}
    {{-- STAR PEDAGOGICO --}}
    {{-- <div class="tab-pane" id="pillpedagogico" aria-labelledby="base-pillpedagogico">
    <p>
        Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake
        jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.
    </p>
    </div> --}}
    {{-- END PEDAGOGICO --}}
    {{-- STAR ESCUELA --}}
    {{-- <div class="tab-pane" id="pillescuela" aria-labelledby="base-pillescuela">
    <p>
        Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton
        candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder
        sweet sesame snaps.
    </p>
    </div> --}}
    {{-- END ESCUELA --}}
{{-- </div> --}}
