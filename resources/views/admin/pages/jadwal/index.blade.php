@extends('master.index')
@section('title','Paket Soal')
@section('breadcrumb','paket soal')

@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">        
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Jadwal Ujian</h3>                 
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <form action="{{ route('jadwal.post') }}">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="inputName">Nama Ujian</label>
                  <input type="text" id="namaUjian" name="namaUjian" class="form-control" placeholder="Exp : Ujian Marketing - Hari Selesa">
                </div>
                <div class="form-group col-md-4">
                  <label for="">Waktu Mengerjakan Ujian</label>
                  <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
                    <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
                </div>
              </div>                      
              <div>
                <div class="form-row align-items-center">
                  <div class="col-auto my-1">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Tambah Calon
                    </button>
                  </div>
                </div>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Posisi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Udin</td>
                    <td>udinsedunia@gmail.com</td>
                    <td>Marketing</td>
                  </tr>
                </tbody>
              </table>
              <button class="btn btn-primary" type="submit">Save & Kirim Email</button>
            </form>    
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-12">
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">List Jadwal Ujian</h3>                 
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
                    <th scope="col">Nama Ujian</th>
                    <th scope="col">Tanggal Ujian</th>                   
                    <th scope="col">Status</th>                   
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Ujian Marketing di Hari Senja</td>
                    <td>12/07/2023 4:05 PM</td>
                    <td>Pending</td>                  
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit">
                        Views
                      </button>
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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Calon Karyawan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <label for="inputName">Email Calon:</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
    </div>


  </section>




  @push('script')
    <script>    
        $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });      
    </script>
    <script>
        $('#reservationdatetimee').datetimepicker({ 
        icons: { time: 'far fa-clock' }, 
        dialogsInBody: true });
    </script>
  @endpush

@endsection