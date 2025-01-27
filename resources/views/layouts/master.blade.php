<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') - {{ config('app.name') }} </title>
    
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-10/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    @yield('page-css')
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('layouts.navbar')
        @include('layouts.sidebar')
        
        <div class="content-wrapper">
            {{-- @yield('content-header') --}}
            
            <section class="content">
                @yield('content')
            </section>
        </div>
        
        @include('layouts.footer')
        @include('layouts.rightsidebar')
    </div>
    
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js" integrity="sha512-zO8oeHCxetPn1Hd9PdDleg5Tw1bAaP0YmNvPY8CwcRyUk7d7/+nyElmFrB6f7vg4f7Fv4sui1mcep8RIEShczg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    @yield('page-js')
    @if (Session()->has('success'))
        <script>
        Swal.fire({
            title: "Success",
            text: "{{ session()->get('success') }}",
            icon: "success"
        });
        </script>
    @endif
    @if (Session()->has('error'))
        <script>
        Swal.fire({
            title: "Error!",
            text: "{{ session()->get('error') }}",
            icon: "error"
        });
        </script>
    @endif
</body>
</html>