@extends('dashboard.layouts.main')

@section('container')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8">

                <a href="/dashboard/posts" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i> Kembali</a>
                <a href="/dashboard/posts/{{ $data->slug }}/edit" class="btn btn-warning"><span data-feather="edit"
                        class="align-text-center"></span> Edit</a>
                <form action="/dashboard/posts/{{ $data->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('hapus data?')">
                        <span data-feather="trash" class="align-text-bottom"></span>
                        Hapus
                    </button>
                </form>

                <h2 class="fw-normal mt-3"><strong>{{ $data->title }}</strong></h2>

                <img src="{{ asset('storage/' . $data->post_img) }}" width="600" class="rounded mt-3">

                <article class="mt-3 mb-5 lh-sm">
                    {!! $data->body !!}
                </article>

            </div>
        </div>
    </div>
@endsection
