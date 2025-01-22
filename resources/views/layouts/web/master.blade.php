
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') - {{ config('app.name') }} </title>

    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.css') }}"> --}}

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/website.css') }}">
    @yield('page-css')
</head>
<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        @include('layouts.web.navbar')
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>
    @include('layouts.web.footer')

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/js/adminlte.min.js') }}"></script>

    @yield('footer-script')
</body>
</html>