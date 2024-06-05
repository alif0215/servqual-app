@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Validitas Persepsi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Validitas</li>
            </ol>
          </div><!-- /.col -->
          <div class="row mb-2">
            <div class="col-sm-12">
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Validitas Persepsi</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered text-nowrap">
                  <thead>
                    <tr>
                      <th colspan="1"></th>
                      <th>P1</th>
                      <th>P2</th>
                      <th>P3</th>
                      <th>P4</th>
                      <th>P5</th>
                      <th>P6</th>
                      <th>P7</th>
                      <th>P8</th>
                      <th>P9</th>
                      <th>P10</th>
                      <th>P11</th>
                      <th>P12</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th colspan="1">rHitung</th>
                      <td>0,814475</td>
                      <td>0,813627</td>
                      <td>0,844076</td>
                      <td>0,831483</td>
                      <td>0,793822</td>
                      <td>0,832164</td>
                      <td>0,805746</td>
                      <td>0,743113</td>
                      <td>0,837082</td>
                      <td>0,788997</td>
                      <td>0,856166</td>
                      <td>0,859186</td>
                    </tr>
                    <tr>
                      <th colspan="1">rTabel</th>
                      <td>0,196</td>
                      <td>0,196</td>
                      <td>0,196</td>
                      <td>0,196</td>
                      <td>0,196</td>
                      <td>0,196</td>
                      <td>0,196</td>
                      <td>0,196</td>
                      <td>0,196</td>
                      <td>0,196</td>
                      <td>0,196</td>
                      <td>0,196</td>
                    </tr>
                    <tr>
                        <th colspan="1">Validitas</th>
                        <td><span class="badge badge-success">Valid</span></td>
                        <td><span class="badge badge-success">Valid</span></td>
                        <td><span class="badge badge-success">Valid</span></td>
                        <td><span class="badge badge-success">Valid</span></td>
                        <td><span class="badge badge-success">Valid</span></td>
                        <td><span class="badge badge-success">Valid</span></td>
                        <td><span class="badge badge-success">Valid</span></td>
                        <td><span class="badge badge-success">Valid</span></td>
                        <td><span class="badge badge-success">Valid</span></td>
                        <td><span class="badge badge-success">Valid</span></td>
                        <td><span class="badge badge-success">Valid</span></td>
                        <td><span class="badge badge-success">Valid</span></td>
                    </tr> 
                  </tbody>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
      <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Validitas Harapan</h1>
          </div><!-- /.col -->
          <div class="row mb-2">
            <div class="col-sm-12">
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Validitas Harapan</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered text-nowrap">
                  <thead>
                    <tr>
                      <th colspan="1"></th>
                      <th>H1</th>
                      <th>H2</th>
                      <th>H3</th>
                      <th>H4</th>
                      <th>H5</th>
                      <th>H6</th>
                      <th>H7</th>
                      <th>H8</th>
                      <th>H9</th>
                      <th>H10</th>
                      <th>H11</th>
                      <th>H12</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th colspan="1">rHitung</th>
                      <td>0,809246</td>
                      <td>0,852691</td>
                      <td>0,810095</td>
                      <td>0,789581</td>
                      <td>0,859733</td>
                      <td>0,808080</td>
                      <td>0,846557</td>
                      <td>0,846653</td>
                      <td>0,877508</td>
                      <td>0,847329</td>
                      <td>0,797475</td>
                      <td>0,847468</td>
                    </tr>
                    <tr>
                      <th colspan="1">rTabel</th>
                      <td>0,196</td>
                      <td>0,196</td>
                      <td>0,196</td>
                      <td>0,196</td>
                      <td>0,196</td>
                      <td>0,196</td>
                      <td>0,196</td>
                      <td>0,196</td>
                      <td>0,196</td>
                      <td>0,196</td>
                      <td>0,196</td>
                      <td>0,196</td>
                    </tr>
                    <tr>
                        <th colspan="1">Validitas</th>
                        <td><span class="badge badge-success">Valid</span></td>
                        <td><span class="badge badge-success">Valid</span></td>
                        <td><span class="badge badge-success">Valid</span></td>
                        <td><span class="badge badge-success">Valid</span></td>
                        <td><span class="badge badge-success">Valid</span></td>
                        <td><span class="badge badge-success">Valid</span></td>
                        <td><span class="badge badge-success">Valid</span></td>
                        <td><span class="badge badge-success">Valid</span></td>
                        <td><span class="badge badge-success">Valid</span></td>
                        <td><span class="badge badge-success">Valid</span></td>
                        <td><span class="badge badge-success">Valid</span></td>
                        <td><span class="badge badge-success">Valid</span></td>
                    </tr> 
                  </tbody>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection