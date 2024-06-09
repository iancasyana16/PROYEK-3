@extends('componentAdm.main')
@section('content')
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-8">
                            <h1>Dashboard/Paket</h1>
                            <a href="" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#addpaket">+
                                Add
                                Paket</a>
                        </div>
                        <div class="col-sm-4">
                            @if (session('success'))
                                <div class="container alert alert-success alert-dismissible fade show float-end"
                                    role="alert">
                                    {{ session('success') }}
                                    <i class="fa-solid fa-circle-check"></i>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                        </div>
                        <div class="col-sm-4">
                            @if (session('error'))
                                <div class="container alert alert-danger alert-dismissible fade show float-end"
                                    role="alert">
                                    {{ session('error') }}
                                    <i class="fa-solid fa-circle-exclamation"></i>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
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
                            <form action="{{ route('daspaket.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Paket</label>
                                    <input type="text" class="form-control" id="nama" name="nama_layanan"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga Paket</label>
                                    <input type="number" class="form-control" id="harga" name="harga_layanan">
                                </div>
                                <div class="mb-3">
                                    <label for="desk" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" placeholder="Deskripsikan..." id="deskripsi_layanan" name="deskripsi_layanan"></textarea>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                </div>
                            </form>
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
                                    <table id="example2" class="table table-bordered table-hover">
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
                                            @foreach ($layanan as $index => $item)
                                                <tr>
                                                    <td>{{ $index += 1 }}</td>
                                                    <td>{{ $item['nama_layanan'] }}</td>
                                                    <td>{{ $item['harga_layanan'] }}</td>
                                                    <td>{{ $item['deskripsi_layanan'] }}</td>
                                                    <td class="text-center align-items-center">
                                                        <a href="{{ $item->id }}" class="btn btn-info"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editpaket{{ $item->id }}"><i
                                                                class="fa-solid fa-pencil"></i></a>
                                                        <a href="{{ $item->id }}" class="btn btn-danger"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#hapus{{ $item->id }}"><i
                                                                class="fa-solid fa-trash"></i></a>
                                                    </td>
                                                </tr>

                                                <!-- Modal hapus -->
                                                <div class="modal fade" id="hapus{{ $item->id }}"
                                                    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body d-flex m-auto p-4">
                                                                <h3>Yakin Hapus Data Ini ?</h3>
                                                            </div>
                                                            <div class="modal-footer d-flex m-auto">
                                                                <a href="{{ route('daspaket.destroy', ['id' => $item->id]) }}"
                                                                    class="btn btn-danger m-1">Hapus</a>
                                                                <button type="submit" class="btn btn-warning m-1"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close">Batal</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal edit -->
                                                <div class="modal fade" id="editpaket{{ $item->id }}"
                                                    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title d-flex justify-content-center m-auto"
                                                                    id="staticBackdropLabel">Edit Paket
                                                                    Braynet</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="{{ route('daspaket.update', ['id' => $item->id]) }}"
                                                                    method="post">
                                                                    @method('PUT')
                                                                    @csrf
                                                                    <div class="mb-3">
                                                                        <label for="nama" class="form-label">Nama
                                                                            Paket</label>
                                                                        <input type="text" class="form-control"
                                                                            id="nama" name="nama_layanan"
                                                                            aria-describedby="namaHelp"
                                                                            value="{{ $item->nama_layanan }}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="harga" class="form-label">Harga
                                                                            Paket</label>
                                                                        <input type="number" class="form-control"
                                                                            id="harga" name="harga_layanan"
                                                                            value="{{ $item->harga_layanan }}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="deskripsi"
                                                                            class="form-label">Deskripsi</label>
                                                                        <textarea class="form-control" id="deskripsi" name="deskripsi_layanan" placeholder="">{{ $item->deskripsi_layanan }}</textarea>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Simpan</button>
                                                                        <button type="reset" class="btn btn-danger"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close">Batal</button>
                                                                    </div>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
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
