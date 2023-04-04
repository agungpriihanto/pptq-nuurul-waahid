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
    <link rel="stylesheet" href="css/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="css/jquery-ui/jquery-ui.structure.css">
    <link rel="stylesheet" href="css/jquery-ui/jquery-ui.theme.css">
    <style>
        body {
            position: absolute;
            top: 0;
            height: 100vh;
            width: 100%;
            background: url('img/psb/bg.jpg');
            filter: brightness();
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 0 -250px;
            background-attachment: fixed;
        }

        @media only screen and (max-width: 768px) {
            body {
                background-position: -185px 0;
            }
        }
    </style>

</head>

<body class="m-0 p-0">
    <div class="container mt-3 mb-5">
        <div class="row justify-content-center">
            @yield('container')
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
{{-- JQuery --}}
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="js/jquery-ui.js"></script>
<script>
    $(function() {
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "1990:2023",
            dateFormat: "dd MM yy",
            dayNames: ["Ahad", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"],
            dayNamesMin: ["A", "S", "S", "R", "K", "J", "S"],
            monthNames: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus",
                "September", "Oktober", "November", "Desember"
            ],
            monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt",
                "Nov", "Des"
            ]
        });
    });
</script>

</html>
