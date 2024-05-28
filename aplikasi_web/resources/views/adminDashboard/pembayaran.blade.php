@extends('componentAdm.main')
@section('content')

<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Dashboard/Pembayaran</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th style="width: 20px">No</th>
                      <th style="width: 120px">Nama Klien</th>
                      <th style="width: 80px">Tanggal Pembayaran</th>
                      <th style="width: 100px">Metode Pembayaran</th>
                      <th style="width: 50px">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>casyana</td>
                            <td>11 Mei 2024</td>
                            <td>Transfer Bank</td>
                            <td class="text-center">
                                <p class="btn btn-success rounded">Sukses</p>
                            </td>
                        </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->

              </div>
              <!-- /.card -->

            </div>
            <!-- /.col -->

          </div>
          <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

      </section>
      <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- ./wrapper -->

@endsection


