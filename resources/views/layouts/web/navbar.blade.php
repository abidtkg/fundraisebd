<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="{{ route('webpage.index') }}" class="navbar-brand">
            {{-- <img src="{{ asset('assets/images/easy-school.png') }}" alt="AdminLTE Logo" class="brand-image"> --}}
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="brand-image" style="height: 40px;">
            {{-- <span class="brand-text font-weight-light">AdminLTE 3</span> --}}
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('webpage.index') }}" class="nav-link {{ request()->routeIs('webpage.index') ? 'active' : '' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Cases</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('webpage.contact') }}" class="nav-link {{ request()->routeIs('webpage.contact') ? 'active' : '' }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>