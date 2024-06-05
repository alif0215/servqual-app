@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Jawaban Persepsi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Jawaban Persepsi</li>
            </ol>
          </div><!-- /.col -->
          <div class="row mb-2">
            <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
              Keterangan :
              <p>1 = Sangat Tidak Puas</p>
              <p>2 = Tidak Puas</p>
              <p>3 = Cukup</p>
              <p>4 = Puas</p>
              <p>5 = Sangat Puas</p>
              </div>
            </div>
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
                <h3 class="card-title">Tabel Jawaban Persepsi</h3>

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
                      <th>No</th>
                      <th>Kode Jawaban Persepsi</th>
                      <th>Nama</th>
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
                      <th>Jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $d)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td>{{ $d -> kode_jawabanp }}</td>
                        <td>{{ $d -> nama }}</td>
                        <td>{{ $d -> p1 }}</td>
                        <td>{{ $d -> p2 }}</td>
                        <td>{{ $d -> p3 }}</td>
                        <td>{{ $d -> p4 }}</td>
                        <td>{{ $d -> p5 }}</td>
                        <td>{{ $d -> p6 }}</td>
                        <td>{{ $d -> p7 }}</td>
                        <td>{{ $d -> p8 }}</td>
                        <td>{{ $d -> p9 }}</td>
                        <td>{{ $d -> p10 }}</td>
                        <td>{{ $d -> p11 }}</td>
                        <td>{{ $d -> p12 }}</td>
                        <td>{{ $d -> jumlah}}</td>
                    </tr>                  
                    
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
                    @endforeach
                </tbody>
                <tfooter >                    
                    <tr>
                      <th class="text-center" colspan="3">Total</th>
                      <th>422</th>
                      <th>414</th>
                      <th>406</th>
                      <th>414</th>
                      <th>408</th>
                      <th>414</th>
                      <th>406</th>
                      <th>389</th>
                      <th>407</th>
                      <th>412</th>
                      <th>416</th>
                      <th>407</th>
                    </tr>
                    <tr>
                      <th class="text-center" colspan="3">Rata-rata Pertanyaan</th>
                      <th>4,22</th>
                      <th>4,14</th>
                      <th>4,06</th>
                      <th>4,14</th>
                      <th>4,08</th>
                      <th>4,14</th>
                      <th>4,06</th>
                      <th>3,89</th>
                      <th>4,07</th>
                      <th>4,12</th>
                      <th>4,16</th>
                      <th>4,07</th>
                    </tr>
                    <tr>
                      <th class="text-center" colspan="3">Rata-rata Dimensi</th>
                      <th class="text-center" colspan="3">4,14</th>
                      <th class="text-center" colspan="2">4,11</th>
                      <th class="text-center" colspan="2">4,1</th>
                      <th class="text-center" colspan="3">4,026</th>
                      <th class="text-center" colspan="2">4,115</th>
                    </tr>
                </tfooter>
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

  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Hasil Jawaban Persepsi</h3>

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
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Pertanyaan</th>
                      <th>Sangat Tidak Puas</th>
                      <th>Tidak Puas</th>
                      <th>Cukup</th>
                      <th>Puas</th>
                      <th>Sangat Puas</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($datapersepsi as $d)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td>{{ $d -> kode_pertanyaan }}</td>
                        <td>{{ $d -> stp }}</td>
                        <td>{{ $d -> tp }}</td>
                        <td>{{ $d -> cp }}</td>
                        <td>{{ $d -> p }}</td>
                        <td>{{ $d -> sp }}</td>
                    </tr> 
                    
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
                    @endforeach
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
    </div>
    <!-- /.content -->
  </div>
@endsection