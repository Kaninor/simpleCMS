@extends("layouts.app")

@section("head")
    <title>Kaninor - Charts</title>
@stop

@section("body")
    <!-- Page Wrapper -->
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
                    <h1 class="h3 mb-2 text-gray-800">Charts</h1>
                    <p class="mb-4">Chart.js is a third party plugin that is used to generate the charts in this theme.
                        The charts below have been customized - for further customization options, please visit the <a
                            target="_blank" href="https://www.chartjs.org/docs/latest/">official Chart.js
                            documentation</a>.</p>

                    <!-- Content Row -->
                    @include("components.chart")

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
    <script src="{{asset("js/chartbar.js")}}"></script>
@stop
