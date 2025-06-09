<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
    <div class="container">
        <a class="navbar-brand fw-bold text-uppercase" href="{{ url('/') }}">
            <img src="{{ asset('images/logo2.png') }}" alt="NemsuTel Logo" style="height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-uppercase fw-semibold">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'text-navy' : ''}}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('rooms') ? 'text-navy' : ''}}" href="{{ route('rooms') }}">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('facilities') ? 'text-navy' : ''}}" href="{{ route('facilities') }}">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('events') ? 'text-navy' : ''}}" href="{{ route('events') }}">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('gallery') ? 'text-navy' : ''}}" href="{{ route('gallery') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('offers') ? 'text-navy' : ''}}" href="{{ route('offers') }}">Offers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'text-navy' : ''}}" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item ms-lg-3">
                    <a class="btn btn-dark rounded-pill px-4 {{ request()->is('book') ? 'text-navy2' : ''}}" href="{{ route('book') }}">Book Now</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
