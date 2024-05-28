@extends('component.main')
@section('content')

<div class="wrapper">

    <div class="container-fluid bg-navy d-flex align-items-center justify-content-center border-top border-3"
        style="height: 250px;">
        <div class="row text-center">
            <h2>HUBUNGI KAMI</h2>
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
        <div class="row text-center">
            <h2>ALAMAT KANTOR</h2>
            <div class="div bg-info d-flex m-auto rounded my-2" style="height: 5px; width:200px;"></div>
        </div>
        <div class="row text-center mt-3">
            <i class="fa-solid fa-map-location-dot text-info fs-1"></i>
            <p class="fs-3">Blok. Sukajadi RT.06/RW.03 Desa Tukdana Kecamatan Tukdana Kabupaten Indramayu</p>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d700.7085304355962!2d108.28553386272397!3d-6.54616006052684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1716610902874!5m2!1sid!2sid"
                height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="row mt-5 text-center">
        <h2>SOSIAL MEDIA</h2>
        <div class="div bg-info d-flex m-auto rounded my-2" style="height: 5px; width:200px;"></div>
    </div>
    <div class="container mt-2 d-flex justify-content-center">
        <div class="d-flex justify-content-center m-1">
            <div class="card bg-light rounded text-center align-items-center d-flex" style="width: 150px; height:100px;">
                <i class="fa-brands fa-square-whatsapp fs-1 text-navy mt-2"></i>
                <p class="mt-2">083101497425</p>
            </div>
        </div>
        <div class="d-flex justify-content-center m-1">
            <div class="card bg-light rounded text-center align-items-center d-flex" style="width: 150px; height:100px;">
                <i class="fa-solid fa-envelope fs-1 text-navy mt-2"></i>
                <p class="mt-2">Braynet@info.com</p>
            </div>
        </div>
        <div class="d-flex justify-content-center m-1">
            <div class="card bg-light rounded text-center align-items-center d-flex" style="width: 150px; height:100px;">
                <i class="fa-brands fa-square-instagram fs-1 text-navy mt-2"></i>
                <p class="mt-2">@Bray_Net</p>
            </div>
        </div>
        <div class="d-flex justify-content-center m-1">
            <div class="card bg-light rounded text-center align-items-center d-flex" style="width: 150px; height:100px;">
                <i class="fa-brands fa-square-facebook fs-1 text-navy mt-2"></i>
                <p class="mt-2">BrayNet</p>
            </div>
        </div>
    </div>

</div>

@endsection
