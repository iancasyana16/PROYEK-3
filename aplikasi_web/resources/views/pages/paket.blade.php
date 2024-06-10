@extends('component.main')
@section('content')
    <div class="wrapper">
        <div class="container-fluid bg-navy d-flex align-items-center justify-content-center border-top border-3"
            style="height: 250px;">
            <div class="row text-center">
                <h2>PAKET KAMI</h2>
                <div class="div bg-info d-flex m-auto rounded my-2" style="height: 5px; width:200px;"></div>
                <p class="text-center mt-2">
                    Kami adalah pihak jasa yang berdedikasi untuk menyediakan layanan instalasi FTTH (Fiber to the Home)
                    yang andal dan berkualitas. Dengan pengalaman bertahun-tahun di industri telekomunikasi, kami memahami
                    betapa pentingnya konektivitas yang cepat dan andal bagi pelanggan kami. Tim kami terdiri dari para ahli
                    yang berpengalaman dalam merancang, menginstal, dan mengelola jaringan serat optik hingga rumah-rumah
                    pelanggan.
                </p>
            </div>
        </div>

        <div class="row text-center mt-5">
            <h2>PAKET INTERNET</h2>
        </div>
        <div class="row">
            <div class="div bg-info d-flex m-auto rounded my-2" style="height: 5px; width:150px;"></div>
        </div>
        <div class="row d-flex justify-content-center flex-wrap mx-3">
            @foreach ($layanan as $item)
                <div class="card bg-light rounded w-25 text-center p-3 mt-4 mx-1">
                    <h1>BrayNet</h1>
                    <h2>{{ $item['nama_layanan'] }}</h2>
                    <p>Full Fiber To The Home</p>
                    <p>Up to {{ $item['nama_layanan'] }}
                        Download/Upload
                        Unlimited Quota</p>
                    <div class="">
                        <a href="{{ $item->id }}" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#addpaket{{ $item->id }}">Beli Paket</a>
                    </div>
                </div>

                <!-- Modal add -->
                <div class="modal fade" id="addpaket{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title d-flex justify-content-center m-auto" id="staticBackdropLabel">
                                    Formulir Instalasi</h5>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('welcome') }}" method="POST">
                                    @method('POST')
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Pelanggan</label>
                                        <input type="text" class="form-control" id="nama" name="namaKlien"
                                            aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="harga" class="form-label">Nomor HP</label>
                                        <input type="number" class="form-control" id="harga" name="nomorHp"
                                            placeholder="">
                                    </div>
                                    {{-- <div class="mb-3">
                                        <label for="harga" class="form-label">Tanggal Instalasi</label>
                                        <input type="date" class="form-control" id="harga" name="tgl_instalasi"
                                            placeholder="">
                                    </div> --}}
                                    <div class="mb-3">
                                        <label for="harga" class="form-label">Pilihan Paket</label>
                                        <input type="text" class="form-control" id="harga" name="paket"
                                            placeholder="" disabled value="{{ $item->nama_layanan }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="desk" class="form-label">Alamat</label>
                                        <textarea class="form-control" placeholder="" id="alamat" name="alamat"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Konfirmasi</button>
                                        <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container mt-3">
        <img src="{{ asset('storage/image/iklanstatis.png') }}" alt="" srcset="">
    </div>

    <!-- Modal Success -->
    @if (session('success'))
        <div class="modal fade" id="successModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body d-flex m-auto p-4">
                        <h3>Formulir berhasil dikirim, menunggu konfirmasi admin</h3>
                    </div>
                    <div class="modal-footer d-flex m-auto">
                        <button type="submit" class="btn btn-primary m-1" data-bs-dismiss="modal"
                            aria-label="Close">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
