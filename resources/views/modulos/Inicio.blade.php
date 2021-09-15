@extends('plantilla')
@section('content')
<div class="content-wrapper">
<section class="content-header">
<h1>Inicio</h1>
</section>
<section class="content">
    <div class="box">
        <div class="box-body">
            <div class="col-md-6 bg-primary">
                <h1>Bienvenidos</h1>
                @if (auth()->user()->rol=="Administrador")
                <a href="Editar-Inicio/{{$inicio->id}}">
                    <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
                </a>
                @endif
                <hr>
                <h2>Dias:</h2>
                <h3>{{$inicio->dias}}</h3>
                <hr>
                <h2>Horario:</h2>
                <h3>Desde {{$inicio->horaInicio}}</h3>
                <h3>Hasta {{$inicio->horaFin}}</h3>
                <hr>
                <h2>Direccion:</h2>
                <h3>{{$inicio->direccion}}</h3>
                <hr>
                <h2>Contactos:</h2>
                <h3>Telefono:{{$inicio->telefono}}
                <br>
                Correo:{{$inicio->email}}</h3>
                <hr>
                
            </div>
            <div class="col-md-6">
 
            </div>
        </div>
    </div>
</section>
</div>
@endsection