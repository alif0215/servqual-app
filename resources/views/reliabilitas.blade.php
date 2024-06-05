@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Reliabilitas Persepsi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Reliabilitas</li>
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
                <h3 class="card-title">Tabel Reliabilitas Persepsi</h3>

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
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th colspan="1" class="text-center">Varians Butir</th>
                      <td colspan="12"></td>
                      <td>54,3914</td>
                    </tr>
                    <tr>
                      <th colspan="1" class="text-center">Varians Total</th>
                      <td>0,70642</td>
                      <td>0,64995</td>
                      <td>0,61879</td>
                      <td>0,58877</td>
                      <td>0,70052</td>
                      <td>0,64873</td>
                      <td>0,58125</td>
                      <td>0,69594</td>
                      <td>0,76858</td>
                      <td>0,75545</td>
                      <td>0,62247</td>
                      <td>0,66717</td>
                      <td>8,00409</td>
                    </tr>
                    <tr>
                        <th colspan="13" class="text-center">Nilai Cronbach Alpha</th>
                        <td>0,93037</td>
                    </tr>
                    <tr>
                        <th colspan="13" class="text-center">Standar</th>
                        <td>0,6</td>
                    </tr>
                    <tr>
                        <th colspan="13" class="text-center">Keterangan</th>
                        <td><span class="badge badge-success">Reliabel</td>
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
            <h1 class="m-0">Reliabilitas Harapan</h1>
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
                <h3 class="card-title">Tabel Reliabilitas Harapan</h3>

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
                      <th colspan="1" class="text-center">Varians Butir</th>
                      <td colspan="12"></td>
                      <td>49,55394</td>
                    </tr>
                    <tr>
                      <th colspan="1" class="text-center">Varians Total</th>
                      <td>0,43181</td>
                      <td>0,49242</td>
                      <td>0,48191</td>
                      <td>0,50212</td>
                      <td>0,50505</td>
                      <td>0,51515</td>
                      <td>0,49242</td>
                      <td>0,48596</td>
                      <td>0,51101</td>
                      <td>0,53777</td>
                      <td>0,53292</td>
                      <td>0,47060</td>
                      <td>5,95919</td>
                    </tr>
                    <tr>
                        <th colspan="13" class="text-center">Nilai Cronbach Alpha</th>
                        <td>0,95972</td>
                    </tr>
                    <tr>
                        <th colspan="13" class="text-center">Standar</th>
                        <td>0,6</td>
                    </tr>
                    <tr>
                        <th colspan="13" class="text-center">Keterangan</th>
                        <td><span class="badge badge-success">Reliabel</td>
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