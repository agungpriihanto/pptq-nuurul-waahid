@extends('layouts.psb')

@section('container')
    <div class="col-lg-8">

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @error('pasfoto')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Harap upload foto, ukuran file tidak boleh lebih dari 2MB!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror
        @error('ktp')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Harap upload foto, ukuran file tidak boleh lebih dari 2MB!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror
        @error('kk')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Harap upload foto, ukuran file tidak boleh lebih dari 2MB!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror
        @error('ijazah')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Harap upload foto, ukuran file tidak boleh lebih dari 2MB!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror

        <div class="text-center text-light mb-3 border p-3 rounded link">
            <img src="img/icon-white.png" width="125px" class="img-fluid">
            <h3>Formulir Pendaftaran</h3>
            <h3>PPTQ Nuurul Waahid 2023/2024</h3>
            <p>Cokroyasan, Ngombol, Purworejo, Jawa Tengah, 54172</p>
        </div>

        <form action="" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="data-diri mb-3 border p-3 rounded link">
                <h4>Data Diri</h4>
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap"
                        name="nama_lengkap" style="text-transform: uppercase"
                        onchange="this.value = this.value.toUpperCase();" value="{{ old('nama_lengkap') }}" required>
                    @error('nama_lengkap')
                        <div class="invalid-feedback">
                            {{ 'Harap isi dengan benar!' }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir"
                        name="tempat_lahir" style="text-transform: uppercase"
                        onchange="this.value = this.value.toUpperCase();" value="{{ old('tempat_lahir') }}">
                    @error('tempat_lahir')
                        <div class="invalid-feedback">
                            {{ 'Harap isi dengan benar!' }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="datepicker" class="form-label">Tanggal Lahir</label>
                    <input type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="datepicker"
                        name="tanggal_lahir" style="text-transform: uppercase" size="30"
                        onchange="this.value = this.value.toUpperCase();" value="{{ old('tanggal_lahir') }}">
                    @error('tanggal_lahir')
                        <div class="invalid-feedback">
                            {{ 'Harap isi dengan benar!' }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select @if (old('jenis_kelamin') == 'PILIH') is-invalid @endif" name="jenis_kelamin">
                        <option value="PILIH">- Pilih -</option>
                        <option value="LAKI - LAKI" @if (old('jenis_kelamin') == 'LAKI - LAKI') selected @endif>LAKI - LAKI
                        </option>
                        <option value="PEREMPUAN" @if (old('jenis_kelamin') == 'PEREMPUAN') selected @endif>PEREMPUAN
                        </option>
                    </select>
                    @if (old('jenis_kelamin') == 'PILIH')
                        <div class="invalid-feedback">
                            {{ 'Harap isi dengan benar!' }}
                        </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                    <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" id="asal_sekolah"
                        name="asal_sekolah" style="text-transform: uppercase"
                        onchange="this.value = this.value.toUpperCase();" value="{{ old('asal_sekolah') }}">
                    @error('asal_sekolah')
                        <div class="invalid-feedback">
                            {{ 'Harap isi dengan benar!' }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="kontak border rounded p-3 mb-3 link">
                <h4>Kontak</h4>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">Nomor HP/WA</label>
                    <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp"
                        name="no_hp" value="{{ old('no_hp') }}">
                    @error('no_hp')
                        <div class="invalid-feedback">
                            {{ 'Harap isi dengan benar!' }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" style="text-transform: lowercase"
                        onchange="this.value = this.value.toLowerCase();" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ 'Harap isi dengan benar!' }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="alamat border rounded p-3 mb-3 link">
                <h4>Alamat</h4>
                <div class="mb-3">
                    <label for="desa" class="form-label">Desa</label>
                    <input type="text" class="form-control @error('desa') is-invalid @enderror" id="desa"
                        name="desa" style="text-transform: uppercase"
                        onchange="this.value = this.value.toUpperCase();" value="{{ old('desa') }}">
                    @error('desa')
                        <div class="invalid-feedback">
                            {{ 'Harap isi dengan benar!' }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="kecamatan" class="form-label">Kecamatan</label>
                    <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan"
                        name="kecamatan" style="text-transform: uppercase"
                        onchange="this.value = this.value.toUpperCase();" value="{{ old('kecamatan') }}">
                    @error('kecamatan')
                        <div class="invalid-feedback">
                            {{ 'Harap isi dengan benar!' }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="kabupaten" class="form-label">Kabupaten/Kota</label>
                    <input type="text" class="form-control @error('kabupaten') is-invalid @enderror" id="kabupaten"
                        name="kabupaten" style="text-transform: uppercase"
                        onchange="this.value = this.value.toUpperCase();" value="{{ old('kabupaten') }}">
                    @error('kabupaten')
                        <div class="invalid-feedback">
                            {{ 'Harap isi dengan benar!' }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <input type="text" class="form-control @error('provinsi') is-invalid @enderror" id="provinsi"
                        name="provinsi" style="text-transform: uppercase"
                        onchange="this.value = this.value.toUpperCase();" value="{{ old('provinsi') }}">
                    @error('provinsi')
                        <div class="invalid-feedback">
                            {{ 'Harap isi dengan benar!' }}
                        </div>
                    @enderror
                </div>
            </div>

            <input type="hidden" name="alamat" id="alamat">

            <div class="data-wali border rounded p-3 mb-3 link">
                <h4>Data Wali</h4>
                <div class="mb-3">
                    <label for="nama_ayah" class="form-label">Nama Ayah</label>
                    <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" id="nama_ayah"
                        name="nama_ayah" style="text-transform: uppercase"
                        onchange="this.value = this.value.toUpperCase();" value="{{ old('nama_ayah') }}">
                    @error('nama_ayah')
                        <div class="invalid-feedback">
                            {{ 'Harap isi dengan benar!' }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nama_ibu" class="form-label">Nama Ibu</label>
                    <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu"
                        name="nama_ibu" style="text-transform: uppercase"
                        onchange="this.value = this.value.toUpperCase();" value="{{ old('nama_ibu') }}">
                    @error('nama_ibu')
                        <div class="invalid-feedback">
                            {{ 'Harap isi dengan benar!' }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
                    <input type="text" class="form-control @error('pekerjaan_ayah') is-invalid @enderror"
                        id="pekerjaan_ayah" name="pekerjaan_ayah" style="text-transform: uppercase"
                        onchange="this.value = this.value.toUpperCase();" value="{{ old('pekerjaan_ayah') }}">
                    @error('pekerjaan_ayah')
                        <div class="invalid-feedback">
                            {{ 'Harap isi dengan benar!' }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="dokumen border rounded p-3 mb-3 link">
                <h4>Dokumen</h4>
                <div class="mb-3">
                    <label for="pasfoto" class="form-label">Pasfoto 4x6</label>
                    <input class="form-control @error('pasfoto') is-invalid @enderror" type="file" id="pasfoto"
                        name="pasfoto">
                    @error('pasfoto')
                        <div class="invalid-feedback">
                            {{ 'Harap upload foto, ukuran file tidak boleh lebih dari 2MB!' }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="ktp" class="form-label">Foto KTP</label>
                    <input class="form-control @error('ktp') is-invalid @enderror" type="file" id="ktp"
                        name="ktp">
                    @error('ktp')
                        <div class="invalid-feedback">
                            {{ 'Harap upload foto, ukuran file tidak boleh lebih dari 2MB!' }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="kk" class="form-label">Foto KK</label>
                    <input class="form-control @error('kk') is-invalid @enderror" type="file" id="kk"
                        name="kk">
                    @error('kk')
                        <div class="invalid-feedback">
                            {{ 'Harap upload foto, ukuran file tidak boleh lebih dari 2MB!' }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="ijazah" class="form-label m-0">Foto Ijazah/Surat Keterangan Lulus</label>
                    <p class="text-muted p-0 mb-1 m-0"><small>(kosongkan apabila belum ada)</small></p>
                    <input class="form-control @error('ijazah') is-invalid @enderror" type="file" id="ijazah"
                        name="ijazah">
                    @error('ijazah')
                        <div class="invalid-feedback">
                            {{ 'Harap upload foto, ukuran file tidak boleh lebih dari 2MB!' }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="submit px-3 mb-4">
                <button type="submit" id="btn" class="btn link text-light px-5 border">
                    Submit
                </button>
            </div>

            <div class="border rounded p-3 mb-3 link">
                <p>Harap lapor apabila menemui error/gagal ketika mengirim data</p>
                <p>
                    CP Admin :
                    <a class="text-light text-decoration-underline" href="http://wa.me/6285728566421">
                        0857 2856 6421
                    </a>
                </p>
            </div>

        </form>
    </div>
@endsection
