@extends('master.index')
@section('title','Calon Karyawan')
@section('breadcrumb','calon karyawan')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">        
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Data Calon Karyawan</h3>                 
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            
            <form action="{{ route('calon.post') }}" method="POST">
              @csrf
              @method('post')
            <div class="card-body">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="inputName">Nama Lengkap</label>
                  <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputName">Email</label>
                  <input type="email" id="email" name="email" class="form-control">
                </div> 
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="inputDescription">Nik</label>
                  <input type="number" id="nik" name="nik" class="form-control">
                </div>
                <div class="form-group col-md-3">
                     <label for="inputDescription">Password</label>
                     <input type="text" id="password" name="password" class="form-control" value="{{ $generate }}" readonly>
                </div>
              </div>
              <button class="btn btn-danger" type="submit">Save Data</button>             
            </div>
          </form>   
            
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-12">
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">List Calon Karyawan</h3>                 
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>                   
                    <th scope="col">Nik</th>                   
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>                   
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>udin sedunia</td>
                    <td>udinseduni@gmail.com</td>                  
                    <td>123456789123456</td>                  
                    <td>Marketing</td>
                    <td>
                      <a href="" class="btn btn-primary">Edit</a>
                      <a href="" class="btn btn-danger">Delete</a>
                    </td>                  
                  </tr>
                </tbody>
              </table>             
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection

@push('script')
<script>
    function generateRandomPassword() {
        let r = (Math.random() + 1).toString(36).substring(7);
        $('#password').html(r);
    }
</script>
@endpush