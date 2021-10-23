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
    <link rel="stylesheet" href="{{ asset("css/custom/app.css") }}">
    <style>
        .animated.rotation:hover {
            -webkit-animation-duration: 4s;
            animation-duration: 4s;
            animation-name: rotation;
            transform-origin: center;
        }

        @keyframes rotation {
            from {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg);
            }

            to {
                -webkit-transform: rotate3d(0, 0, 1, 360deg);
                transform: rotate3d(0, 0, 1, 345deg);
            }
        }
    </style>
    @yield('head')
</head>

<body id="page-top">
    @yield('body')

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.blade.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset("js/bootstrapjs.js") }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset("js/jqueryeasing.js") }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset("js/sb.js") }}"></script>
    <script src="{{ asset("js/searchbtn.js") }}"></script>
    <script>
        switch (window.location.href) {
            case "http://127.0.0.1:8000/":
                $("#dashboard").addClass("active");
                break;
            case "http://127.0.0.1:8000/charts":
                $("#charts").addClass("active");
                break;
            case "http://127.0.0.1:8000/tables":
                $("#tables").addClass("active");
                break;
            case "http://127.0.0.1:8000/blank":
                $("#blank").addClass("active");
                break;
        }
    </script>
    @yield('scripts')
</body>

</html>
