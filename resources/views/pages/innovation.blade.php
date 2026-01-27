@extends('layouts.app')

@section('title', '10X Research - Innovation')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Innovation</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Innovation</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
                <h4 class="text-primary">Innovation Services</h4>
                <h1 class="display-4 mb-4">Fostering Innovation</h1>
                <p class="mb-0">
                    We provide innovation services to drive technological advancement
                    and entrepreneurial growth.
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
                                <a href="#" class="d-inline-block h4 mb-4">Innovation Hub</a>
                                <p class="mb-4">
                                    Providing a collaborative space for innovators to develop
                                    and test new ideas.
                                </p>
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
                                <a href="#" class="d-inline-block h4 mb-4">Startups & Incubation</a>
                                <p class="mb-4">
                                    Supporting startup development through incubation programs
                                    and funding opportunities.
                                </p>
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
                                <a href="#" class="d-inline-block h4 mb-4">Technology Transfer</a>
                                <p class="mb-4">
                                    Facilitating the transfer of technology from research to
                                    practical applications.
                                </p>
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
                                <a href="#" class="d-inline-block h4 mb-4">Research to Market</a>
                                <p class="mb-4">
                                    Bridging the gap between research and market applications.
                                </p>
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
                                <a href="#" class="d-inline-block h4 mb-4">Training & Capacity Building</a>
                                <p class="mb-4">
                                    Building skills and capacity through targeted training
                                    programs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('services') }}">More Services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
