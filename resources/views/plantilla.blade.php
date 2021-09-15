<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clinica</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="http://localhost:8080/Clinica/public/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://localhost:8080/Clinica/public/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="http://localhost:8080/Clinica/public/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost:8080/Clinica/public/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="http://localhost:8080/Clinica/public/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="http://localhost:8080/Clinica/public/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="http://localhost:8080/Clinica/public/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="http://localhost:8080/Clinica/public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="http://localhost:8080/Clinica/public/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!--datatables-->
    <link rel="stylesheet" href="http://localhost:8080/Clinica/public/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:8080/Clinica/public/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini login-page">

<div class="wrapper">

</div>
@if(auth::user())
@include('modulos.cabecera')
@if(auth()->user()->rol=="secretaria")
@include('modulos.menuSecretaria')
@endif
@if(auth()->user()->rol=="Doctor")
@include('modulos.menuDoctor')
@endif
@if(auth()->user()->rol=="Administrador")
@include('modulos.menuAdministrador')
@endif
@if(auth()->user()->rol=="Paciente")
@include('modulos.menuPaciente')
@endif
@yield('content')
@else
@yield('contenido')
@endif

    <!-- jQuery 3 -->
    <script src="http://localhost:8080/Clinica/public/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="http://localhost:8080/Clinica/public/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="http://localhost:8080/Clinica/public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="http://localhost:8080/Clinica/public/bower_components/raphael/raphael.min.js"></script>
    <script src="http://localhost:8080/Clinica/public/bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="http://localhost:8080/Clinica/public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="http://localhost:8080/Clinica/public/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="http://localhost:8080/Clinica/public/bower_components/moment/min/moment.min.js"></script>
    <script src="http://localhost:8080/Clinica/public/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="http://localhost:8080/Clinica/public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Slimscroll -->
    <script src="http://localhost:8080/Clinica/public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="http://localhost:8080/Clinica/public/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="http://localhost:8080/Clinica/public/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="http://localhost:8080/Clinica/public/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="http://localhost:8080/Clinica/public/dist/js/demo.js"></script>
    <!-- datatables-->
    <script src="http://localhost:8080/Clinica/public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="http://localhost:8080/Clinica/public/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
    <script src="http://localhost:8080/Clinica/public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- ubicacion del script en la tabla-->
    <script type="text/javascript">
        $(".table").DataTable({
            "language": {
                "sSearch": "Buscar",
                "sEmptyTable": "No hay mas datos",
                "sZerorecords": "No hay resultados",
                "sInfo": "Mostrando registros del _START_ al_END_ de un total _TOTAL_",
                "SInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
                "sInfoFiltered": "(filtrando un total de _MAX_ registros)",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Ultimo",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "sLoadingRecords": "Cargando...",
                "sLengthMenu": "Mostrar _MENU_ registros"

            }
        });
    </script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('registrado')=='Si')
    <script type="text/javascript">
        Swal.fire({
            title: '<strong>HTML <u>example</u></strong>',
            icon: 'success',
            html: 'se registro correctamente</b>, ' +
                '<a href="http://localhost:8080/Clinica/public/Doctores">puesde verificar aqui</a> ' +
                '',
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: false,
            confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
            confirmButtonAriaLabel: 'Thumbs up, great!',
            cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
            cancelButtonAriaLabel: 'Thumbs down'
        })
    </script>

    </script>
    @elseif(session('Agregado')=='Si')
    <script type="text/javascript">
        Swal.fire(
            'El Paciente ha sido Agregado',
            '',
            'success'
        )
    </script>


    @elseif(session('actualizadoP')=='Si')
    <script type="text/javascript">
        Swal.fire(
            'El Paciente ha sido Actualizado',
            '',
            'success'
        )
    </script>

    @endif

    <script type="text/javascript">
        $('.table').on('click', '.EliminarDoctor', function() {
            var Did = $(this).attr('Did');
            Swal.fire({
                title: '¿Desea Eliminar Registro Doctor?',
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar',
                confirmButtonColor: '#3085d6'

            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "Eliminar-Doctor/" + Did;
                }
            })

        })
    </script>

    <script>
        $('.table').on('click', '.EliminarPaciente', function() {
            var Pid = $(this).attr('Pid');
            var Paciente = $(this).attr('Paciente');
            Swal.fire({
                title: '¿Desea Eliminar Registro Paciente: ' + Paciente + '?',
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar',
                confirmButtonColor: '#3085d6'

            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "Eliminar-Paciente/" + Pid;
                }
            })
        })
    </script>

</body>

</html>