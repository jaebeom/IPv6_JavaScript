<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/imgs/logo_transparent.png">
    <title>IPv6 Ready Logo Site | {{ $page->title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    @stack('styles')
</head>
@if($page->bodyclass) <body class="{{ $page->bodyclass }}"> @else <body> @endempty

@include('_components.navbar')

@if($page->title == 'Home')
<div class="jumbotron home">
    <div class="container-fluid">
        <div class="row text-center d-flex justify-content-center">
            <h1 class="display-3 text-white">IPv6 Ready Logo Program</h1>
            <br>
            <div class="col-md-12 text-center coverbtn">
                <a class="btn btn-danger btn-lg" href="https://www.ipv6ready.org/db/index.php/public/?o=4" role="button">List of Approved Products &raquo;</a>
            </div>
        </div>
    </div>
</div>
@else
<div class="jumbotron text-white">
    <div class="container">
        <h1 class="display-3">{{ $page->title }}</h1>
    </div>
</div>
@endif

<div class="container">

    @yield('content')

    <a class="btn" id="scroll_ubtn" href="#topnav" role="button">
        <i class="fas fa-chevron-up"></i>
    </a>
</div> <!-- /container -->

<script src="{{ mix('js/main.js', 'assets/build') }}"></script>
@stack('scripts')
</body>
</html>