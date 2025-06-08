@extends('layouts.app')

@section('title', 'Home')

@section('content')

{{-- Hero Section --}}
<section class="hero position-relative text-white text-center" style="background: url('{{ asset('images/hero.jpg') }}') center center / cover no-repeat; height: 90vh;">
    <div class="d-flex flex-column justify-content-center align-items-center h-100 bg-dark bg-opacity-50">
        <h1 class="display-4 fw-bold">Welcome to NEMSUTEL</h1>
        <p class="lead">Comfort, elegance, and unforgettable hospitality await you.</p>
        <a href="{{ url('/book') }}" class="btn btn-light btn-lg mt-3 px-4 rounded-pill">Book Now</a>
    </div>
</section>

{{-- About Section --}}
<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="fw-bold mb-3">Your Urban Retreat</h2>
        <p class="text-muted">Located in the heart of the Tagbina, our hotel blends modern elegance with the warmth of home. Discover exceptional amenities, fine dining, and personalized service in every corner.</p>
    </div>
</section>

{{-- Rooms Preview --}}
<section class="py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">Rooms & Suites</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow">
                    <img src="{{ asset('images/hero.jpg') }}" class="card-img-top" alt="Deluxe Room">
                    <div class="card-body">
                        <h5 class="card-title">Deluxe Room</h5>
                        <p class="card-text small">Spacious comfort with elegant design and city views.</p>
                        <a href="{{ url('/rooms') }}" class="btn btn-outline-dark btn-sm">View Details</a>
                    </div>
                </div>
            </div>
            <!-- Repeat for more rooms -->
            <div class="col-md-4">
                <div class="card border-0 shadow">
                    <img src="{{ asset('images/hero.jpg') }}" class="card-img-top" alt="Premier Room">
                    <div class="card-body">
                        <h5 class="card-title">Premier Room</h5>
                        <p class="card-text small">Modern furnishings with premium amenities and king-sized beds.</p>
                        <a href="{{ url('/rooms') }}" class="btn btn-outline-dark btn-sm">View Details</a>
                    </div>
                </div>
            </div>
            <!-- Add more cards as needed -->
        </div>
    </div>
</section>

{{-- Facilities Highlight --}}
<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Facilities</h2>
        <p class="text-muted mb-5">From poolside relaxation to modern fitness, our facilities offer everything you need for a perfect stay.</p>
        <div class="row g-4">
            <div class="col-md-4">
                <img src="{{ asset('images/hero.jpg') }}" class="img-fluid rounded shadow-sm" alt="Pool">
                <h6 class="mt-3">Outdoor Pool</h6>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/hero.jpg') }}" class="img-fluid rounded shadow-sm" alt="Gym">
                <h6 class="mt-3">Fitness Center</h6>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/hero.jpg') }}" class="img-fluid rounded shadow-sm" alt="Restaurant">
                <h6 class="mt-3">In-House Dining</h6>
            </div>
        </div>
    </div>
</section>

{{-- Events Section --}}
<section class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Celebrate With Us</h2>
        <p class="text-muted mb-4">Host memorable events, from intimate gatherings to grand celebrations, with our versatile venues and expert team.</p>
        <a href="{{ url('/events') }}" class="btn btn-dark rounded-pill px-4">View Event Packages</a>
    </div>
</section>

{{-- CTA Section --}}
<section class="bg-dark text-white text-center py-5">
    <div class="container">
        <h2 class="fw-bold mb-3">Book Your Stay Now</h2>
        <p class="mb-4">Enjoy exclusive rates and personalized experiences when you book directly with us.</p>
        <a href="{{ url('/book') }}" class="btn btn-light btn-lg px-5 rounded-pill">Reserve a Room</a>
    </div>
</section>

@endsection
