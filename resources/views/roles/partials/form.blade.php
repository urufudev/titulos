<div class="form-body">
    <div class="form-group">
        <label >Nombre</label>
        {{Form::text('name',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
        @error('name')
        <div class="text-danger fs-15">{{$message}}</div>
        @enderror 
    </div>
          

</div>

<div class="form-row">
    <div class="col-md-12 mb-3">
        <div class="pdn-15 pdn-sm-20 bdr d-flex flex-column">
             <h4>Permisos</h4>
             @error('permissions')
            <div class="text-danger fs-15 mt-2">{{$message}}</div>
            @enderror 
             <ul class="list-group">
             @foreach ($permissions as $permission)
             
             <li class="list-group-item fs-16 text-capitalize list-group-item-action">
                <div class="custom-control custom-checkbox checkbox-primary  ">
                
                    {!! Form::checkbox('permissions[]', $permission->id,null,['id'=>$permission->id,'class'=>'custom-control-input']) !!}
                    
                    <label class="custom-control-label text-capitalize  custom-control-label-md" for="{{$permission->id}}">{{$permission->name}}
                        <em>({{$permission->description ?: 'Sin Descripcion'}})</em>
                    </label>
                  </div>
            </li>
             @endforeach
            </ul>
            
          </div>
    </div>
</div>
<div class="form-actions d-flex justify-content-end">
    <button type="submit" class="btn btn-primary" data-dismiss="modal"> 
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5v14h14V7.83L16.17 5H5zm7 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm3-8H6V6h9v4z" opacity=".3"/><path d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm2 16H5V5h11.17L19 7.83V19zm-7-7c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zM6 6h9v4H6z"/></svg>
        <span  class="align-middle ml-25 text-bold-600">Guardar</span>    
    </button>
</div>


{{-- <div class="modal-body">
    <form class="form">
        <div class="form-body">
            <div class="form-group">
                <label >Nombre</label>
                {{Form::text('name',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                @error('name')
                <div class="text-danger fs-15 mt-2">{{$message}}</div>
                @enderror 
            </div>
            <div class="form-group">
                <label>Descripción</label>
                {{Form::textarea('description',null,['class'=>'form-control bestupper','autocomplete'=>'off','rows'=>'4'])}}
                @error('description')
                    <div class="text-danger fs-15 mt-2">{{$message}}</div>
                @enderror 
            </div>
        
        </div>
    </form>
</div>
<div class="modal-footer">
    <button type="submit" class="btn btn-primary" data-dismiss="modal"> 
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5v14h14V7.83L16.17 5H5zm7 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm3-8H6V6h9v4z" opacity=".3"/><path d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm2 16H5V5h11.17L19 7.83V19zm-7-7c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zM6 6h9v4H6z"/></svg>
        <span  class="align-middle ml-25 text-bold-600">Guardar</span>    
    </button>
    
</div> --}}