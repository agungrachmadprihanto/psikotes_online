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
              <h3 class="card-title">Tambah Paket Soal</h3>                 
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>

            <form action="{{ route('paket.post') }}" method="POST">
            @method('post')
            @csrf
            <div class="card-body">                      
                <div class="form-group">
                  <label for="inputName">Nama Paket</label>
                  <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="form-group col-md-4">
                  <label for="">Lama Waktu Soal</label>
                  <div class="input-group mb-3">
                    <input type="number" name="menit" id="menit" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text">Menit</span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputName">Deskripsi Paket / Cara Mengerjakan</label>
                  <textarea id="summernote" name="summernote">
                    Place <em>some</em> <u>text</u> <strong>here</strong>
                  </textarea>
                </div>                   
              <button class="btn btn-danger">Save Data</button>             
            </div>
            </form>

            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-12">
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">List Paket Soal</h3>                 
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
                    <th scope="col">Paket Soal</th>
                    <th scope="col">Time</th>                   
                    <th scope="col">Action</th>                   
                  </tr>
                </thead>
                @forelse ($paket as $data)
                <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>{{ $data->name }}</td>
                      <td>{{ $data->menit }} Menit</td>                  
                      <td>
                        <a href="{{ route('paket.edit', ['id' => $data->id]) }}" class="btn btn-danger">Edit</a>
                        <a href="{{ route('paket.delete', ['id' => $data->id]) }}" class="btn btn-danger">Delete</a>
                      </td>                  
                    </tr>
                  </tbody>
                @empty
                <tbody>
                    <tr>
                      <th scope="row"></th>
                      <td colspan="3">Data tidak ada</td>                 
                    </tr>
                  </tbody>
                @endforelse
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
    $(function () {
      // Summernote
      $('#summernote').summernote()
  
      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    });
  </script>
  <script>
    $('#summernotee').summernote({
    dialogsInBody: true
    //,airMode: true
  });
  </script>
@endpush