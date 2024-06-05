@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Jawaban Harapan</h1>       
          </div><!-- /.col -->
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Jawaban Harapan</li>
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
                <h3 class="card-title">Tabel Jawaban Harapan</h3>
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
                      <th>Kode Jawaban Harapan</th>
                      <th>Nama</th>
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
                      <th>Jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $d)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td>{{ $d -> kode_jawabanh }}</td>
                        <td>{{ $d -> nama }}</td>
                        <td>{{ $d -> h1 }}</td>
                        <td>{{ $d -> h2 }}</td>
                        <td>{{ $d -> h3 }}</td>
                        <td>{{ $d -> h4 }}</td>
                        <td>{{ $d -> h5 }}</td>
                        <td>{{ $d -> h6 }}</td>
                        <td>{{ $d -> h7 }}</td>
                        <td>{{ $d -> h8 }}</td>
                        <td>{{ $d -> h9 }}</td>
                        <td>{{ $d -> h10 }}</td>
                        <td>{{ $d -> h11 }}</td>
                        <td>{{ $d -> h12 }}</td>
                        <td>{{ $d -> jumlah }}</td>
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
                      <th>415</th>
                      <th>425</th>
                      <th>423</th>
                      <th>423</th>
                      <th>420</th>
                      <th>430</th>
                      <th>425</th>
                      <th>433</th>
                      <th>429</th>
                      <th>426</th>
                      <th>418</th>
                      <th>429</th>
                    </tr>
                    <tr>
                      <th class="text-center" colspan="3">Rata-rata Pertanyaan</th>
                      <th>4,15</th>
                      <th>4,25</th>
                      <th>4,23</th>
                      <th>4,23</th>
                      <th>4,2</th>
                      <th>4,3</th>
                      <th>4,25</th>
                      <th>4,33</th>
                      <th>4,29</th>
                      <th>4,26</th>
                      <th>4,18</th>
                      <th>4,29</th>
                    </tr>
                    <tr>
                      <th class="text-center" colspan="3">Rata-rata Dimensi</th>
                      <th class="text-center" colspan="3">4,21</th>
                      <th class="text-center" colspan="2">4,215</th>
                      <th class="text-center" colspan="2">4,275</th>
                      <th class="text-center" colspan="3">4,293</th>
                      <th class="text-center" colspan="2">4,256</th>
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
            <h3 class="card-title">Tabel Hasil Jawaban Harapan</h3>

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
                @foreach ($dataharapan as $d)
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