@extends('plantilla')
@section ('contenido')
<center>
    <h1>Seleccione como desea Ingresar:</h1>
</center>
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <div class="small-box" style="background-color:#e66bc5; color:white;">
    <div class="inner">
<h3>Secretaria</h3>
<p>Inicie Sesion</p>
    </div>
    <div class="icon">
        <i class ="fa fa-female"></i>
    </div>
<a href="Ingresar" class="small-box-footer">
    Ingresar <i class="fa fa-arrow-circle-right"></i>
</a>
</div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <div class="small-box" style="background-color:#928484; color:white;">
    <div class="inner">
<h3>Doctor</h3>
<p>Inicie Sesion</p>
    </div>
    <div class="icon">
        <i class ="fa fa-user-md"></i>
    </div>
<a href="Ingresar" class="small-box-footer">
    Ingresar <i class="fa fa-arrow-circle-right"></i>
</a>
</div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box" style="background-color:#69e9af; color:rgb(246, 222, 222);">
    <div class="inner">
<h3>Paciente</h3>
<p>Inicie Sesion</p>
    </div>
    <div class="icon">
        <i class ="fa fa-users"></i>
    </div>
<a href="Ingresar" class="small-box-footer">
    Ingresar <i class="fa fa-arrow-circle-right"></i>
</a>
</div>
    
 </div>
 <div class="col-lg-3 col-xs-6">
        <div class="small-box" style="background-color:#9ba1c5; color:white;">
    <div class="inner">
<h3>Administrador</h3>
<p>Inicie Sesion</p>
    </div>
    <div class="icon">
        <i class ="fa fa-male"></i>
    </div>
<a href="Ingresar" class="small-box-footer">
    Ingresar <i class="fa fa-arrow-circle-right"></i>
</a>
</div>
    </div>
    </div>
@endsection