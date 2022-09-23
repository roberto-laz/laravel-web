<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel CRUD</title>
        {{-- bootstrap 5 --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        {{-- material icons --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        {{-- custom css --}}
        @vite(['resources/css/app.css','resources/css/sb-admin-2.css'])
            <!-- Custom fonts for this template-->
        @vite('resources/vendor/fontawesome-free/css/all.min.css')
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    </head>

        {{--
            /****************************************
            * BODY IS INSIDE EACH CONTENT TEMPLATE *
            ****************************************/ 
        --}}  
        
        @yield('content')


        {{--
            /****************************************
            * JS FILES *
            ****************************************/ 
        --}}  

        <!-- Bootstrap core JavaScript-->
        @vite('resources/vendor/jquery/jquery.min.js')
        @vite('resources/vendor/bootstrap/js/bootstrap.bundle.min.js')

        <!-- Core plugin JavaScript-->
        @vite('resources/vendor/jquery-easing/jquery.easing.min.js')

        <!-- Custom scripts for all pages-->
        @vite(['resources/js/app.js','resources/js/sb-admin-2.js'])

        <!-- Page level plugins -->
        @vite('resources/vendor/chart.js/Chart.min.js')

        <!-- Page level custom scripts -->
        {{-- <script src="js/demo/chart-area-demo.js"></script> --}}
        {{-- <script src="js/demo/chart-pie-demo.js"></script> --}}
 
    </html>