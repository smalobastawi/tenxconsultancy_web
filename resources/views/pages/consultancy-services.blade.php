@extends('layouts.app')

@section('title', '10X Research - Consultancy Services')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Consultancy Services</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
                <li class="breadcrumb-item active text-primary">Consultancy Services</li>
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
                        <h1 class="display-4 mb-4">Consultancy Services</h1>
                        <p class="mb-4">
                            Our consultancy services provide expert guidance to organizations seeking to improve
                            their operations, develop strategies, and achieve their goals. We bring deep expertise
                            and practical solutions to complex challenges.
                        </p>
                        <div class="rounded overflow-hidden mb-4">
                            <img src="{{ asset('img/blog-3.png') }}" class="img-fluid w-100" alt="Consultancy Services">
                        </div>
                        <h4 class="mb-3">Our Consultancy Services Include:</h4>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Research Design & Methodology
                            </li>
                            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Data Analysis & Interpretation
                            </li>
                            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Project Management</li>
                            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Strategic Planning</li>
                            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Monitoring & Evaluation</li>
                            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Institutional Capacity
                                Assessment</li>
                        </ul>
                        <p class="mb-4">
                            Our consultants work collaboratively with clients to understand their needs and deliver
                            tailored solutions that drive results and sustainable improvement.
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
                            <a href="{{ route('innovation-services') }}"
                                class="d-flex align-items-center mb-3 text-dark text-decoration-none">
                                <i class="fa fa-angle-right text-primary me-2"></i>Innovation Services
                            </a>
                            <a href="{{ route('training-services') }}"
                                class="d-flex align-items-center mb-3 text-dark text-decoration-none">
                                <i class="fa fa-angle-right text-primary me-2"></i>Training & Capacity Building
                            </a>
                        </div>
                    </div>
                    <div class="bg-primary rounded p-4 text-center">
                        <h4 class="text-white mb-3">Need Help?</h4>
                        <p class="text-white mb-4">Contact us for more information about our consultancy services.</p>
                        <a href="{{ route('contact') }}" class="btn btn-light rounded-pill py-2 px-4">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Detail End -->
@endsection
