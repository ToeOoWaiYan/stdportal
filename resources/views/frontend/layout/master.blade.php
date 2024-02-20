<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
    @include('frontend.shared.nav')

    <div class="main-content">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-lg-7 d-flex flex-column hero-container">
                @yield('content_title')
            </div>
            <div class="col-lg-5 search-container">
                <div class="position-relative col-lg-8 offset-lg-2">
                    <input type="text" class="rounded-pill border-0 px-5 py-1 search-bar w-100"
                        placeholder="Search Institute">
                    <i class="fa-sharp fa-solid fa-magnifying-glass position-absolute search-icon"></i>
                </div>
            </div>
        </div>
        @yield('content')
    </div>


</body>

@yield('script')

</html>
