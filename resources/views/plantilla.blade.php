<!DOCTYPE html>
<html lagn="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Document</title>
        <link rel="icon" href="{{$blog[0]["icono"]}}">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
        <!-- CSS Tags -->
        <link rel="stylesheet" href="css/plugins/tagsinput.css" />
        <!-- CSS Summernote -->
        <link rel="stylesheet" href="css/plugins/summernote.css" />
        <!-- CSS Notie -->
        <link rel="stylesheet" href="css/plugins/notie.css" />
        <!-- CSS Adminlte -->
        <link rel="stylesheet" href="css/plugins/OverlayScrollbars.min.css" />
        <link rel="stylesheet" href="css/plugins/adminlte.min.css" />

        <!-- Google Font: Source Sans Pro -->
        <link
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
            rel="stylesheet"
        />
        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- JS Bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- JS Fontawesome -->
        <script
            src="https://kit.fontawesome.com/bd9c63fc8e.js"
            crossorigin="anonymous"
        ></script>
        <!-- JS Tags -->
        <script src="js/plugins/tagsinput.js"></script>
        <!-- JS Summernote -->
        <script src="js/plugins/summernote.js"></script>
        <!-- JS Notie -->
        <script src="js/plugins/notie.js"></script>
        <!-- JS Adminlte -->
        <script src="js/plugins/adminlte.js"></script>
        <script src="js/plugins/jquery.overlayScrollbars.min.js"></script>
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Se manda a llamar la vista del HEADER -->
            @include('modulos.header')
            <!-- Se manda a llamar la vista del SIDEBAR (menu del lado derecho) -->
            @include('modulos.sidebar')
            <!-- Se manda a llamar la vista de inicio  -->
            @yield('content')
            <!-- Se manda a llamar la vista del FOOTER -->
            @include('modulos.footer')
        </div>
        <input type="hidden" id="ruta" value="{{url('/')}}">
        <script src="js/codigo.js"></script>
    </body>
</html>
