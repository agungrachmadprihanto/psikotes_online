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

            <form action="{{ route('paket.update', ['id' => $data->id]) }}" method="POST">
            @method('put')
            @csrf
            <div class="card-body">                      
                <div class="form-group">
                  <label for="inputName">Nama Paket</label>
                  <input type="text" id="name" name="name" class="form-control" value="{{ $data->name }}">
                </div>
                <div class="form-group col-md-4">
                  <label for="">Lama Waktu Soal</label>
                  <div class="input-group mb-3">
                    <input type="number" name="menit" id="menit" class="form-control" value="{{ $data->menit }}">
                    <div class="input-group-append">
                      <span class="input-group-text">Menit</span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputName">Deskripsi Paket / Cara Mengerjakan</label>
                  <textarea id="summernote" name="summernote">
                    {{ $data->deskripsi }}
                  </textarea>
                </div>                   
              <button class="btn btn-danger">Save Data</button>             
            </div>
            </form>

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