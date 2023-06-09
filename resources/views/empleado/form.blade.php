<h1>{{$modo}} empleado</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach( $errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    

@endif

<div class="form-group">

<label for="Nombre">Nombre </label>
<input  type="text" class="form-control" name="name"  value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}" id="name">

</div>

<div class="form-group">
<label for="apaterno" >Apellido Paterno </label>
<input type="text" class="form-control" name="aPaterno"  value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}" id="ApellidoPaterno">

</div>

<div class="form-group">
<label for="amaterno">Apellido Materno </label>
<input type="text" class="form-control" name="aMaterno"  value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}" id="ApellidoMaterno">

</div>

<div class="form-group">
<label for="correo">Correo </label>
<input type="text" class="form-control" name="email"  value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}" id="Correo">

</div>

<div class="form-group">
<label for="telefono">Telefono </label>
<input type="text" class="form-control" name="telefono"  value="{{isset($empleado->Correo)?$empleado->Telefono:old('Telefono')}}" id="Telefono">

</div>

<br>

<input class="btn btn-success" type="submit" value="{{ $modo }} Datos">

<a href="{{route('home')}}" class="btn btn-primary">Regresar </a>