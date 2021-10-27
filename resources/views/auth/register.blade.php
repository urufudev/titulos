@extends('layouts.fullLayoutMaster')
{{-- page title --}}
@section('title','Registrarse')
{{-- page scripts --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/wizard.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/authentication.css')}}">

@endsection


@section('content')
<!-- register section starts -->

<section class="row flexbox-container">
  <div class="col-xl-8 col-10">
    <div class="card bg-authentication mb-0">
     

      <div class="row">
        
          
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="text-center">Registrarse</h3>
            </div>
            <div class="card-body mt-2">
              <form method="POST" action="{{ route('register') }}" class="wizard-horizontal">
                @csrf
                <!-- Step 1 -->
                <h6>
                  <i class="step-icon"></i>
                  <span class="fonticon-wrap">
                    <i class="livicon-evo"
                      data-options="name:morph-doc.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                  </span>
                </h6>
                <!-- Step 1 end-->
                <!-- body content step 1 -->
                <fieldset>
                  <div class="row">
                    <div class="col-12">
                      <h6 class="py-50">Ingrese sus datos personales</h6>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label">DNI</label>
                        <input type="text" class="form-control " name="dni"  maxlength="8" value="{{old('dni')}}" autocomplete="off">
                        @error('dni')
                            <div class="text-danger fs-15 mt-1">{{$message}}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control bestupper" name="name" value="{{old('name')}}" autofocus autocomplete="off">
                        @error('name')
                            <div class="text-danger fs-15 mt-1">{{$message}}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label">Apellido Paterno</label>
                        <input type="text" class="form-control bestupper" name="ap_paterno" value="{{old('ap_paterno')}}"  autocomplete="off">
                        @error('ap_paterno')
                            <div class="text-danger fs-15 mt-1">{{$message}}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label">Apellido Materno</label>
                        <input type="text" class="form-control bestupper" name="ap_materno" value="{{old('ap_materno')}}"  autocomplete="off">
                        @error('ap_materno')
                            <div class="text-danger fs-15 mt-1">{{$message}}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label">Fecha de Nacimiento</label>
                        <input type="text" class="form-control bestupper" name="birthday" value="{{old('birthday')}}"  autocomplete="off">
                        @error('birthday')
                            <div class="text-danger fs-15 mt-1">{{$message}}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="d-block">SEXO</label>
                        <div class="custom-control-inline">
                          <div class="radio mr-1">
                            <input type="radio" name="gender" id="MASCULINO" value="MASCULINO" checked="">
                            <label for="MASCULINO">MASCULINO</label>
                          </div>
                          <div class="radio">
                            <input type="radio" name="gender" id="FEMENINO" value="FEMENINO" checked="">
                            <label for="FEMENINO">FEMENINO</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
              <div class="row">
                <div class="col-12">
                  <h6 class="py-50">Datos de Contacto</h6>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label">Celular</label>
                    <input type="text" class="form-control bestupper" name="phone" value="{{old('phone')}}"  autocomplete="off">
                    @error('phone')
                        <div class="text-danger fs-15 mt-1">{{$message}}</div>
                    @enderror
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label">Correo Electrónico</label>
                    <input type="text" class="form-control" name="mail" value="{{old('mail')}}"  autocomplete="off">
                    @error('mail')
                        <div class="text-danger fs-15 mt-1">{{$message}}</div>
                    @enderror
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label>city</label>
                    <input type="text" class="form-control" placeholder="Enter Your Ciy">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>State</label>
                    <input type="text" class="form-control" placeholder="Enter Your State">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="col-md-">
                    <div class="form-group">
                      <label>Country</label>
                      <input type="text" class="form-control" placeholder="Enter Your Country">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Age</label>
                    <input type="text" class="form-control" placeholder="Enter Your Current Age">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="number" class="form-control" placeholder="+12345675">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="d-block">Gender</label>
                    <div class="custom-control-inline">
                      <div class="radio mr-1">
                        <input type="radio" name="bsradio1" id="radio5" checked="">
                        <label for="radio5">Male</label>
                      </div>
                      <div class="radio">
                        <input type="radio" name="bsradio1" id="radio888" checked="">
                        <label for="radio888">Female</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                </fieldset>
                <!-- body content step 1 end-->
                <!-- Step 2 -->
                <h6>
                  <i class="step-icon"></i>
                  <span class="fonticon-wrap">
                    <i class="livicon-evo"
                      data-options="name:truck.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                  </span>
                </h6>
                <!-- Step 2 end-->
                <!-- body content of step 2 -->
                <fieldset>
                  <div class="row">
                    <div class="col-12">
                      <h6 class="py-50">Enter Your Location</h6>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Address Line 1</label>
                        <input type="text" class="form-control" placeholder="Enter House no./ Flate no.">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Address Line 2</label>
                        <input type="text" class="form-control" placeholder="Enter Society name/ Area name">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>LandMark</label>
                        <input type="text" class="form-control" placeholder="Enter A Landmark">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>TOWN/CITY</label>
                        <input type="text" class="form-control" placeholder="Enter Town/City">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>PINCODE</label>
                        <input type="text" class="form-control" placeholder="Enter Your Pincode">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>STATE</label>
                        <input type="text" class="form-control" placeholder="Enter Your State">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Country</label>
                        <select name="country" class="form-control">
                          <option value="">Select</option>
                          <option value="AF">Afghanistan</option>
                          <option value="AX">Åland Islands</option>
                          <option value="AL">Albania</option>
                          <option value="DZ">Algeria</option>
                          <option value="AS">American Samoa</option>
                          <option value="AD">Andorra</option>
                          <option value="AO">Angola</option>
                          <option value="AI">Anguilla</option>
                          <option value="AQ">Antarctica</option>
                          <option value="ZW">Zimbabwe</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6 d-flex align-items-center">
                      <div class="form-group">
                        <div class="checkbox">
                          <input type="checkbox" class="checkbox__input" id="checkbox1" checked="">
                          <label for="checkbox1">Permanent Delivery address</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <!-- body content of step 2 end-->
                <!-- Step 3 -->
                <h6>
                  <i class="step-icon"></i>
                  <span class="fonticon-wrap">
                    <i class="livicon-evo"
                      data-options="name:home.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                  </span>
                </h6>
                <!-- Step 3 end-->
                <!-- body content of Step 3 -->
                <fieldset>
                  <div class="row">
                    <div class="col-12">
                      <h6 class="py-50">Enter Your Payment Methods</h6>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <div class="d-flex justify-content-between flex-wrap align-items-center">
                          <div class="vs-radio-con vs-radio-primary">
                            <img src="{{asset('images/pages/bank.png')}}" alt="img-placeholder" height="40">
                            <span>Card 12XX XXXX XXXX 0000</span>
                          </div>
                          <div class="card-holder-name">
                            John Doe
                          </div>
                          <div class="card-expiration-date">
                            11/2020
                          </div>
                          <div>
                            <label>Enter CVV</label>
                            <input type="password" class="form-control" placeholder="Enter Your CVV no.">
                          </div>
                        </div>
                      </div>
                      <hr>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <ul class="other-payment-options list-unstyled">
                          <li class="pb-1">
                            <div class="radio">
                              <input type="radio" name="pyradio" id="radio6" checked="">
                              <label for="radio6">Credit / Debit / ATM Card</label>
                            </div>
                          </li>
                          <li class="pb-1">
                            <div class="radio">
                              <input type="radio" name="pyradio" id="radio7" checked="">
                              <label for="radio7">Net Banking</label>
                            </div>
                          </li>
                          <li class="pb-1">
                            <div class="radio">
                              <input type="radio" name="pyradio" id="radio8" checked="">
                              <label for="radio8"> EMI (Easy Installment)</label>
                            </div>
                          </li>
                          <li class="pb-1">
                            <div class="radio">
                              <input type="radio" name="pyradio" id="radio9" checked="">
                              <label for="radio9"> Cash On Delivery</label>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <hr>
                    </div>
                    <div class="col-12 d-flex">
                      <div class="paypal cursor-pointer d-flex align-items-center">
                        <div class="radio">
                          <input type="radio" name="onlportal" id="paypal" checked="">
                          <label for="paypal"></label>
                        </div>
                        <img src="{{asset('images/pages/PayPal_logo.png')}}" alt="PayPal Logo">
                      </div>
                      <div class="googlepay cursor-pointer pl-1 d-flex align-items-center">
                        <div class="radio">
                          <input type="radio" name="onlportal" id="googlepay" checked="">
                          <label for="googlepay"></label>
                        </div>
                        <img src="{{asset('images/pages/google-pay.png')}}" height="30" alt="google Logo">
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <hr>
                      <div class="form-group">
                        <label>Enter Your Promocode</label>
                        <input type="text" class="form-control" placeholder="Enter Your Promocode">
                      </div>
                    </div>
                  </div>
                </fieldset>
                <!-- body content of Step 3 end-->
              </form>
            </div>
          </div>
        </div>
      </div>






      <div class="row m-0">
        <!-- register section left -->
        <div class="col-md-6 col-12 px-0">
          <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
            <div class="card-header pb-1">
              <div class="card-title">
                <h3 class="text-center">Registrarse</h3>
              </div>
            </div>
            
            <div class="text-center">
              <p> Cree una nueva cuenta
              </p>
            </div>
            <div class="card-content">
              <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                <div class="form-group">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control bestupper" name="name" value="{{old('name')}}" autofocus autocomplete="off">
                    @error('name')
                        <div class="text-danger fs-15 mt-1">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control bestupper" name="ap_paterno" value="{{old('ap_paterno')}}"  autocomplete="off">
                    @error('ap_paterno')
                        <div class="text-danger fs-15 mt-1">{{$message}}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control bestupper" name="ap_materno" value="{{old('ap_materno')}}"  autocomplete="off">
                    @error('ap_materno')
                        <div class="text-danger fs-15 mt-1">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label">DNI</label>
                    <input type="text" class="form-control " name="dni"  maxlength="8" value="{{old('dni')}}" autocomplete="off">
                    @error('dni')
                        <div class="text-danger fs-15 mt-1">{{$message}}</div>
                    @enderror
                    
                </div>
                <div class="form-group">
                  <label >Oficina</label>
                      
                      {{Form::select('office_id',$offices,null,['class'=>'form-control','autocomplete'=>'off'])}}
                      @error('office_id')
                      <div class="text-danger fs-15  mt-1">{{$message}}</div>
                      @enderror  
              </div>
                <div class="form-group">
                    <label class="form-label">Correo Electronico</label>
                    <input type="text" class="form-control"  type="email" name="email" value="{{old('email')}}" autocomplete="off">
                    @error('email')
                    <div class="text-danger fs-15 mt-1">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label">Contraseña</label>
                    <input type="password" class="form-control" placeholder="Contraseña" 
                    name="password"
                    required autocomplete="new-password" >
                    @error('password')
                    <div class="text-danger fs-15 mt-1">{{$message}}</div>
                    @enderror
                    <input type="password" class="form-control mt-2" placeholder="Confirme Contraseña"
                    name="password_confirmation" required >
                    @error('password_confirmation')
                    <div class="text-danger fs-15 mt-1">{{$message}}</div>
                    @enderror
                </div>
                




                {{-- <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" />
                        <span class="custom-control-label"><a href="{{url('/' . $page='terms')}}" class="">Agree the  Terms and policy</a></span>
                    </label>
                </div> --}}
                <div class="row mt-3">
                    <div class="col-12">
                        <button type="submit" class="btn  btn-primary btn-block px-4 fs-18 font-weight-bold">Registrarse
                          <i class="bx bx-exit"></i>
                        </button>
                    </div>
                </div>
                
            </form>
                <hr>
                <div class="text-center ">
                  <div class="font-weight-normal fs-16">Ya tienes una cuenta <a class="btn-link font-weight-normal" href="{{ route('login') }}">Iniciar Sesión</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- image section right -->
        <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
            <img class="img-fluid" src="{{asset('images/pages/register.png')}}" alt="branding logo">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- register section endss -->
@endsection

@section('vendor-scripts')
<script src="{{asset('js/scripts/uppercase/input-case-enforcer.js')}}"></script>
<script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script>

@endsection

{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script>
@endsection
