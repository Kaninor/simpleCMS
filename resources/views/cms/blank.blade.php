@extends("layouts.general")

@section("head")
    <title>Kaninor - Blank</title>
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

                    @include("components.table")

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

@stop
