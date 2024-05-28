@extends('componentAdm.main')
@section('content')

<div class="wrapper">
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard/Home</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="callout callout-info">
                    <h5>Selamat Datang Admin!</h5>
                    <p>admin adalah tulang punggung dalam mengelola segala tantangan dan tugas yang muncul setiap hari. Dengan kegigihan dan ketekunan yang tak kenal lelah, mereka terus bergerak maju, melampaui batas dan menghadapi masalah dengan kepala tegak. Meski terkadang lelah menyerang, admin selalu mengingat tujuan mereka dan melihat setiap rintangan sebagai kesempatan untuk tumbuh dan belajar. Kepercayaan pada diri sendiri menjadi pendorong utama, memungkinkan mereka untuk bertahan dan terus berjuang dalam menghadapi tantangan. Dengan keberanian dan semangat yang tak tergoyahkan, admin menjadi sumber inspirasi bagi semua orang di sekitarnya, memimpin dengan contoh dan menunjukkan bahwa tidak ada yang tidak mungkin dengan tekad yang kuat.</p>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-6">
                      <!-- small card -->
                      <div class="small-box bg-info">
                        <div class="inner">
                          <h3>5</h3>

                          <p>Paket Internet</p>
                        </div>
                        <div class="icon">
                          <i class="fas fa-wifi"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                          Detail <i class="fas fa-arrow-circle-right"></i>
                        </a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small card -->
                      <div class="small-box bg-success">
                        <div class="inner">
                          <h3>0</h3>

                          <p>Pembayaran</p>
                        </div>
                        <div class="icon">
                          <i class="fa-solid fa-money-bills"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                          Detail <i class="fas fa-arrow-circle-right"></i>
                        </a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small card -->
                      <div class="small-box bg-warning">
                        <div class="inner">
                          <h3>100</h3>

                          <p>Klien</p>
                        </div>
                        <div class="icon">
                          <i class="fas fa-user"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                          Detail <i class="fas fa-arrow-circle-right"></i>
                        </a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small card -->
                      <div class="small-box bg-danger">
                        <div class="inner">
                          <h3>65</h3>

                          <p>Statistik</p>
                        </div>
                        <div class="icon">
                          <i class="fas fa-chart-pie"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                          Detail <i class="fas fa-arrow-circle-right"></i>
                        </a>
                      </div>
                    </div>
                    <!-- ./col -->
                  </div>
                  <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

@endsection
