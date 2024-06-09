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
                            <h1>Dashboard/Klien</h1>
                            <a href="" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#addklien">+
                                Add
                                Klien</a>
                        </div>
                        <div class="col-sm-4">
                            @if (session('success'))
                                <div class="container alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <i class="fa-solid fa-circle-check"></i>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
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
                            <form action="{{ route('dasklien.store') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Klien</label>
                                    <input type="text" name="nama" class="form-control" id="nama"
                                        aria-describedby="">
                                </div>
                                <div class="mb-3">
                                    <label for="nomorHp" class="form-label">Nomor Telepon</label>
                                    <input type="number" name="nomorHp" class="form-control" id="nomorHp">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control" name="alamat" placeholder="" id="alamat"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="text" class="form-label">Pilihan Paket</label>
                                    <select class="form-select" aria-label="Default select example" name="paket">
                                        <option selected>Pilihan Paket</option>
                                        @foreach ($layanan as $item)
                                            <option value="{{ $item->nama_layanan }}">{{ $item['nama_layanan'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                                    <button type="reset" class="btn btn-danger" data-bs-dismiss="modal"
                                        aria-label="Close">Batal</button>
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
                                            @foreach ($klien as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->nomorHp }}</td>
                                                    <td>{{ $item->paket }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ $item->id }}" class="btn btn-info"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editklien{{ $item->id }}"><i
                                                                class="fa-solid fa-pencil"></i></a>
                                                        <a href="{{ $item->id }}" class="btn btn-danger"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#hapus{{ $item->id }}"><i
                                                                class="fa-solid fa-trash"></i></a>
                                                    </td>
                                                </tr>

                                                <!-- Modal edit -->
                                                <div class="modal fade" id="editklien{{ $item->id }}"
                                                    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title d-flex justify-content-center m-auto"
                                                                    id="staticBackdropLabel">Edit Klien
                                                                    Braynet</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="{{ route('dasklien.update', ['id' => $item->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="mb-3">
                                                                        <label for="text" class="form-label">Nama
                                                                            Klien</label>
                                                                        <input type="text" class="form-control"
                                                                            name="nama" id="text"
                                                                            value="{{ $item->nama }}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="nomorHp" class="form-label">Nomor
                                                                            Telepon</label>
                                                                        <input type="number" class="form-control"
                                                                            name="nomorHp" id="nomorHp"
                                                                            value="{{ $item->nomorHp }}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="text"
                                                                            class="form-label">Alamat</label>
                                                                        <textarea class="form-control" name="alamat" placeholder="" id="floatingTextarea">{{ $item->alamat }}</textarea>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="text" class="form-label">Pilihan
                                                                            Paket</label>
                                                                        <select class="form-select"
                                                                            aria-label="Default select example"
                                                                            name="paket">
                                                                            <option selected>Pilihan Paket</option>
                                                                            @foreach ($layanan as $layananItem)
                                                                                <option
                                                                                    value="{{ $layananItem->nama_layanan }}">
                                                                                    {{ $layananItem->nama_layanan }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <button type="submit" class="btn btn-primary"
                                                                            data-bs-dismiss="modal">Simpan</button>
                                                                        <button type="button" class="btn btn-danger"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close">Batal</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

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
                                                                <a href="{{ route('dasklien.destroy', ['id' => $item->id]) }}"
                                                                    class="btn btn-danger m-1">Hapus</a>
                                                                <button type="button" class="btn btn-warning m-1"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close">Batal</button>
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
