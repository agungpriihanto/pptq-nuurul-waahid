@extends('dashboard.layouts.main')

@section('container')
    <a href="/dashboard/posts" class="btn btn-primary text-decoration-none fw-normal mt-3">
        <i class="bi bi-arrow-left-short"></i> Kembali
    </a>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $title }}</h1>
    </div>

    <div class="col-lg-8 mb-5">
        <form method="POST" action="/dashboard/posts" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title" value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <input type="hidden" class="form-control" id="slug" name="slug" value="{{ old('slug') }}">
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Kategori</label>
                <select class="form-select" id="category" name="category">
                    <option value="">- Pilih Kategori -</option>
                    <option value="acara">Acara</option>
                    <option value="tahfidz">Tahfidz</option>
                    <option value="santri">Santri</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="post_img" class="form-label">Foto</label>
                <input class="form-control @error('post_img') is-invalid @enderror" type="file" id="post_img"
                    name="post_img" onchange="previewImage()">
                <img class="img-fluid img-preview mt-3 col-sm-5">
                @error('post_img')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Isi Post</label>
                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit <span data-feather="send"
                    class="align-text-center"></span></button>
        </form>
    </div>
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
