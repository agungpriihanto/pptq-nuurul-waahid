@extends('layouts.berita')

@section('container')
    <h1 class="text-center mt-2">{{ $title }}</h1>


    @if ($data->count())
        <a href="/{{ $data[0]->slug }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div style="max-height: 350px; overflow: hidden;">
                                <img src="{{ asset('storage/' . $data[0]->post_img) }}" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a class=" text-decoration-none text-dark"
                                        href="/{{ $data[0]->slug }}">{{ $data[0]->title }}</a></h5>
                                {{-- <small class="text-secondary">
                                    Oleh 
                                    <a class="text-decoration-none text-link" href="/authors/{{ $data[0]->author->username }}">
                                        {{ $data[0]->author->name }}
                                    </a> 
                                    di  --}}
                                {{-- <a class="text-decoration-none text-link" href="/categories/{{ $data[0]->category }}">
                                    {{ $data[0]->category }}
                                </a> --}}
                                </small>
                                <p class="card-text">{{ $data[0]->excerpt }}</p>
                                <p class="card-text"><small
                                        class="text-muted">{{ $data[0]->updated_at->diffForHumans() }}</small></p>
                                <a class="text-decoration-none text-link" href="/{{ $data[0]->slug }}">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    @else
        <h5 class="text-secondary text-center">Post Tidak Ditemukan</h5>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($data->skip(1) as $d)
                <div class="col-md-3 mb-3">
                    <a href="/{{ $d->slug }}">
                        <div class="card card-posts">
                            <div class="position-absolute link px-3 py-2 text-light opacity-75">
                                {{ $d->category }}
                            </div>
                            <div class="card-head">
                                <img src="{{ asset('storage/' . $d->post_img) }}" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a class="text-decoration-none text-dark" href="/{{ $d->slug }}">
                                        {{ $d->title }}
                                    </a>
                                </h5>
                                {{-- <small class="text-secondary">
                                Oleh 
                                <a class="text-decoration-none text-link" href="/authors/{{ $post->author->username }}">
                                    {{ $post->author->name }}
                                </a>
                            </small> --}}
                                <p class="card-text mb-2">
                                    <small class="text-muted">{{ $d->updated_at->diffForHumans() }}</small>
                                </p>
                                <p class="card-text mb-2">
                                    <small class="fs-6">{{ $d->excerpt }}</small>
                                </p>

                            </div>
                            <div class="d-flex align-items-end justify-content-end mt-2">
                                <a class="d-block position-absolute text-decoration-none text-light"
                                    href="/{{ $d->slug }}">
                                    <div class="link py-2 px-3 opacity-75">
                                        <strong>Selengkapnya</strong>
                                        <i class="bi bi-chevron-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
