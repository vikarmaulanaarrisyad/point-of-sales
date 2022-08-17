<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('AdminLTE-2/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE-2/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE-2/bower_components/Ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE-2/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE-2/dist/css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE-2/bower_components/morris.js/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE-2/bower_components/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet"
        href="{{ asset('AdminLTE-2/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('AdminLTE-2/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE-2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-purple-light sidebar-mini">
    <div class="wrapper">

        @include('partials.header')

        @include('partials.sidebar')

        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    @yield('title')
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    @section('badge')
                    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                    @show
                </ol>
            </section>

            <section class="content">
                @yield('content')
            </section>
        </div>
        @include('partials.footer')
    </div>
    <!-- ./wrapper -->

    <script src="{{ asset('AdminLTE-2/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-2/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="{{ asset('AdminLTE-2/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-2/bower_components/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-2/bower_components/morris.js/morris.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-2/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-2/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-2/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('AdminLTE-2/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-2/bower_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-2/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('AdminLTE-2/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}">
    </script>
    <script src="{{ asset('AdminLTE-2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-2/bower_components/fastclick/lib/fastclick.js') }}"></script>
    <script src="{{ asset('AdminLTE-2/bower_components/chart.js/Chart.js') }}"></script>
    <script src="{{ asset('AdminLTE-2/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-2/dist/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('AdminLTE-2/dist/js/demo.js') }}"></script>

    <script>

    </script>
</body>

</html>
