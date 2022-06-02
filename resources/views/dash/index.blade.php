<!DOCTYPE html>
<html>

@include('dash.head')

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        @include('dash.navbar')

        <!-- Left side column. contains the logo and sidebar -->
        @include('dash.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    {{-- <small>Control panel</small> --}}
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/dash"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Main row -->
                <div class="row">
                    <div class="col-lg-7">
                        @yield('container')
                    </div>
                </div>
                <!-- /.row (main row) -->
            </section>
            <!-- /.content -->
        </div>

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 0.0.01
            </div>
            <strong>Copyright &copy; 2022 <a href="/">{{ config('app.name') }} </a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        @include('dash.controlSide')
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    @include('dash.script')
</body>
</html>
