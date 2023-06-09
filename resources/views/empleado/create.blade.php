@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{url('/registrar')}}" method="get" >
@csrf

@include('empleado.form', ['modo'=>'Crear'])

</form>
</div>
@endsection