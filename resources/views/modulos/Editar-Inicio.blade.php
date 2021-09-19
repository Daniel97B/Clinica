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
                    <form method="post" action="{{ route('update.inicio',$inicio->id) }}" method="POST">
                        @method('PUT')
                        @csrf

                        <h1>Bienvenidos</h1>
                        <hr>
                        <label for="exampleFormControlInput1" class="form-label">
                            Dias:
                        </label>
                        <input type="text" class="form-control" value="{{$inicio->dias}}" name="dias">
                        <hr>
                        <h2>Horarios</h2>
                        <h3>Desde:</h3> <input type="text" class="form-control" name="horaInicio"
                            value={{$inicio->horaInicio}}>

                        <h3>Hasta:</h3> <input type="text" class="form-control" name="horaFin"
                            value="{{$inicio->horaFin}}">

                        <hr>
                        <label for="exampleFormControlInput1" class="form-label">
                            Direccion:
                        </label>
                        <input type="text" class="form-control" value="{{$inicio->direccion}}" name="direccion">

                        <hr>
                        <h2>Contactos:</h2>

                        <label for="exampleFormControlInput1" class="form-label">
                            Telefono:
                        </label>
                        <input type="text" class="form-control" id="" value="{{$inicio->telefono}}" name="telefono">

                        <br>

                        <label for="exampleFormControlInput1" class="form-label">
                            Correo:
                        </label>
                        <input type="text" class="form-control" value="{{$inicio->email}}" name="email">

                        <hr>
                        <button class="btn btn-success" type="submit">Actualizar</button>

                </div>
                <div class="col-md-6">
                    
                </div>
                </form>
            </div>
        </div>
    </section>
</div>

@endsection