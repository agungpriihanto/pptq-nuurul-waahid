@extends('layouts.main')

@section('container')
    <div class="mb-5">
        <h2 class="fw-normal mb-0"><strong>{{ $title }}</strong></h2>

        <small class="text-secondary">
            Kategori: {{ $data->category }} |
            {{-- Oleh
            <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">
                <small>{{ $post->author->name }}</small>
            </a> 
            di
            <a class="text-decoration-none" href="/categories/{{ $data->category }}">
                <small>{{ $data->category }}</small> --}}
            </a>
            <small>Updated: {{ $data->updated_at->diffForHumans() }}</small>
        </small>

        <img src="{{ asset('storage/' . $data->post_img) }}" class="rounded border my-3" width="100%">

        <small class="mt-3 lh-sm">
            {!! $data->body !!}
        </small>
    </div>
@endsection
