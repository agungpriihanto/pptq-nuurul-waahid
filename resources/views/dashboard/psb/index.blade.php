@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $title }}</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-10">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-10">
        <table class="table table-striped table-sm border shadow-sm">
            <thead>
                <tr>
                    <th scope="col" class="px-3">#</th>
                    <th scope="col" class="px-3">TIMESTAMP</th>
                    <th scope="col" class="px-3">NAMA</th>
                    <th scope="col" class="px-3">ASAL</th>
                    <th scope="col" class="px-3">AKSI</th>
                </tr>
            </thead>
            <tbody>

                @if ($data->count())
                    @foreach ($data as $d)
                        <tr>
                            <td class="px-3">{{ $loop->iteration }}</td>
                            <td class="px-3">{{ $d->created_at }}</td>
                            <td class="px-3">{{ $d->nama_lengkap }}</td>
                            <td class="px-3">{{ $d->alamat }}</td>
                            <td class="px-3">
                                <a href="/dashboard/psb/{{ $d->id }}"
                                    class="btn btn-primary text-decoration-none py-1 px-2">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                                <form action="/dashboard/psb/{{ $d->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger border-0 py-1 px-2"
                                        onclick="return confirm('hapus data?')">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5">
                            <p class="text-muted text-center py-2 mb-0 fw-semibold">Data Tidak Ditemukan</p>
                        </td>
                    </tr>
                @endif

            </tbody>
        </table>
    </div>
@endsection
