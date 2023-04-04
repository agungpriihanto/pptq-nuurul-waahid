@extends('dashboard.layouts.main')

@section('container')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-10">

                <a href="/dashboard/psb" class="btn btn-primary">
                    <i class="bi bi-arrow-left-short"></i>
                    Kembali
                </a>
                <form action="" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('hapus data?')">
                        <i class="bi bi-trash-fill"></i>
                        Hapus
                    </button>
                </form>

                <table class="table mt-3">
                    <tbody>
                        <tr>
                            <td>FOTO</td>
                            <td><img src="{{ asset('storage/' . $data->pasfoto) }}" width="100px"></td>
                        </tr>
                        <tr>
                            <td>NAMA LENGKAP</td>
                            <td>{{ $data->nama_lengkap }}</td>
                        </tr>
                        <tr>
                            <td>TEMPAT/TANGGAL LAHIR</td>
                            <td>{{ $data->tempat_lahir }}, {{ $data->tanggal_lahir }}</td>
                        </tr>
                        <tr>
                            <td>JENIS KELAMIN</td>
                            <td>{{ $data->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <td>NOMOR HP/WA</td>
                            <td>{{ $data->no_hp }}</td>
                        </tr>
                        <tr>
                            <td>EMAIL</td>
                            <td>{{ $data->email }}</td>
                        </tr>
                        <tr>
                            <td>ALAMAT</td>
                            <td>{{ $data->alamat }}</td>
                        </tr>
                        <tr>
                            <td>ASAL SEKOLAH</td>
                            <td>{{ $data->asal_sekolah }}</td>
                        </tr>
                        <tr>
                            <td>NAMA AYAH</td>
                            <td>{{ $data->nama_ayah }}</td>
                        </tr>
                        <tr>
                            <td>NAMA IBU</td>
                            <td>{{ $data->nama_ibu }}</td>
                        </tr>
                        <tr>
                            <td>PEKERJAAN AYAH</td>
                            <td>{{ $data->pekerjaan_ayah }}</td>
                        </tr>
                        <tr>
                            <td>FOTO KTP</td>
                            <td>
                                <a href="{{ asset('storage/' . $data->ktp) }}" target="_blank">
                                    <img src="{{ asset('storage/' . $data->ktp) }}" width="100px">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>FOTO KK</td>
                            <td>
                                <a href="{{ asset('storage/' . $data->kk) }}" target="_blank">
                                    <img src="{{ asset('storage/' . $data->kk) }}" width="100px">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>FOTO IJAZAH</td>
                            <td>
                                @if ($data->ijazah)
                                    <a href="{{ asset('storage/' . $data->ijazah) }}" target="_blank">
                                        <img src="{{ asset('storage/' . $data->ijazah) }}" width="100px">
                                    </a>
                                @else
                                    <p class="text-danger">Tidak ada dokumen</p>
                                @endif
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
