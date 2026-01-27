@extends('layouts.app')

@section('title', '10X Research - Business Consulting Services')

@section('content')
    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Welcome To 10X Research</h4>
                                <h1 class="display-1 text-white mb-4">Advancing Research and Innovation</h1>
                                <p class="mb-5 fs-5">
                                    Empowering communities through cutting-edge research,
                                    innovation, and consultancy services.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5 animated fadeInRight">
                            <div class="calrousel-img" style="object-fit: cover">
                                <img src="{{ asset('img/carousel-2.png') }}" class="img-fluid w-100" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                        <div class="col-lg-5 animated fadeInLeft">
                            <div class="calrousel-img">
                                <img src="{{ asset('img/carousel-2.png') }}" class="img-fluid w-100" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-7 animated fadeInRight">
                            <div class="text-sm-center text-md-end">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Welcome To 10X Research</h4>
                                <h1 class="display-1 text-white mb-4">Empowering Communities</h1>
                                <p class="mb-5 fs-5">
                                    We drive sustainable development through research,
                                    innovation, and capacity building initiatives.
                                </p>
                                <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                                            class="fas fa-play-circle me-2"></i> Watch Video</a>
                                    <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid bg-light about py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-item-content bg-white rounded p-5 h-100">
                        <h4 class="text-primary">Vision & Mission</h4>
                        <h1 class="display-4 mb-4">Empowering Through Knowledge</h1>
                        <p>
                            At 10X Research, our vision is to be a leading institution in
                            research, innovation, and consultancy, driving sustainable
                            development in Somalia and beyond.
                        </p>
                        <p>
                            Our mission is to provide high-quality research services, foster
                            innovation, and offer consultancy to empower communities and
                            organizations.
                        </p>
                        <p class="text-dark">
                            <i class="fa fa-check text-primary me-3"></i>Advancing research excellence
                        </p>
                        <p class="text-dark">
                            <i class="fa fa-check text-primary me-3"></i>Promoting innovation and technology transfer
                        </p>
                        <p class="text-dark mb-4">
                            <i class="fa fa-check text-primary me-3"></i>Building capacity through education and training
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-white rounded p-5 h-100">
                        <div class="row g-4 justify-content-center">
                            <div class="col-12">
                                <div class="rounded bg-light">
                                    <img src="{{ asset('img/about-1.png') }}" class="img-fluid rounded w-100"
                                        alt="" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">20</span>
                                        <span class="h1 fw-bold text-primary">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Research Projects</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">20</span>
                                        <span class="h1 fw-bold text-primary">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Partners</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">5</span>
                                        <span class="h1 fw-bold text-primary">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Years in Operation</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">10</span>
                                        <span class="h1 fw-bold text-primary">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Experts</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
                <h4 class="text-primary">Overview</h4>
                <h1 class="display-4 mb-4">Our Key Areas</h1>
                <p class="mb-0">
                    We provide comprehensive research, innovation, and consultancy
                    services to drive development and knowledge advancement.
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
                                <a href="#" class="d-inline-block h4 mb-4">Research</a>
                                <p class="mb-4">
                                    Conducting high-quality research in various areas to
                                    generate knowledge and insights.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('research') }}">Read
                                    More</a>
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
                                <a href="#" class="d-inline-block h4 mb-4">Innovation</a>
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
                            <img src="{{ asset('img/blog-3.png') }}" class="img-fluid rounded-top w-100"
                                alt="" />
                            <div class="service-icon p-3">
                                <i class="fa fa-cogs fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">Consultancy</a>
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
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('services') }}">More Services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Team Start -->
    <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
                <h4 class="text-primary">Our Experts</h4>
                <h1 class="display-4 mb-4">Meet Our Research and Innovation Team</h1>
                <p class="mb-0">
                    Our team of experts brings deep knowledge in research, innovation,
                    and consultancy.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('img/baashe-staff.jpeg') }}" class="img-fluid rounded-top w-100"
                                alt="" />
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-title p-4">
                            <h4 class="mb-0">Abdirahman Mohamud</h4>
                            <p class="mb-0">CEO & Founder</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
