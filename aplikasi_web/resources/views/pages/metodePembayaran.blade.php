@extends('component.main')
@section('content')

<div class="wrapper">

    <div class="container-fluid bg-navy d-flex align-items-center justify-content-center border-top border-3"
        style="height: 250px;">
        <div class="row text-center">
            <h2>METODE PEMBAYARAN</h2>
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

    <div class="container mt-5">
        <div class="row d-flex">
            <div class="col-lg-6 fw-bold">
                <ul class="nav flex-column">
                    <li class="nav-item">
                      <h1 class="h3" href="#">Daftar Pembayaran</h1>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-dark" href="#">BrayNet Mobile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-dark" href="#">Indomaret</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-dark" href="#">Alfamart</a>
                    </li>
                  </ul>
            </div>
            <div class="col-lg-6">
                <h3>Braynet Mobile</h3>
                <ol>
                    <li>Buka Aplikasi BrayNet Mobile</li>
                    <li>Pembayaran melalui Gopay, OVO dan dapat dilakukan untuk tagihan bulanan pada aplikasi BrayNet Mobile</li>
                    <li>Untuk Pembayaran Instalasi Melalui Website BrayNet</li>
                    <li>Pilih Menu “Internet”</li>
                    <li>Pilih “Koneksi Saya” (klik pada bagian Nama Pelanggan)</li>
                    <li>Pilih “Bayar”</li>
                    <li>Pilih “Metode Pembayaran\" Gopay/Ovo/LinkAja</li>
                    <li>Lanjutkan transaksi sesuai tahap aplikasi masing-masing.</li>
                    <li>Transaksi Selesai</li>
                </ol>
            </div>
        </div>
    </div>



</div>

@endsection
