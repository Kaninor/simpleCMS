@extends("layouts.general")

@section("head")
    <title>Kaninor - Tables</title>
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
                <a class="h3 mb-2 text-gray-800" style="visibility: visible" href="#table-section">Table</a>
                <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                    For more information about DataTables, please visit the <a target="_blank"
                                                                               href="https://datatables.net">official DataTables documentation</a>.</p>

                <!-- DataTales Example -->
                <section id="table-section">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @include("components.table")
                            </div>
                        </div>
                    </div>
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
@stop

    <!-- Page level plugins -->

    <!-- Page level custom scripts -->
