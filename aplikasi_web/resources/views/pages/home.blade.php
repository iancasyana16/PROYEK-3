@extends('component.main')
@section('content')
    <div class="wrapper">

        {{-- IKLAN SLIDER --}}
        <div class="container-fluid mt-3">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="500"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555"
                                dy=".3em">First slide</text>
                        </svg>
                    </div>
                    <div class="carousel-item active">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="500"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444"
                                dy=".3em">Second slide</text>
                        </svg>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="500"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333"
                                dy=".3em">Third slide</text>
                        </svg>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="container">
            <div class="row text-center mt-5">
                <h2>KEUNGGULAN BRAYNET</h2>
            </div>
            <div class="row">
                <div class="div bg-info d-flex m-auto rounded my-2" style="height: 5px; width:200px;"></div>
            </div>
            <div class="row d-flex justify-content-center m-auto">
                <p class="mt-3 text-center w-75">Dengan pesatnya perkembangan teknologi mempengaruhi berbagai aspek
                    kehidupan kita yang semakin bergantung pada Internet. Kualitas dan kecepatan yang terus bertambah
                    menjadi kebutuhan baik di rumah, kantor, dan banyak tempat lainnya membuat kami memberikan layanan
                    terbaik untuk anda.</p>
            </div>
            <div class="row d-flex mt-5">
                <div class="col-md-4">
                    <div class="row text-center">
                        <div class="d-inline align-items-center">
                            <h3 class="d-inline">Unlimited</h3>
                            <i class="fas fa-wifi fs-4 ml-2 text-info"></i>
                        </div>
                        <br>
                        <p class="mt-2">Koneksi BrayNet sangat stabil karena menggunakan jaringan fiber optic yang
                            tercanggih.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row text-center">
                        <div class="d-inline align-items-center">
                            <h3 class="d-inline">Maintainance</h3>
                            <i class="fas fa-gears fs-4 ml-2 text-info"></i>
                        </div>
                        <br>
                        <p class="mt-2">BrayNet memiliki akses maintainance 24 jam dan menggunakan teknisi berpengalaman
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row text-center">
                        <div class="d-inline align-items-center">
                            <h3 class="d-inline">Reliable</h3>
                            <i class="fas fa-bolt fs-4 ml-2 text-info"></i>
                        </div>
                        <br>
                        <p class="mt-2">BrayNet memiliki kecepatan internet yang tinggi dan stabil karena menggunakan
                            jaringan Fiber.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center mt-5">
            <h2>PAKET INTERNET</h2>
        </div>
        <div class="row">
            <div class="div bg-info d-flex m-auto rounded my-2" style="height: 5px; width:150px;"></div>
        </div>
        <div class="button d-flex m-auto justify-content-center mt-2">
            <button class="btn btn-primary m-2 rounded fw-bold">Paket Internet</button>
        </div>
        <div class="row d-flex justify-content-center flex-wrap mx-3">
            @foreach ($layanan->take(3) as $item)
                <div class="card bg-light rounded w-25 text-center p-3 mt-4 mx-1">
                    <h1>BrayNet</h1>
                    <h2>{{ $item['nama_layanan'] }}</h2>
                    <p>Full Fiber To The Home</p>
                    <p>Up to {{ $item['nama_layanan'] }}
                        Download/Upload
                        Unlimited Quota</p>
                </div>
            @endforeach
        </div>

        <div class="container mt-3">
            <img src="{{ asset('storage/image/iklanstatis.png') }}" alt="" srcset="">
        </div>

    </div>
@endsection
