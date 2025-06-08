<footer class="bg-dark text-white pt-5 pb-3 mt-auto">
    <div class="container">
        <div class="row">
            <!-- Column 1 -->
            <div class="col-md-4 mb-3">
                <h5 class="fw-bold text-uppercase">About</h5>
                <p class="small">Experience comfort and elegance in the heart of Tagbina. The Nemsu Hotel offers modern accommodations, exceptional service, and premium amenities.</p>
            </div>
            
            <!-- Column 2 -->
            <div class="col-md-4 mb-3">
                <h5 class="fw-bold text-uppercase">Quick Links</h5>
                <ul class="list-unstyled small">
                    <li><a href="{{ route('rooms') }}" class="text-white text-decoration-none">Rooms</a></li>
                    <li><a href="{{ route('events') }}" class="text-white text-decoration-none">Events</a></li>
                    <li><a href="{{ route('offers') }}" class="text-white text-decoration-none">Offers</a></li>
                    <li><a href="{{ route('contact') }}" class="text-white text-decoration-none">Contact</a></li>
                </ul>
            </div>
            
            <!-- Column 3 -->
            <div class="col-md-4 mb-3">
                <h5 class="fw-bold text-uppercase">Contact</h5>
                <p class="small mb-1">📍 Poblacion, Tagbina, Surigao del Sur, Philippines</p>
                <p class="small mb-1">📞 (000) 123 4567</p>
                <p class="small">📧 info@thenemsuhotel.com</p>
            </div>
        </div>
        <hr class="border-light">
        <div class="text-center small">
            &copy; {{ date('Y') }} Nemsu Hotel. All rights reserved.
        </div>
    </div>
</footer>
