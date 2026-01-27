@extends('layouts.app')

@section('title', '10X Research - Services')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Services</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Services</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
                <h4 class="text-primary">Our Services</h4>
                <h1 class="display-4 mb-4">Comprehensive Solutions</h1>
                <p class="mb-0">
                    We offer a wide range of services to meet your research, innovation,
                    and consultancy needs.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('img/research-image1.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="" />
                            <div class="service-icon p-3">
                                <i class="fa fa-chart-line fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="{{ route('research-services') }}" class="d-inline-block h4 mb-4">Research
                                    Services</a>
                                <p class="mb-4">
                                    Conducting high-quality research in various areas to
                                    generate knowledge and insights.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4"
                                    href="{{ route('research-services') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('img/10x research stone.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="" />
                            <div class="service-icon p-3">
                                <i class="fa fa-laptop-code fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="{{ route('innovation-services') }}" class="d-inline-block h4 mb-4">Innovation
                                    Services</a>
                                <p class="mb-4">
                                    Fostering innovation through startups, incubation, and
                                    technology transfer.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4"
                                    href="{{ route('innovation-services') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('img/blog-3.png') }}" class="img-fluid rounded-top w-100" alt="" />
                            <div class="service-icon p-3">
                                <i class="fa fa-cogs fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="{{ route('consultancy-services') }}" class="d-inline-block h4 mb-4">Consultancy
                                    Services</a>
                                <p class="mb-4">
                                    Providing expert consultancy in research, data analysis, and
                                    project management.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4"
                                    href="{{ route('consultancy-services') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('img/blog-4.png') }}" class="img-fluid rounded-top w-100" alt="" />
                            <div class="service-icon p-3">
                                <i class="fa fa-rocket fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="{{ route('training-services') }}" class="d-inline-block h4 mb-4">Training &
                                    Capacity Building</a>
                                <p class="mb-4">
                                    Building skills and capacity through targeted training
                                    programs.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4"
                                    href="{{ route('training-services') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="1.0s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('img/research-image1.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="" />
                            <div class="service-icon p-3">
                                <i class="fa fa-graduation-cap fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">Workshops & Seminars</a>
                                <p class="mb-4">
                                    Organizing workshops and seminars to share knowledge and
                                    best practices.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
