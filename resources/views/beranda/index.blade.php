<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} - PPTQ NURUL WAHID PURWOREJO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>

    @include('partials.navbar')

    <!-- Banner -->
    <section id="banner" class="banner" style="margin-top: 90px">
        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active slider1" data-bs-interval="5000"></div>
                <div class="carousel-item slider2" data-bs-interval="5000"></div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <div class="container border-start border-end">
        <div class="row">
            <!-- Tentang -->
            <section id="tentang" class="tentang mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 text-center mb-3">
                            <img src="img/pptq.jpg" width="300px">
                        </div>
                        <div class="col-md-8">
                            <h2>Tentang</h2>
                            <h3>PPTQ NURUL WAHID PURWOREJO</h3>
                            <p>PPTQ Nurul Wahid Purworejo adalah salah satu pondok pesantren yang mengkhususkan pada
                                program
                                menghafal
                                Al-Qur'an 30 juz mutqin dalam
                                waktu 1 (satu) tahun. Program ini bertujuan untuk mengimplementasikan visi dan misi
                                Pondok Pesantren
                                Nuurul
                                Waahid Purworejo,
                                sekaligus bertujuan untuk membumikan nilai-nilai Al-Qur'an dalam kehidupan sehari-hari,
                                baik di
                                lingkungan
                                sekitar
                                maupun masyarakat secara luas.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Tagline -->
            <section id="tagline" class="tagline py-5 mt-5 text-light">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-4 mb-2">
                            <img src="img/mudhir.png" width="200px" class="rounded-circle">
                        </div>
                        <div class="col-md-8 mt-5">
                            <h1 class="text-start">&quot;</h1>
                            <p class="mb-4">Menjadikan generasi yang hafidz, mutqin (lancar), amil, memiliki bacaan
                                yang bagus,
                                pemahaman
                                yang memadai, dan akhlak
                                yang mulia yang berkontribusi untuk pembangunan tunas bangsa.</p>
                            <h1 class="text-end">&quot;</h1>
                            <h6>- Visi PPTQ NURUL WAHID -</h6>
                        </div>
                    </div>
            </section>

            <!-- Program -->
            <section id="program" class="program mt-5 text-light">
                <div class="container">
                    <div class="row text-dark">
                        <div class="col-md-6">
                            <h2>Program PPTQ NURUL WAHID</h2>
                            <p>Terdapat beberapa program di PPTQ Nurul Wahid, di antaranya ada yang berupa program utama
                                dan juga
                                program
                                penunjang.</p>
                            <h4>Tahfidz Al-Qur'an</h4>
                            <p>Program unggulan sekaligus program utama PPTQ Nuurul Waahid Purworejo.</p>
                            <h4>Tahsin Al-Qur'an</h4>
                            <p>Program yang bertujuan untuk memperbaiki dan memperbagus bacaan Qur'an.</p>
                            <h4>Bina Pribadi Islam</h4>
                            <p>Kegiatan penunjang yang ditujukan untuk memberikan bimbingan, pembinaan, serta motivasi.
                            </p>
                            <h4>Khitobah</h4>
                            <p>Melalui kegiatan khitobah ini, para santri dilatih untuk dapat berbicara di depan publik,
                                dalam hal
                                ini
                                berupa pidato
                                agama ataupun khutbah, di luar kegiatan hafalan.
                            </p>
                            <h4>Rihlah</h4>
                            <p>Kegiatan <i>camping</i> di pantai, berwisata ke curug(air terjun), <i>hiking</i> ke
                                gunung dan
                                <i>rafting</i>.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <img src="img/program/program1.jpg" class="img-fluid rounded mb-2">
                                <img src="img/program/program2.jpg" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Berita -->
            {{-- <section id="berita" class="berita mt-5 text-light">
                <div class="container">
                    <div class="row text-dark text-center">
                        <h2>Berita</h2>
                        <p>Info kegiatan PPTQ Nurul Wahid Purworejo</p>

                        @foreach ($posts as $post)
                            <div class="col-md-3 mb-3">
                                <div class="card card-posts bg-secondary bg-opacity-10" style="height: 300px">
                                    <a class="text-decoration-none text-light"
                                        href="/categories/{{ $post->category->slug }}">
                                        <div class="position-absolute link px-3 py-2 text-light opacity-75">
                                            {{ $post->category->name }}</div>
                                    </a>
                                    <div class="card-head">
                                        <img src="{{ asset('storage/' . $post->post_img) }}" class="card-img-top">
                                    </div>
                                    <div class="card-body" style="height: 50px">
                                        <strong class="card-title mb-0">
                                            <a class="text-decoration-none text-dark"
                                                href="/p/{{ $post->slug }}">{{ $post->title }}</a>
                                        </strong><br>
                                        <small class="text-muted">{{ $post->updated_at->diffForHumans() }}</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        <div class="col-md-12 d-flex justify-content-center">
                            <div class="row">
                                <div class="card my-3 zoom" style="width: 20rem;">
                                    <a href="/p" target="_blank" class="btn btn-outline-success fw-semibold">LIHAT
                                        LAINNYA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
        </div>
    </div>

    @include('partials.footer')
