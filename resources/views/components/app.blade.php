<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>KasirKite | {{ $title }}</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{ url('/') }}/assets/images/kasir.png">

    <link href="{{ url('/') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ url('/') }}/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{ url('/') }}/assets/css/style.css" rel="stylesheet" type="text/css">

    <!-- DataTabels -->
    <link href="{{ url('/') }}/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ url('/') }}/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ url('/') }}/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</head>


<body class="fixed-left">

    @include('sweetalert::alert')

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <x-template.sidebar :menu="$menu" />
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                <x-template.header />
                <!-- Top Bar End -->
                <div class="content-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <x-template.utils.notif />
                            </div>
                        </div>
                    </div>
                    {{ $slot }}
                </div>
            </div>
            {{-- <div class="page-content-wrapper ">

                    <div class="container-fluid">
                       
                    </div> --}}

        </div>
    </div>
    <x-template.footer />

    </div>
    <!-- End Right content here -->

    </div>
    <!-- END wrapper -->


    <!-- jQuery  -->
    <script src="{{ url('/') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('/') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/assets/js/modernizr.min.js"></script>
    <script src="{{ url('/') }}/assets/js/detect.js"></script>
    <script src="{{ url('/') }}/assets/js/fastclick.js"></script>
    <script src="{{ url('/') }}/assets/js/jquery.slimscroll.js"></script>
    <script src="{{ url('/') }}/assets/js/jquery.blockUI.js"></script>
    <script src="{{ url('/') }}/assets/js/waves.js"></script>
    <script src="{{ url('/') }}/assets/js/jquery.nicescroll.js"></script>
    <script src="{{ url('/') }}/assets/js/jquery.scrollTo.min.js"></script>

    <!-- App js -->
    <script src="{{ url('/') }}/assets/js/app.js"></script>

    <!-- Required datatable js -->
    <script src="{{ url('/') }}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script>
        $().DataTable();
    </script>
    <!-- Datatable init js -->
    <script src="{{ url('/') }}/assets/pages/datatables.init.js"></script>
    <!-- Buttons examples -->
    <script src="{{ url('/') }}/assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/datatables/jszip.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="{{ url('/') }}/assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/datatables/buttons.colVis.min.js"></script>
    @stack('scripts')

</body>

</html>
