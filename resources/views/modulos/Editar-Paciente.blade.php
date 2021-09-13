@extends('plantilla')
@section('content')
<div class="content-wrapper">
<section class="content-header">
<h1>Editar el Paciente:{{$paciente->name}}</h1>
</section>
<section class="content">
    <div class="box">
    <div class="box-head">
        <a href="{{ url('Pacientes')}}">
        <button class="btn btn-primary">Volver a Pacientes</button>
        </a>
    </div>
</section>
</div>
 
@endsection
