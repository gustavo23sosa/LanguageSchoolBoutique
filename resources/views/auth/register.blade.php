@extends('layouts.main', [
    'class' => 'register-page',
])
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@section('content')
<script>
function validar(obj){
    var d = document.formulario;
    if(obj.checked==true){
        d.boton.disabled = false;
    }else{
        d.boton.disabled= true;
    }
}
</script>

    <div class="content">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-5 col-md-6 ml-auto mr-auto">
                    <div class="card card-signup text-center">
                        <div class="card-header ">
                            <h4 class="card-title">{{ ('¡Registrate Ahora!') }}</h4>

                        </div>
                        <div class="social">
                           
                        </div>
                        <div class="card-body ">
                            <form name="formulario" class="form" method="POST" action="{{ route('register') }}">
                                @if($message = Session::get('success'))
                                    <div class="alert alert-success" >
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        {{ $message }}
                                    </div>
                                @endif
                                @csrf
                                <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="nc-icon nc-single-02"></i>
                                        </span>
                                    </div>
                                    <input name="name" type="text" class="form-control" placeholder="Nombre" value="{{ old('name') }}" autofocus required maxlength="50" required autocomplete="name">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-group{{ $errors->has('apaterno') ? ' has-danger' : '' }}">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="nc-icon nc-single-02"></i>
                                        </span>
                                    </div>
                                    <input name="apaterno" type="text" class="form-control" placeholder="Apellido Paterno" value="{{ old('apaterno') }}" autofocus required maxlength="50" required autocomplete="apaterno">
                                    @if ($errors->has('apaterno'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('apaterno') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-group{{ $errors->has('amaterno') ? ' has-danger' : '' }}">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="nc-icon nc-single-02"></i>
                                        </span>
                                    </div>
                                    <input name="amaterno" type="text" class="form-control" placeholder="Apellido Materno" value="{{ old('amaterno') }}" autofocus required maxlength="50" required autocomplete="amaterno">
                                    @if ($errors->has('amaterno'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('amaterno') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="nc-icon nc-email-85"></i>
                                        </span>
                                    </div>
                                    <input name="email" type="email" class="form-control" placeholder="Email" required value="{{ old('email') }}" autofocus required autocomplete="email">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-group{{ $errors->has('telefono') ? ' has-danger' : '' }}">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="nc-icon nc-single-02"></i>
                                        </span>
                                    </div>
                                    <input name="telefono" type="text" class="form-control" placeholder="Telefono" value="{{ old('telefono') }}" autofocus required maxlength="15" required autocomplete="telefono">
                                    @if ($errors->has('telefono'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('telefono') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-group{{ $errors->has('fk_estado') ? ' has-danger' : '' }}">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="nc-icon nc-single-02"></i>
                                        </span>
                                    </div>
                                    <select class="custom-select" required name="fk_estado" style="text-transform: uppercase;">
                                         <option value="">Selecciona una entidad</option>
                                        @foreach($entidades as $entidad)
                                         <option value="{{$entidad->id}}">{{$entidad->entidad}} </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('fk_estado'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('fk_estado') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="nc-icon nc-key-25"></i>
                                        </span>
                                    </div>
                                    <input name="password" id="password" type="password" class="form-control" placeholder="Contraseña" required autocomplete="password"><div class="input-group-append">
                                        <button id="passwords" class="btn btn-primary" type="button"onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                                  </div>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    
                                </div>
                                <div class="input-group" >
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="nc-icon nc-key-25"></i>
                                        </span>
                                    </div>
                                    <input name="password_confirmation" id="password_confirmation" type="password" class="form-control" placeholder="Confirma Contraseña" required autocomplete="password_confirmation">
                                    @if ($errors->has('password_confirmation'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                    <div class="input-group-prepend">
                                        <button id="password_confirmations" class="btn btn-primary" type="button" onclick="mostrarPasswordConfirmation()"> <span class="fa fa-eye-slash iconi"></span> </button>
                                  </div>
                                </div>
                                <div class="form-check text-left">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" onclick="javascript:validar(this);">
                                        <span class="form-check-sign"></span>
                                            {{ ('No soy un Robot') }}
                                        
                                    </label>
                                    
                                </div>
                                <div class="card-footer ">
                                    <button name="boton" type="submit" class="btn btn-info btn-round" disabled="disabled">{{ __('Registrarse') }}</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
             </div>
        </div>
     </div> 
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();
        });
    </script>
    <script type="text/javascript">
    function mostrarPassword(){
            var cambio = document.getElementById("password");
            if(cambio.type == "password"){
                cambio.type = "text";
                $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
            }else{
                cambio.type = "password";
                $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
            }
        } 
        
        $(document).ready(function () {
        //CheckBox mostrar contraseña
        $('#Passwords').click(function () {
            $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
        });
    });
    </script>
    <script type="text/javascript">
    function mostrarPasswordConfirmation(){
            var cambio = document.getElementById("password_confirmation");
            if(cambio.type == "password"){
                cambio.type = "text";
                $('.iconi').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
            }else{
                cambio.type = "password";
                $('.iconi').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
            }
        } 
        
        $(document).ready(function () {
        //CheckBox mostrar contraseña
        $('#PasswordConfirmations').click(function () {
            $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
        });
    });
    </script>
@endpush
