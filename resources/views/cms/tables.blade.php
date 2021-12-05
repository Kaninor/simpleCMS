@extends("layouts.general")

@section("head")
    <title>Kaninor - Tables</title>
    <style>
        html{
            scroll-behavior: smooth;
        }
    </style>
@stop

@section("body")
    <div id="wrapper">

    <!-- Sidebar -->
    @include("components.navbar")
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            @include("components.navbarH")
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <a  class="h3 mb-2 text-gray-800" href="/">Dashboard</a> / <a class="h3 mb-2 text-gray-800" style="visibility: visible" href="#table-section">Table</a>
                <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                    For more information about DataTables, please visit the <a target="_blank"
                                                                               href="https://datatables.net">official DataTables documentation</a>.</p>

                <!-- DataTales Example -->
                <section id="table-section">
                    @include("components.datatable")
                </section>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        @include("components.footer")

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
@stop

@section("scripts")
    <script src="{{ asset("js/datatables.js") }}"></script>
    <script src="{{ asset("js/datatablesjquery.js") }}"></script>
    <script src="{{ asset("js/datatablesbootstrap.js") }}"></script>
    <script src="{{ asset("js/actions/tableActions.js") }}"></script>
    <script>
        $("#update").on("click", function () {
           location.reload();
        }).on("mouseenter", function (){
            $("#update").css({
               "color": "#4e73df"
            });
        }).on("mouseleave", function (){
            $("#update").css({
                "color": "gray"
            });
        });

        $("#add").on("click", function () {
            location.href = "/blank";
        }).on("mouseenter", function (){
            $("#add").css({
                "color": "#4e73df"
            });
        }).on("mouseleave", function (){
            $("#add").css({
                "color": "gray"
            });
        });

        $("#report").on("click", function () {
            location.href = "/40432424";
        }).on("mouseenter", function (){
            $("#report").css({
                "color": "#4e73df"
            });
        }).on("mouseleave", function (){
            $("#report").css({
                "color": "gray"
            });
        });
    </script>
@stop
