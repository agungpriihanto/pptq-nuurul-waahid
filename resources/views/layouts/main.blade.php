<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} - PPTQ NURUL WAHID PURWOREJO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>

    @include('partials.navbar')
    <div style="height: 90px"></div>
    <div class="container mt-3 border-start border-end">
        <div class="row">
            <div class="col-lg-8">
                @yield('container')
            </div>
            <div class="col-lg-4 d-none d-sm-none d-md-block my-5">
                @include('partials.sidebar')
            </div>
        </div>
    </div>

    @include('partials.footer')
</body>

</html>
