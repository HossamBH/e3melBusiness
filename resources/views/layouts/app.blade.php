<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="http://cdn.datatables.net/plug-ins/28e7751dbec/integration/jqueryui/dataTables.jqueryui.css">
  <link rel="stylesheet" href="http://cdn.datatables.net/1.10.0/css/jquery.dataTables_themeroller.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">

  <link rel="stylesheet" href="{{asset('adminlte/plugins/jquery-validation/jquery.validate.min.js')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/jquery-validation/additional-methods.min.js')}}">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">

<!-- Google Font: Source Sans Pro -->



  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('layouts.navBar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.sideBar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('header')</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @yield('content')
</div>
  <!-- /.content-wrapper -->
  @include('layouts.footer')

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js"') }}></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js"') }}></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"') }}></script>
<!-- ChartJS -->
<script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js"') }}></script>
<!-- Sparkline -->
<script src="{{ asset('adminlte/plugins/sparklines/sparkline.js"') }}></script>
<!-- JQVMap -->
<script src="{{ asset('adminlte/plugins/jqvmap/jquery.vmap.min.js"') }}></script>
<script src="{{ asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"') }}></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('adminlte/plugins/jquery-knob/jquery.knob.min.js"') }}></script>
<!-- daterangepicker -->
<script src="{{ asset('adminlte/plugins/moment/moment.min.js"') }}></script>
<script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js"') }}></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"') }}></script>
<!-- Summernote -->
<script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js"') }}></script>
<!-- overlayScrollbars -->
<script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"') }}></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.js"') }}></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminlte/dist/js/demo.js"') }}></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('adminlte/dist/js/pages/dashboard.js"') }}></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script type="text/javascript" src="{{asset('adminlte/tables/datatables.min.js')}}"></script>

<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    });
    $('.dataTable').DataTable({
        dom: 'Bfrtip',
        buttons: [ 'print', {
                extend: 'csv',
                charset: 'UTF-16LE',
                bom: true
            }, 'excel' ],
    });
</script>
@stack('scripts')
</body>
</html>
