<!-- Navbar -->
<section id="nav">
    <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="{{ asset('img/logo.png') }}" alt="Logo PPTQ NW" width="200px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fw-semibold">
                    <li class="nav-item mx-2">
                        <a class="nav-link text-light {{ Request::is('/') ? 'active' : '' }}" href="/">BERANDA</a>
                    </li>
                    <li class="nav-item mx-2">
                        <div class="dropdown">
                            <a class="nav-link text-light dropdown-toggle {{ Request::is(['tentang-kami', 'visi-dan-misi', 'jadwal-harian', 'fasilitas']) ? 'active' : '' }}"
                                href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PROFIL
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-light" href="/tentang-kami">Tentang Kami</a></li>
                                <li><a class="dropdown-item text-light" href="/visi-dan-misi">Visi dan Misi</a></li>
                                <li><a class="dropdown-item text-light" href="/jadwal-harian">Jadwal Harian</a></li>
                                <li><a class="dropdown-item text-light" href="/fasilitas">Fasilitas</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-light {{ Request::is('p') ? 'active' : '' }}" href="/p">BERITA</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-light {{ Request::is('hubungi-kami') ? 'active' : '' }}"
                            href="/hubungi-kami">KONTAK</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-light {{ Request::is('pendaftaran') ? 'active' : '' }}"
                            href="/pendaftaran">DAFTAR</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidenav -->
    <nav class="navbar bg-light fixed-top d-lg-none d-xl-none d-xxl-none py-3">
        <div class="container">
            <a class="navbar-brand text-light" href="">
                <img src="img/logo.png" alt="Logo PPTQ NW" width="200px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="toggler-icon fs-1">
                    <i class="bi bi-list"></i>
                </span>
            </button>
            <div class="offcanvas offcanvas-end navbar" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header ms-auto">
                    <button type="button" class="btn-close m-2" data-bs-dismiss="offcanvas" aria-label="Close"><i
                            class="bi bi-x-lg text-light"></i>
                    </button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 text-center">
                        <li class="nav-item mx-2">
                            <a class="nav-link text-light {{ Request::is('/') ? 'active' : '' }}"
                                href="/">BERANDA</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link text-light {{ Request::is(['tentang-kami', 'visi-dan-misi', 'jadwal-harian', 'fasilitas']) ? 'active' : '' }}"
                                href="">PROFIL</a>
                            <ul class="list-group mb-3">
                                <li><a class="dropdown-item text-light" href="/tentang-kami">Tentang Kami</a></li>
                                <li><a class="dropdown-item text-light" href="/visi-dan-misi">Visi dan Misi</a></li>
                                <li><a class="dropdown-item text-light" href="/jadwal-harian">Jadwal Harian</a></li>
                                <li><a class="dropdown-item text-light" href="/fasilitas">Fasilitas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link text-light {{ Request::is('berita') ? 'active' : '' }}"
                                href="/berita">BERITA</a>
                        </li>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link text-light {{ Request::is('hubungi-kami') ? 'active' : '' }}"
                                href="/hubungi-kami">KONTAK</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link text-light {{ Request::is('pendaftaran') ? 'active' : '' }}"
                                href="/pendaftaran">DAFTAR</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</section>
