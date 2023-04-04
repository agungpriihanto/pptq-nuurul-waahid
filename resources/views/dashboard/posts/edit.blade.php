@extends('dashboard.layouts.main')

@section('container')
    <a href="/dashboard/posts" class="btn btn-primary text-decoration-none fw-normal mt-3">
        <i class="bi bi-arrow-left-short"></i> Kembali</a>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $title }}</h1>
    </div>

    <div class="col-lg-8 mb-5">
        <form method="POST" action="/dashboard/posts/{{ $data->slug }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title" value="{{ $data->title }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Kategori</label>
                <select class="form-select" id="category" name="category">
                    <option value="">- Pilih Kategori -</option>
                    <option value="acara" @if ($data->category == 'acara') selected @endif>Acara</option>
                    <option value="tahfidz" @if ($data->category == 'tahfidz') selected @endif>Tahfidz</option>
                    <option value="santri" @if ($data->category == 'santri') selected @endif>Santri</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="post_img" class="form-label">Foto</label>
                <input type="hidden" name="oldImg" value="{{ $data->post_img }}">
                <input class="form-control @error('post_img') is-invalid @enderror" type="file" id="post_img"
                    name="post_img" onchange="previewImage()">
                @if ($data->post_img)
                    <img class="img-fluid img-preview mt-3 col-sm-5 d-block"
                        src="{{ asset('storage/' . $data->post_img) }}">
                @else
                    <img class="img-fluid img-preview mt-3 col-sm-5">
                @endif
                @error('post_img')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Isi Post</label>
                <input id="body" type="hidden" name="body" value="{{ $data->body }}">
                <trix-editor input="body"></trix-editor>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit <span data-feather="send"
                    class="align-text-center"></span></button>
        </form>
    </div>

    {{-- jQuery Script --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- Check Slug --}}
    <script>
        $('#title').change(function(e) {
            $.get('{{ url('dashboard/posts/checkSlug') }}', {
                    'title': $(this).val()
                },
                function(data) {
                    $('#slug').val(data.slug);
                }
            );
        });
    </script>
    <script>
        // Preview Image
        function previewImage() {
            const postImg = document.querySelector('#post_img');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(postImg.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
