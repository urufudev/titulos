<div class="form-body">
    <div class="form-group">
        <label >Código Modular</label>
        {{Form::text('modular',null,['class'=>'form-control bestupper','autocomplete'=>'off','maxlength'=>'7'])}}
        @error('modular')
        <div class="text-danger fs-15">{{$message}}</div>
        @enderror 
    </div>
    <div class="form-group">
        <label >Nombre</label>
        {{Form::text('name',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
        @error('name')
        <div class="text-danger fs-15">{{$message}}</div>
        @enderror 
    </div>
    <div class="form-group">
        <label >Código de Local</label>
        {{Form::text('local',null,['class'=>'form-control bestupper','autocomplete'=>'off','maxlength'=>'6'])}}
        @error('local')
        <div class="text-danger fs-15">{{$message}}</div>
        @enderror 
    </div>
    <div class="form-group">
        <label >Dirección</label>
        {{Form::text('address',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
        @error('address')
        <div class="text-danger fs-15">{{$message}}</div>
        @enderror 
    </div>
    <div class="form-group">
        <label >Tipo de Instituto</label>
            
            {{Form::select('type',[null => 'Selecciona'] + ['TECNOLOGICO' => 'TECNOLÓGICO','PEDAGOGICO' => 'PEDAGÓGICO','ESCUELA' =>'ESCUELA'],null,['class'=>'form-control','autocomplete'=>'off'])}}
            @error('type')
            <div class="text-danger fs-15">{{$message}}</div>
            @enderror  
    </div>

    <div class="form-group align-middle">
        <label>Estado</label>
        <div class="custom-switch custom-control mt-1">
            <span > 
            
            <input type="checkbox" name="status" class="custom-control-input " id="status" 
            @if(old('status', $institute->status) == 'ACTIVO') checked
            @endif>
            <label class="custom-control-label mr-1" for="status">
            </label>
            Activo
        </span>
        </div>
    </div>
{{-- 
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
    </div> --}}
   

      

</div>
<div class="form-actions d-flex justify-content-end">
    <button type="submit" class="btn btn-primary" data-dismiss="modal"> 
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5v14h14V7.83L16.17 5H5zm7 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm3-8H6V6h9v4z" opacity=".3"/><path d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm2 16H5V5h11.17L19 7.83V19zm-7-7c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zM6 6h9v4H6z"/></svg>
        <span  class="align-middle ml-25 text-bold-600">Guardar</span>    
    </button>
</div>

@section('page-scripts')
{{-- <script>
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
</script> --}}
@endsection