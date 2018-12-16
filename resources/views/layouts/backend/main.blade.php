<!DOCTYPE html>
<html>
<head>
  @include('layouts.backend.css')
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

    @include('layouts.backend.navbar')

    @include('layouts.backend.left-sidebar')

    @include('layouts.backend.breadcrumb')

    @yield('content')
    
    @include('layouts.backend.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
<!-- ./wrapper -->
  @include('layouts.backend.script')
  @yield('script')
</body>
</html>
