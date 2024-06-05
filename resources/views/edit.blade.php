@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Responden</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Edit Responden</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form action="{{ route('responden.update',['id'=>$data->id]) }}" method="POST">
            @csrf
            @method('PUT')
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Responden</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="idResponden">ID Responden</label>
                    <input type="text" class="form-control" id="exampleid_responden" name="id_responden" value="{{ $data->id_responden }}" placeholder="Masukkan ID Responden">
                    @error('id_responden')
                      <small>{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="namaResponden">Nama</label>
                    <input type="text" class="form-control" id="examplenama" name="nama" value="{{ $data->nama }}" placeholder="Masukkan Nama Responden">
                    @error('nama')
                      <small>{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="JenisKelamin">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="examplejenis_kelamin" name="jenis_kelamin" value="{{ $data->jenis_kelamin }}" placeholder="Jenis Kelamin">
                    @error('jenis_kelamin')
                      <small>{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="UmurResponden">Umur</label>
                    <input type="number" class="form-control" id="exampleumur" name="umur" value="{{ $data->umur }}" placeholder="Umur Responden">
                    @error('umur')
                      <small>{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="Pekerjaan">Pekerjaan</label>
                    <input type="text" class="form-control" id="examplepekerjaan" name="pekerjaan" value="{{ $data->pekerjaan }}" placeholder="Pekerjaan Responden">
                    @error('pekerjaan')
                      <small>{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="EmailResponden">Email</label>
                    <input type="email" class="form-control" id="exampleemail" name="email" value="{{ $data->email }}" placeholder="Email Responden">
                    @error('email')
                      <small>{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        </form>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection