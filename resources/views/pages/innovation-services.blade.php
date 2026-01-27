@extends('layouts.app')

@section('title', '10X Research - Innovation Services')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Innovation Services</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
                <li class="breadcrumb-item active text-primary">Innovation Services</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Service Detail Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <h1 class="display-4 mb-4">Innovation Services</h1>
                        <p class="mb-4">
                            We foster innovation by providing support to startups, entrepreneurs, and organizations
                            looking to develop new products, services, and technologies. Our innovation services
                            bridge the gap between research and commercial applications.
                        </p>
                        <div class="rounded overflow-hidden mb-4">
                            <img src="{{ asset('img/10x research stone.jpg') }}" class="img-fluid w-100"
                                alt="Innovation Services">
                        </div>
                        <h4 class="mb-3">Our Innovation Services Include:</h4>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Innovation Hub & Co-working
                                Space</li>
                            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Startup Incubation &
                                Acceleration</li>
                            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Technology Transfer Services
                            </li>
                            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Research Commercialization</li>
                            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Innovation Strategy Consulting
                            </li>
                            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Product Development Support</li>
                        </ul>
                        <p class="mb-4">
                            Our innovation ecosystem connects researchers, entrepreneurs, investors, and industry
                            partners to create a thriving environment for new ideas and businesses.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light rounded p-4 mb-4">
                        <h4 class="mb-4">Other Services</h4>
                        <div class="d-flex flex-column">
                            <a href="{{ route('research-services') }}"
                                class="d-flex align-items-center mb-3 text-dark text-decoration-none">
                                <i class="fa fa-angle-right text-primary me-2"></i>Research Services
                            </a>
                            <a href="{{ route('consultancy-services') }}"
                                class="d-flex align-items-center mb-3 text-dark text-decoration-none">
                                <i class="fa fa-angle-right text-primary me-2"></i>Consultancy Services
                            </a>
                            <a href="{{ route('training-services') }}"
                                class="d-flex align-items-center mb-3 text-dark text-decoration-none">
                                <i class="fa fa-angle-right text-primary me-2"></i>Training & Capacity Building
                            </a>
                        </div>
                    </div>
                    <div class="bg-primary rounded p-4 text-center">
                        <h4 class="text-white mb-3">Need Help?</h4>
                        <p class="text-white mb-4">Contact us for more information about our innovation services.</p>
                        <a href="{{ route('contact') }}" class="btn btn-light rounded-pill py-2 px-4">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Detail End -->
@endsection
