@extends('master.index')
@section('title','Dashboard')
@section('breadcrumb','dashboard')

@section('content')
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

@endsection