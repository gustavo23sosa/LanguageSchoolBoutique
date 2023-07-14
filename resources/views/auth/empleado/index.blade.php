@extends('layouts.app')

@section('content')
<div class="container">



@if(Session::has('mensaje'))
<div class="alert alert-success " role="alert">
{{Session::get('mensaje')}}
</div>@endif






<a href="{{url('empleado/create')}}" class="btn btn-success">Registrar nuevo empleado </a>
<br><br>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{$empleado->id}}</td>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->ApellidoPaterno}}</td>
            <td>{{$empleado->ApellidoMaterno}}</td>
            <td>{{$empleado->Correo}}</td>
            <td>{{$empleado->Telefono}}</td>
            <td>
            <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning">
                Editar
            </a>
             | 
                <form action="{{ url('/empleado/'.$empleado->id) }}" class="d-inline" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿Quieres borrar?')" class="btn btn-danger" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!!$empleados->links()!!}
</div>
@endsection