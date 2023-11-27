<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@php echo str_replace("_", " ", env('APP_NAME')); @endphp</title>

    <link rel="stylesheet" href="fonts/all.min.css">
    <link rel="stylesheet" href="css/sb-admin-2.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/select.dataTables.min.css">
    <link rel="stylesheet" href="css/fixedColumns.bootstrap4.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="css/fixedHeader.dataTables.min.css">
    <link rel="stylesheet" href="css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="css/print.min.css">
    <link rel="stylesheet" href="css/pace-theme-default.min.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->

    <!-- <script src="../resources/js/jquery.min.js"></script> -->
    <!-- <script src="../resources/js/jquery-3.5.1.js"></script> -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <!-- <script src="../resources/js/datepicker.min.js"></script> -->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/dataTables.select.min.js"></script>
    <script src="js/datatables-demo.js"></script>
    <script src="js/dataTables.fixedColumns.min.js"></script>
    <script src="js/dataTables.fixedHeader.min.js"></script>
    <script src="js/dataTables.fixedHeader.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/chart-area-demo.js"></script>
    <script src="js/chart-pie-demo.js"></script>
    <script src="js/sweatalert.js"></script>
    <script src="js/dataTables.buttons.min.js"></script>
    <script src="js/jszip.min.js"></script>
    <script src="js/buttons.flash.min.js"></script>
    <script src="js/buttons.html5.min.js"></script>
    <script src="js/pace.min.js"></script>
    <script src="js/print.min.js"></script>
    <script src="js/jquery.number.min.js"></script>
    {{-- <script src="../resources/js/jquery.number.min.js.map"></script> --}}
    <script>
        setInterval(refreshToken, 3900000); // 65min

        function refreshToken() {
            $.get('get-csrf').done(function(data) {
                if (data != document.querySelector('meta[name="csrf-token"]').content) {
                    console.log("token expired");
                    window.location.href = "/promosi/public/login";
                } else {
                    console.log("token valid");
                }
            });
        }
    </script>
    <!-- <script>
        $(document).ready(function() {
            $("#sidebarToggle").click(function() {
                $("#accordionSidebar").toggleClass("toggled");
            });
        });
    </script> -->
</head>

<body id="page-top">
    <div id="wrapper">
        @include('sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @include('header')

                @yield('content')
            </div>
        </div>
    </div>

    @stack('page-script')
</body>

</html>
