@extends('layouts.app1')

@section('content')

<!-- Welcome Section -->
<section class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1>Welcome to Our Doctor Appointment Website</h1>
            <p>Book your next doctor's appointment with ease.</p>
            <p>We are available 24/7 to assist you with your healthcare needs.</p>
        </div>
        <div class="col-md-6">
            <div class="text-center">
                <!-- Add your image or logo here with a maximum height for larger screens -->
                <img src="logo/pharmacy.jpg" alt="Website Logo" class="img-fluid" style="max-height: 200px;">
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h2>About Us</h2>
                <p>We are a dedicated team of healthcare professionals committed to making the process of booking doctor appointments as convenient as possible. Our mission is to ensure that you receive the best healthcare services without any hassle.</p>
            </div>
        </div>
    </div>
</section>



<!-- Image Carousel Section -->
<section class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="expect/doctor2.avif" class="d-block w-100" alt="Image 1 " style="max-height: 600px;">
                        <div class="carousel-caption">
                            <h3 class="text-danger p-2">Access to a network of qualified healthcare providers</h3
                            <p>This is the description for the first image.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="expect/doctor4.avif" class="d-block w-100" alt="Image 2" style="max-height: 600px;">
                        <div class="carousel-caption">
                            <h3  class="text-danger p-2">Prescription Refills</h3
                            <p>Easily request and renew your prescriptions online.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="expect/doctor3.avif" class="d-block w-100" alt="Image 3" style="max-height: 600px;">
                        <div class="carousel-caption">
                            <h3 class="text-danger p-2">Easy appointment booking</h3
                            <p>This is the description for the first image.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="expect/doctor6.webp" class="d-block w-100" alt="Image 3" style="max-height: 600px;">
                        <div class="carousel-caption">
                            <h3 class="text-danger p-2">Specialist Referrals</h3
                            <p> Get access to specialist doctors when needed.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Include Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>



@endsection
