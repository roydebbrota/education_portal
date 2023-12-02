<!doctype html>
<html lang="en">

<head>

    <title>SSHSL</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="500" /> --}}
    @stack('fb-meta-tag')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    @include('frontend.inc.css')
    @stack('custom-css')
</head>

<body>
    <div class="">
        <!-- manubar end -->
        <div style="max-width: 1600px; margin:auto; min-height: 350px">
            @yield('content')
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('frontend.inc.js')
    @stack('custom-scripts')
</body>

</html>
