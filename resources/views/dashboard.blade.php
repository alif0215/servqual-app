@extends('layout.main')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Aplikasi Perhitungan Service Quality Apotek Yessa Farma Depok</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
<div class="container-fluid">

<div class="row">
<div class="col-lg-4 col-8">

<div class="small-box bg-blue">
<div class="inner">
<h3>100</h3>
<p>Responden</p>
</div>
<div class="icon">
<i class="fas fa-users"></i>
</div>
</div>
</div>

<div class="col-lg-4 col-8">

<div class="small-box bg-cyan">
<div class="inner">
<h3>100</h3>
<p>Sudah Mengisi Kuisioner</p>
</div>
<div class="icon">
<i class="fas fa-check-square"></i>
</div>
</div>
</div>

<div class="col-lg-4 col-8">

<div class="small-box bg-teal">
<div class="inner">
<h3>Puas</h3>
<p>Hasil Service Quality</p>
</div>
<div class="icon">
<i class="fas fa-calculator"></i>
</div>
</div>
</div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection