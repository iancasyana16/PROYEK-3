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
                        <h1>Dashboard/Klien</h1>
                        <a href="" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#addklien">+ Add
                            Klien</a>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Modal add -->
        <div class="modal fade" id="addklien" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex justify-content-center m-auto" id="staticBackdropLabel">Add Klien
                            Braynet</h5>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="text" class="form-label">Nama Klien</label>
                                <input type="email" class="form-control" id="text" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="nomorHp" class="form-label">Nomor Telepon</label>
                                <input type="number" class="form-control" id="nomorHp">
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Alamat</label>
                                <textarea class="form-control" placeholder="" id="floatingTextarea"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Pilihan Paket</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Pilihan Paket</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
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
        <div class="modal fade" id="editklien" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex justify-content-center m-auto" id="staticBackdropLabel">Edit Klien
                            Braynet</h5>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="text" class="form-label">Nama Klien</label>
                                <input type="email" class="form-control" id="text" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="nomorHp" class="form-label">Nomor Telepon</label>
                                <input type="number" class="form-control" id="nomorHp">
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Alamat</label>
                                <textarea class="form-control" placeholder="" id="floatingTextarea"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Pilihan Paket</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Pilihan Paket</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
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
                                            <th style="width: 120px">Nama Klien</th>
                                            <th style="width: 80px">Nomor Telepon</th>
                                            <th style="width: 100px">Pilihan Paket</th>
                                            <th style="width: 50px">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Casyana</td>
                                            <td>083101497425</td>
                                            <td>Paket 20 Mbps Brayet</td>
                                            <td class="text-center">
                                                <button class="btn btn-info"><i class="fa-solid fa-pencil"
                                                        data-bs-toggle="modal" data-bs-target="#editklien"></i></button>
                                                <button class="btn btn-danger"><i class="fa-solid fa-trash"
                                                        data-bs-toggle="modal" data-bs-target="#hapus"></i></button>
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
