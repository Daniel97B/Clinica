<!doctype html>
<html lang=es>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/homepage.css?ver=1.1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    
  </head>
  <!-- Styles -->
 
  <body>
    <div class=" container-fluid">
      <div class="row">
        <nav class="navbar navbar-light" style="background-color:#152a41;">
          <div class="col-9">
            <a class="navbar" style="color:antiquewhite; font-size: 29;">CLINICA</a>
          </div>
          <!-- Sección de Botones-->
          <div class="col-3">
            @if (Route::has('login'))
            <span class="">
              @auth
              <button class="btn ">
                <a href="{{ url('/home') }}" class="text-sm text- no-underline text-blue-900">Pagina</a>
              </button>

              @else
              <button type="button"
                class=" btn duration-500 ease-in-out 2DA4C7 hover:bg-blue-400 transform hover:-translate-y  ring-inset">
                <a href="{{ url('seleccionar') }}" class="text-m text-blue-50 no-underline">Iniciar sesion</a>
              </button>


              @if (Route::has('register'))
              <button type="button"
                class="btn btn-l duration-500 ease-in-out 2DA4C7 hover:bg-blue-400 transform hover:-translate-y  ring-inset">
                <a href="{{ route('register') }}" class="text-m text-blue-50 no-underline">Registrarse</a>
              </button>
              @endif
              @endauth
            </Span>
            @endif
          </div>
        </nav>
      </div>
    </div>
    <br>
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <figure>
            <div>
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active"  style="border-radius: 20px;" >
                    <img src="../resources/img/doctor1.jpg" class="d-block w-100" alt="Firts slide">
                  </div>
                  <div class="carousel-item">
                    <img src="../resources/img/doctora.jpg" class="d-block w-100" alt="Segcond slide">
                  </div>
                  <div class="carousel-item">
                    <img src="../resources/img/otorino.jpg" class="d-block w-100" alt="Third slide">
                  </div>
                  <button class="carousel-control-prev" data-bs-target="#carouselExampleControls" type="button" data--bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" data-bs-target="#carouselExampleControls" type="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
              </div>
          </figure>
        </div>
        <div class="col-lg-4 col-md-6">
          <h1 style="text-align: center; font-size: larger;">
            <b>Vistanos</b>
          </h1>
          
        </div>
      </div>
      <br>
      <div class="row">
        <aside class="div col-lg-4 col-md-6">
          <div class="BORDER">
            <p >
              Aunque no presentemos ningún problema de salud, es importante que acudamos al médico periódicamente (al
              menos, una vez al año).    
            
              Hoy en dia es muy que común que la gente no le de la debida importancia al realizar un chequeo medico, con
              tal de prevenir ciertas enfemedades como a diabeltes, tuler carpiano, tuberculosis, ETS.
            
              por ello te invitamos a que puedas visitar nuestro centro medico, y en el puedas tener asesoramiento
              <br>
              .
            </p>
          </div>
        </aside>
        <aside class="div col-lg-4 col-md-6">
          <div class="contenedor">
            <figure>
              <img src="../resources/img/Dientes.jpg" class="img-fluid" alt="dientes">
              <div class="capa">
                <h1>
                  Odontología 
                </h1>
                <p class="p">Esta disciplina se encarga de proteger la salud bucal de las personas, prevenir y tratar las enfermedades bucodentales.</p>
              </div>
            </figure>
          </div>
        </aside>
        <aside class="div col-lg-4 col-md-6">
          <div class="div contenedor">
            <figure>
              <img src="../resources/img/hospital2.jpg" class="img-fluid" style="height: 100%; width: 100%" alt="">
              <div class="capa">
                <h1>
                  Medicina General
                </h1>
                <p class="p"> La medicina general es el primer nivel de atención médica y es necesaria para la prevención, detección, tratamiento y seguimiento de enfermedades</p>
              </div>
            </figure>
          </div>
        </aside>
      </div>
      <br>
    <br>
    <!-- Footer -->
    
          <footer class="row text-center text-light" style="background-color: #000000;">
                  <p >
                    © TODOS LOS DERECHOS RESERVADOS A KEVIN , MICHAEL , IVAN BARON 
                    CONTACTOS:3223304871
                  </p>
          </footer>
    </div>
    
    
    
    <style>
      .contenedor {
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;

      }

      .contenedor figure {
        position: relative;
        height: 100%;
        width: 100%;
        overflow: hidden;
        border-radius: 20px;
        cursor: pointer;
      }

      .contenedor figure img {
        transition: all 500ms ease-out;
        width: 100%;
        height: 100%;
      }

      .contenedor figure:hover>img {
        transform: scale(1.3);
      }

      .contenedor figure .capa {
        position: absolute;
        top: 0px;
        bottom: 0px;
        width: 100%;
        height: 100%;
        background-color: rgba(50, 20, 75, 0.493);
        transition: all 0ms ease-out;
        opacity: 0;
        visibility: hidden;
        text-align: center;
        transition: all 500ms ease-out;
      }

      .contenedor figure:hover>.capa {
        opacity: 1;
        visibility: visible;
      }

      .contenedor figure:hover>.capa h1 {
        margin-top: 20%;
        margin-bottom: 20px;
      }

      .contenedor figure .capa h1 {
        color: #fff;

        transition: all 500ms ease-out;
      }

      .contenedor figure .capa h5 {
        color: #fff;
        font-size: 15px;
        line-height: 1.5;
        width: 100px;
        margin: auto;
      }

      article {
        text-align: center;
      }

      .contenedore {
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
      }

      #figure:hover>img {
        transform: scale(1.3);

      }
      .p{
        color: rgb(235, 235, 235);
      }
      .BORDER{
        border-radius:15px;
        background: rgba(30, 221, 110, 0.308);
      }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"></script>
  </body>
  </html>