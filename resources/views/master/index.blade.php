<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BPR Mandiri Artha Abadi</title>

    @include('includes.styles.css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  @include('includes.navbar')  


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">    
    <!-- Sidebar -->
        @include('includes.sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('title')</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">@yield('breadcrumb')</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->
      
    @yield('content')
 
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->
  @include('includes.footer')


</div>

    @include('includes.scripts.script')


</body>
</html>
