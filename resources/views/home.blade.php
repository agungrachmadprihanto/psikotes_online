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

        <!-- Main content -->
        <div class="content">
          <div class="container">
            <div class="row">     
              <!-- /.col-md-6 -->
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 style="text-align: center;">Selamat datang di website career</h3>
                    <h2 style="text-align: center;" class="initial-scale">BPR Mandiri Artha Abadi</h2>
                  </div>
                    <div class="card-body">
                    <!-- <h6 class="card-title">Special title treatment</h6> -->
                        <p class="card-text" style="font-size: 20px;">Lakukan pengisian data diri sebelum memulai Tes bisa klik tombol di bawah ataupun bisa klik menu biodata</p>
                        <div class="row">
                            <div class="col text-center">
                              <button class="btn btn-danger">Isi data diri</button>
                            </div>
                        </div>
                    </div>
                </div>     
              </div>
              <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
 
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->
  @include('includes.footer')


</div>

    @include('includes.scripts.script')


</body>
</html>
