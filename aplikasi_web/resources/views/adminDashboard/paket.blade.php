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
              <h1>Dashboard/Paket</h1>
              <a href="" class="btn btn-primary mt-1">+ Add Paket</a>
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
                      <th style="width: 120px">Nama Paket</th>
                      <th style="width: 80px">Harga</th>
                      <th style="width: 100px">Detail</th>
                      <th style="width: 50px">Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Home FTTH</td>
                            <td>150.000,00</td>
                            <td>Paket 20 Mbps Home FTTH bisa kuat 100 hp dan yutuban saja</td>
                            <td class="text-center">
                                <a href="" class="btn btn-info"><i class="fa-solid fa-pencil"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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


