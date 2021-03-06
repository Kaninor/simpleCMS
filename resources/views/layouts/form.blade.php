<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('cms.png') }}">
    <script src="{{ asset("js/jquery.js") }}"></script>
    <!-- Custom fonts for this template-->
    <link href="{{ asset("css/all.css") }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset("css/new.css") }}" rel="stylesheet">
    @yield('head')
</head>

<body class="bg-gradient-primary">
    @yield('body')

    <script src="{{ asset("js/bootstrapjs.js") }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset("js/jqueryeasing.js") }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset("js/sb.js") }}"></script>
    @yield('scripts')
</body>

</html>