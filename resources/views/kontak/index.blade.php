@extends('layouts.main')

@section('container')
    <h2 class="fw-normal"><strong>{{ $title }}</strong></h2>
    <!-- Lokasi -->
    <h3 class="fw-normal">Lokasi</h3>
    <iframe class="rounded"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3382.7587518777!2d109.91703861477824!3d-7.815111194368442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7ac32eb7eb13bf%3A0xd9da3dbc20f1beeb!2sPPTQ%20Nuurul%20Waahid%20Purworejo!5e1!3m2!1sid!2sid!4v1677719741802!5m2!1sid!2sid"
        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    <p>PPTQ Nurul Wahid Purworejo RT 002 RW 003 Desa Cokroyasan, Kec. Ngombol, Kabupaten Purworejo, Jawa
        Tengah, 54172</p>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h3 class="fw-normal">Kirim Pesan</h3>
    <form action="" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                placeholder="Masukkan Nama Lengkap" value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                placeholder="Masukkan Email Valid" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control @error('pesan') is-invalid @enderror" id="pesan" rows="3" name="pesan"
                placeholder="Masukkan Pesan">{{ old('pesan') }}</textarea>
            @error('pesan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button class="btn btn-primary link">Kirim</button>
    </form>
@endsection
