<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/font/font.css" />
    <link rel="stylesheet" href={{ asset('/css/component/footer.css') }} />
    


    <title>main</title>
</head>

<body>
    @include('partials.navbar')
    <div class="container me-4">
        @yield('container')
    </div>



    {{-- <div class="position-absolute bottom-0 end-50 ">@include('partials.footer')</div> --}}



</body>

</html>
