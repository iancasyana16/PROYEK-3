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
                        <a href="" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#addpaket">+ Add
                            Paket</a>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Modal add -->
        <div class="modal fade" id="addpaket" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex justify-content-center m-auto" id="staticBackdropLabel">Add Paket
                            Braynet</h5>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="text" class="form-label">Nama Paket</label>
                                <input type="email" class="form-control" id="text" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga Paket</label>
                                <input type="number" class="form-control" id="harga">
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Deskripsi</label>
                                <textarea class="form-control" placeholder="" id="floatingTextarea"></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                                    aria-label="Close">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal edit -->
        <div class="modal fade" id="editpaket" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex justify-content-center m-auto" id="staticBackdropLabel">Edit Paket
                            Braynet</h5>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="text" class="form-label">Nama Paket</label>
                                <input type="email" class="form-control" id="text" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga Paket</label>
                                <input type="number" class="form-control" id="harga">
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Deskripsi</label>
                                <textarea class="form-control" placeholder="" id="floatingTextarea"></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                                    aria-label="Close">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal hapus -->
        <div class="modal fade" id="hapus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body d-flex m-auto p-4">
                        <h3>Yakin Hapus Data Ini ?</h3>
                    </div>
                    <div class="modal-footer d-flex m-auto">
                        <button type="button" class="btn btn-danger m-1" data-bs-dismiss="modal">Simpan</button>
                        <button type="button" class="btn btn-warning m-1" data-bs-dismiss="modal"
                            aria-label="Close">Batal</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="example2" class="table table-bordered">
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
                                                <button href="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editpaket"><i class="fa-solid fa-pencil"></i></button>
                                                <button href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus"><i class="fa-solid fa-trash"></i></button>
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
