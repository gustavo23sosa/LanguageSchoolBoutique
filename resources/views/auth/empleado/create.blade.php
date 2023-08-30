@extends('layouts.main')

@section('content')
<div class="container">
<form method="POST" action="{{route('subir')}}" accept-charset="UTF-8" enctype="multipart/form-data">
{{ csrf_field() }}

@include('auth.empleado.form', ['modo'=>'Crear'])

</form>
</div>
@endsection