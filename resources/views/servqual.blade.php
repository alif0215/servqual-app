@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Hasil Jawaban Persepsi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Servqual</li>
            </ol>
          </div><!-- /.col -->
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
                <table class="table table-bordered text-nowrap">
                  <thead>
                    <tr>
                      <th>Kode Pertanyaan</th>
                      <th>Pertanyaan</th>
                      <th>Dimensi</th>
                      <th>Total</th>
                      <th>Rata-rata Pertanyaan</th>
                      <th>Rata-rata Dimensi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>TAN001</td>
                        <td>Kebersihan fasilitas di area apotek</td>
                        <td>Tangible</td>
                        <td>422</td>
                        <td>4,22</td>
                        <td class="text-center" rowspan="3">4,14</td>
                    </tr> 
                    
                    <tr>
                        <td>TAN002</td>
                        <td>Apotek memiliki ketersediaan fasilitas penunjang (Ruang tunggu, Tempat Parkir)</td>
                        <td>Tangible</td>
                        <td>414</td>
                        <td>4,14</td>
                    </tr>

                    <tr>
                        <td>TAN003</td>
                        <td>Kerapihan dan Kebersihan yang dimiliki karyawan</td>
                        <td>Tangible</td>
                        <td>406</td>
                        <td>4,06</td>
                    </tr>

                    <tr>
                        <td>REA001</td>
                        <td>Apotek memberikan proses pelayanan pembelian dengan mudah</td>
                        <td>Reability</td>
                        <td>414</td>
                        <td>4,14</td>
                        <td class="text-center" rowspan="2">4,11</td>
                    </tr> 
                    
                    <tr>
                        <td>REA002</td>
                        <td>Apotek menyediakan produk dengan kualitas terbaik</td>
                        <td>Reability</td>
                        <td>408</td>
                        <td>4,08</td>
                    </tr>

                    <tr>
                        <td>RES001</td>
                        <td>Karyawan dapat membantu pelanggan ketika dibutuhkan</td>
                        <td>Responsiveness</td>
                        <td>414</td>
                        <td>4,14</td>
                        <td class="text-center" rowspan="2">4,1</td>
                    </tr>
                    
                    <tr>
                        <td>RES002</td>
                        <td>Karyawan bersedia untuk mendampingi pelanggan dalam pemilihan obat</td>
                        <td>Responsiveness</td>
                        <td>406</td>
                        <td>4,06</td>
                    </tr> 
                    
                    <tr>
                        <td>AS001</td>
                        <td>Apotek memiliki persediaan obat dan alat kesehatan yang dijual</td>
                        <td>Assurance</td>
                        <td>389</td>
                        <td>3,89</td>
                        <td class="text-center" rowspan="3">4,026</td>
                    </tr>

                    <tr>
                        <td>AS002</td>
                        <td>Karyawan dapat menguasai informasi tentang produk</td>
                        <td>Assurance</td>
                        <td>407</td>
                        <td>4,07</td>
                    </tr> 

                    <tr>
                        <td>AS003</td>
                        <td>Kebersihan tempat produk yang disediakan</td>
                        <td>Assurance</td>
                        <td>412</td>
                        <td>4,12</td>
                    </tr> 

                    <tr>
                        <td>EMP001</td>
                        <td>Sopan santun karyawan terhadap pelanggan</td>
                        <td>Empathy</td>
                        <td>416</td>
                        <td>4,16</td>
                        <td class="text-center" rowspan="3">4,026</td>
                    </tr>

                    <tr>
                        <td>EMP002</td>
                        <td>Karyawan bersedia mendengarkan dan menerima keluhan dari pelanggan</td>
                        <td>Empathy</td>
                        <td>407</td>
                        <td>4,07</td>
                    </tr> 
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

                  </tbody>
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Hasil Jawaban Harapan</h1>
          </div><!-- /.col -->
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
                <table class="table table-bordered text-nowrap">
                  <thead>
                    <tr>
                      <th>Kode Pertanyaan</th>
                      <th>Pertanyaan</th>
                      <th>Dimensi</th>
                      <th>Total</th>
                      <th>Rata-rata Pertanyaan</th>
                      <th>Rata-rata Dimensi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>TAN001</td>
                        <td>Kebersihan fasilitas di area apotek</td>
                        <td>Tangible</td>
                        <td>415</td>
                        <td>4,15</td>
                        <td class="text-center" rowspan="3">4,21</td>
                    </tr> 
                    
                    <tr>
                        <td>TAN002</td>
                        <td>Apotek memiliki ketersediaan fasilitas penunjang (Ruang tunggu, Tempat Parkir)</td>
                        <td>Tangible</td>
                        <td>425</td>
                        <td>4,25</td>
                    </tr>

                    <tr>
                        <td>TAN003</td>
                        <td>Kerapihan dan Kebersihan yang dimiliki karyawan</td>
                        <td>Tangible</td>
                        <td>423</td>
                        <td>4,23</td>
                    </tr>

                    <tr>
                        <td>REA001</td>
                        <td>Apotek memberikan proses pelayanan pembelian dengan mudah</td>
                        <td>Reability</td>
                        <td>423</td>
                        <td>4,23</td>
                        <td class="text-center" rowspan="2">4,215</td>
                    </tr> 
                    
                    <tr>
                        <td>REA002</td>
                        <td>Apotek menyediakan produk dengan kualitas terbaik</td>
                        <td>Reability</td>
                        <td>420</td>
                        <td>4,2</td>
                    </tr>

                    <tr>
                        <td>RES001</td>
                        <td>Karyawan dapat membantu pelanggan ketika dibutuhkan</td>
                        <td>Responsiveness</td>
                        <td>430</td>
                        <td>4,3</td>
                        <td class="text-center" rowspan="2">4,275</td>
                    </tr>
                    
                    <tr>
                        <td>RES002</td>
                        <td>Karyawan bersedia untuk mendampingi pelanggan dalam pemilihan obat</td>
                        <td>Responsiveness</td>
                        <td>425</td>
                        <td>4,25</td>
                    </tr> 
                    
                    <tr>
                        <td>AS001</td>
                        <td>Apotek memiliki persediaan obat dan alat kesehatan yang dijual</td>
                        <td>Assurance</td>
                        <td>433</td>
                        <td>4,33</td>
                        <td class="text-center" rowspan="3">4,293</td>
                    </tr>

                    <tr>
                        <td>AS002</td>
                        <td>Karyawan dapat menguasai informasi tentang produk</td>
                        <td>Assurance</td>
                        <td>429</td>
                        <td>4,29</td>
                    </tr> 

                    <tr>
                        <td>AS003</td>
                        <td>Kebersihan tempat produk yang disediakan</td>
                        <td>Assurance</td>
                        <td>426</td>
                        <td>4,26</td>
                    </tr> 

                    <tr>
                        <td>EMP001</td>
                        <td>Sopan santun karyawan terhadap pelanggan</td>
                        <td>Empathy</td>
                        <td>418</td>
                        <td>4,18</td>
                        <td class="text-center" rowspan="3">4,235</td>
                    </tr>

                    <tr>
                        <td>EMP002</td>
                        <td>Karyawan bersedia mendengarkan dan menerima keluhan dari pelanggan</td>
                        <td>Empathy</td>
                        <td>429</td>
                        <td>4,29</td>
                    </tr> 
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

                  </tbody>
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Hasil GAP dan Keputusan</h1>
          </div><!-- /.col -->
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
                <h3 class="card-title">Tabel Hasil GAP dan Keputusan</h3>

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
                      <th>Kode Pertanyaan</th>
                      <th>Pertanyaan</th>
                      <th>Dimensi</th>
                      <th>Persepsi</th>
                      <th>Harapan</th>
                      <th>GAP</th>
                      <th>Keputusan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>TAN001</td>
                        <td>Kebersihan fasilitas di area apotek</td>
                        <td>Tangible</td>
                        <td>4,22</td>
                        <td>4,15</td>
                        <td>0,07</td>
                        <td><span class="badge badge-pill badge-success">Pertahankan</span></td>
                    </tr> 
                    
                    <tr>
                        <td>TAN002</td>
                        <td>Apotek memiliki ketersediaan fasilitas penunjang (Ruang tunggu, Tempat Parkir)</td>
                        <td>Tangible</td>
                        <td>4,14</td>
                        <td>4,25</td>
                        <td>-0,11</td>
                        <td><span class="badge badge-pill badge-warning">Perbaikan</span></td>
                    </tr>

                    <tr>
                        <td>TAN003</td>
                        <td>Kerapihan dan Kebersihan yang dimiliki karyawan</td>
                        <td>Tangible</td>
                        <td>4,06</td>
                        <td>4,23</td>
                        <td>-0,17</td>
                        <td><span class="badge badge-pill badge-warning">Perbaikan</span></td>
                    </tr>

                    <tr>
                        <td>REA001</td>
                        <td>Apotek memberikan proses pelayanan pembelian dengan mudah</td>
                        <td>Reability</td>
                        <td>4,14</td>
                        <td>4,23</td>
                        <td>-0,09</td>
                        <td><span class="badge badge-pill badge-warning">Perbaikan</span></td>
                    </tr> 
                    
                    <tr>
                        <td>REA002</td>
                        <td>Apotek menyediakan produk dengan kualitas terbaik</td>
                        <td>Reability</td>
                        <td>4,08</td>
                        <td>4,2</td>
                        <td>-0,12</td>
                        <td><span class="badge badge-pill badge-warning">Perbaikan</span></td>
                    </tr>

                    <tr>
                        <td>RES001</td>
                        <td>Karyawan dapat membantu pelanggan ketika dibutuhkan</td>
                        <td>Responsiveness</td>
                        <td>4,14</td>
                        <td>4,3</td>
                        <td>-0,16</td>
                        <td><span class="badge badge-pill badge-warning">Perbaikan</span></td>
                    </tr>
                    
                    <tr>
                        <td>RES002</td>
                        <td>Karyawan bersedia untuk mendampingi pelanggan dalam pemilihan obat</td>
                        <td>Responsiveness</td>
                        <td>4,06</td>
                        <td>4,25</td>
                        <td>-0,19</td>
                        <td><span class="badge badge-pill badge-warning">Perbaikan</span></td>
                    </tr> 
                    
                    <tr>
                        <td>AS001</td>
                        <td>Apotek memiliki persediaan obat dan alat kesehatan yang dijual</td>
                        <td>Assurance</td>
                        <td>3,89</td>
                        <td>4,33</td>
                        <td>-0,44</td>
                        <td><span class="badge badge-pill badge-warning">Perbaikan</span></td>
                    </tr>

                    <tr>
                        <td>AS002</td>
                        <td>Karyawan dapat menguasai informasi tentang produk</td>
                        <td>Assurance</td>
                        <td>4,07</td>
                        <td>4,29</td>
                        <td>-0,22</td>
                        <td><span class="badge badge-pill badge-warning">Perbaikan</span></td>
                    </tr> 

                    <tr>
                        <td>AS003</td>
                        <td>Kebersihan tempat produk yang disediakan</td>
                        <td>Assurance</td>
                        <td>4,12</td>
                        <td>4,26</td>
                        <td>-0,14</td>
                        <td><span class="badge badge-pill badge-warning">Perbaikan</span></td>
                    </tr> 

                    <tr>
                        <td>EMP001</td>
                        <td>Sopan santun karyawan terhadap pelanggan</td>
                        <td>Empathy</td>
                        <td>4,16</td>
                        <td>4,18</td>
                        <td>-0,02</td>
                        <td><span class="badge badge-pill badge-warning">Perbaikan</span></td>
                    </tr>

                    <tr>
                        <td>EMP002</td>
                        <td>Karyawan bersedia mendengarkan dan menerima keluhan dari pelanggan</td>
                        <td>Assurance</td>
                        <td>4,07</td>
                        <td>4,29</td>
                        <td>-0,22</td>
                        <td><span class="badge badge-pill badge-warning">Perbaikan</span></td>
                    </tr> 
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

                  </tbody>
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Prioritas Perbaikan Layanan</h1>
          </div><!-- /.col -->
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
                <h3 class="card-title">Tabel Prioritas Perbaikan</h3>

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
                      <th>Kode Pertanyaan</th>
                      <th>Pertanyaan</th>
                      <th>GAP</th>
                      <th>Prioritas</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>AS001</td>
                        <td>Apotek memiliki persediaan obat dan alat kesehatan yang dijual</td>
                        <td>-0,44</td>
                        <td class="text-center">1</td>
                    </tr> 
                    
                    <tr>
                        <td>AS002</td>
                        <td>Karyawan dapat menguasai informasi tentang produk</td>
                        <td>-0,22</td>
                        <td class="text-center">2</td>
                    </tr>

                    <tr>
                        <td>EMP002</td>
                        <td>Karyawan bersedia mendengarkan dan menerima keluhan dari pelanggan</td>
                        <td>-0,22</td>
                        <td class="text-center">3</td>
                    </tr>

                    <tr>
                        <td>RES002</td>
                        <td>Karyawan bersedia untuk mendampingi pelanggan dalam pemilihan obat</td>
                        <td>-0,19</td>
                        <td class="text-center">4</td>
                    </tr> 
                    
                    <tr>
                        <td>TAN003</td>
                        <td>Kerapihan dan Kebersihan yang dimiliki karyawan</td>
                        <td>-0,17</td>
                        <td class="text-center">5</td>
                    </tr>

                    <tr>
                        <td>RES001</td>
                        <td>Karyawan dapat membantu pelanggan ketika dibutuhkan</td>
                        <td>-0,16</td>
                        <td class="text-center">6</td>
                    </tr>
                    
                    <tr>
                        <td>AS003</td>
                        <td>Kebersihan tempat produk yang disediakan</td>
                        <td>-0,14</td>
                        <td class="text-center">7</td>
                    </tr> 
                    
                    <tr>
                        <td>REA002</td>
                        <td>Apotek menyediakan produk dengan kualitas terbaik</td>
                        <td>-0,12</td>
                        <td class="text-center">8</td>
                    </tr>

                    <tr>
                        <td>TAN002</td>
                        <td>Apotek memiliki ketersediaan fasilitas penunjang (Ruang tunggu, Tempat Parkir)</td>
                        <td>-0,11</td>
                        <td class="text-center">9</td>
                    </tr> 

                    <tr>
                        <td>REA001</td>
                        <td>Apotek memberikan proses pelayanan pembelian dengan mudah</td>
                        <td>-0,09</td>
                        <td class="text-center">10</td>
                    </tr> 

                    <tr>
                        <td>EMP001</td>
                        <td>Sopan santun karyawan terhadap pelanggan</td>
                        <td>-0,02</td>
                        <td class="text-center">11</td>
                    </tr>

                    <tr>
                        <td>TAN001</td>
                        <td>Kebersihan fasilitas di area apotek</td>
                        <td>0,07</td>
                        <td class="text-center">12</td>
                    </tr> 
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

                  </tbody>
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tingkat Kepuasan Terhadap Kualitas Pelayanan Per Atribut Service Quality</h1>
          </div><!-- /.col -->
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
                <h3 class="card-title">Tabel Tingkat Kepuasan Terhadap Kualitas Pelayanan</h3>

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
                      <th>Kode Pertanyaan</th>
                      <th>Pertanyaan</th>
                      <th>Dimensi</th>
                      <th>Persepsi</th>
                      <th>Harapan</th>
                      <th>GAP</th>
                      <th>Q=P/H</th>
                      <th>Kategori</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>TAN001</td>
                        <td>Kebersihan fasilitas di area apotek</td>
                        <td rowspan="3">Tangible</td>
                        <td>4,22</td>
                        <td>4,15</td>
                        <td>0,07</td>
                        <td>1,01</td>
                        <td>Sangat Puas</td>
                    </tr> 
                    
                    <tr>
                        <td>TAN002</td>
                        <td>Apotek memiliki ketersediaan fasilitas penunjang (Ruang tunggu, Tempat Parkir)</td>
                        <td>4,14</td>
                        <td>4,25</td>
                        <td>-0,11</td>
                        <td>0,97</td>
                        <td>Puas</td>
                    </tr>

                    <tr>
                        <td>TAN003</td>
                        <td>Kerapihan dan Kebersihan yang dimiliki karyawan</td>
                        <td>4,06</td>
                        <td>4,23</td>
                        <td>-0,17</td>
                        <td>0,95</td>
                        <td>Puas</td>
                    </tr>

                    <tr>
                        <td>REA001</td>
                        <td>Apotek memberikan proses pelayanan pembelian dengan mudah</td>
                        <td rowspan="2">Reability</td>
                        <td>4,14</td>
                        <td>4,23</td>
                        <td>-0,09</td>
                        <td>0,97</td>
                        <td>Puas</td>
                    </tr> 
                    
                    <tr>
                        <td>REA002</td>
                        <td>Apotek menyediakan produk dengan kualitas terbaik</td>
                        <td>4,08</td>
                        <td>4,2</td>
                        <td>-0,12</td>
                        <td>0,97</td>
                        <td>Puas</td>
                    </tr>

                    <tr>
                        <td>RES001</td>
                        <td>Karyawan dapat membantu pelanggan ketika dibutuhkan</td>
                        <td rowspan="2">Responsiveness</td>
                        <td>4,14</td>
                        <td>4,3</td>
                        <td>-0,16</td>
                        <td>0,96</td>
                        <td>Puas</td>
                    </tr>
                    
                    <tr>
                        <td>RES002</td>
                        <td>Karyawan bersedia untuk mendampingi pelanggan dalam pemilihan obat</td>
                        <td>4,06</td>
                        <td>4,25</td>
                        <td>-0,19</td>
                        <td>0,95</td>
                        <td>Puas</td>
                    </tr> 
                    
                    <tr>
                        <td>AS001</td>
                        <td>Apotek memiliki persediaan obat dan alat kesehatan yang dijual</td>
                        <td rowspan="3">Assurance</td>
                        <td>3,89</td>
                        <td>4,33</td>
                        <td>-0,44</td>
                        <td>0,89</td>
                        <td>Puas</td>
                    </tr>

                    <tr>
                        <td>AS002</td>
                        <td>Karyawan dapat menguasai informasi tentang produk</td>
                        <td>4,07</td>
                        <td>4,29</td>
                        <td>-0,22</td>
                        <td>0,94</td>
                        <td>Puas</td>
                    </tr> 

                    <tr>
                        <td>AS003</td>
                        <td>Kebersihan tempat produk yang disediakan</td>
                        <td>4,12</td>
                        <td>4,26</td>
                        <td>-0,14</td>
                        <td>0,96</td>
                        <td>Puas</td>
                    </tr> 

                    <tr>
                        <td>EMP001</td>
                        <td>Sopan santun karyawan terhadap pelanggan</td>
                        <td rowspan="2">Empathy</td>
                        <td>4,16</td>
                        <td>4,18</td>
                        <td>-0,02</td>
                        <td>0,99</td>
                        <td>Puas</td>
                    </tr>

                    <tr>
                        <td>EMP002</td>
                        <td>Karyawan bersedia mendengarkan dan menerima keluhan dari pelanggan</td>
                        <td>4,07</td>
                        <td>4,29</td>
                        <td>-0,22</td>
                        <td>0,94</td>
                        <td>Puas</td>
                    </tr> 
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

                  </tbody>
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tingkat Kepuasan Terhadap Kualitas Pelayanan Per Dimensi</h1>
          </div><!-- /.col -->
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
                <h3 class="card-title">Tabel Tingkat Kepuasan Terhadap Kualitas Pelayanan</h3>

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
                      <th>Dimensi</th>
                      <th>Persepsi</th>
                      <th>Harapan</th>
                      <th>GAP</th>
                      <th>Q=P/H</th>
                      <th>Kategori</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>1</td>
                        <td class="font-italic">Tangible</td>
                        <td>4,14</td>
                        <td>4,21</td>
                        <td>-0,07</td>
                        <td>0,98</td>
                        <td>Puas</td>
                    </tr> 

                    <tr>
                        <td>2</td>
                        <td class="font-italic">Reability</td>
                        <td>4,11</td>
                        <td>4,21</td>
                        <td>-0,1</td>
                        <td>0,97</td>
                        <td>Puas</td>
                    </tr> 

                    <tr>
                        <td>3</td>
                        <td class="font-italic">Responsiveness</td>
                        <td>4,1</td>
                        <td>4,27</td>
                        <td>-0,17</td>
                        <td>0,96</td>
                        <td>Puas</td>
                    </tr>
                    
                    <tr>
                        <td>4</td>
                        <td class="font-italic">Assurance</td>
                        <td>4,02</td>
                        <td>4,29</td>
                        <td>-0,27</td>
                        <td>0,93</td>
                        <td>Puas</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td class="font-italic">Empathy</td>
                        <td>4,11</td>
                        <td>4,23</td>
                        <td>-0,12</td>
                        <td>0,97</td>
                        <td>Puas</td>
                    </tr>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

                  </tbody>
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