<nav class="navbar navbar-dark navbar-expand bg-navy sticky-top">
    <div class="container-fluid">
        <div class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('storage/image/logoBray.jpeg') }}" alt="logo" width="60" height="60"
                class="img-circle mx-2">
            <h2>BrayNet</h2>
        </div>
        <div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item mx-3 fw-bold">
                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                  </li>
                  <li class="nav-item mx-3 fw-bold">
                    <a class="nav-link" href="/area">Cek Area</a>
                  </li>
                  <li class="nav-item fw-bold dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Paket & Promo
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item fw-bold" href="/paket">Paket</a></li>
                      <li><a class="dropdown-item fw-bold" href="/promo">Promo</a></li>
                    </ul>
                  </li>
                  <li class="nav-item mx-3 fw-bold">
                    <a class="nav-link" href="/about">Hubungi Kami</a>
                  </li>
                </ul>
        </div>
    </div>
</nav>
