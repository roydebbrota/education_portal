<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Education Portal||Dashboard</title>
    @include('backend.inc.css')
    @stack('custom-css')
</head>

<body>
    @include('backend.inc.header')
    <div class="container-fluid">
        <div class="row">
            @include('backend.inc.sidemanu')
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('backend_content')
            </main>
        </div>
    </div>


    @include('backend.inc.js')
    @stack('custom-scripts')
    @include('sweetalert::alert')
</body>

</html>
