@extends('layouts.app')

@section('title', '10X Research - Resources')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Resources</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Resources</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Blog Start -->
    <div class="container-fluid blog bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
                <h4 class="text-primary">Resources</h4>
                <h1 class="display-4 mb-4">Access Our Resources</h1>
                <p class="mb-0">
                    Explore our collection of tools, templates, reports, and learning
                    materials.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('img/research-image1.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="" />
                            <div class="blog-categiry py-2 px-4">
                                <span>Tools</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small">
                                    <span class="fa fa-user text-primary"></span> 10X Research
                                </div>
                                <div class="small">
                                    <span class="fa fa-calendar text-primary"></span> 30 Dec 2025
                                </div>
                                <div class="small">
                                    <span class="fa fa-download text-primary"></span> Download
                                </div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Research Tools & Templates</a>
                            <p class="mb-3">
                                Access our collection of tools and templates for effective
                                research and data analysis.
                            </p>
                            <a href="#" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('img/10x research stone.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="" />
                            <div class="blog-categiry py-2 px-4">
                                <span>Reports</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small">
                                    <span class="fa fa-user text-primary"></span> 10X Research
                                </div>
                                <div class="small">
                                    <span class="fa fa-calendar text-primary"></span> 30 Dec 2025
                                </div>
                                <div class="small">
                                    <span class="fa fa-download text-primary"></span> Download
                                </div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Policy Briefs & Reports</a>
                            <p class="mb-3">
                                Read our latest reports and policy briefs on key development
                                issues.
                            </p>
                            <a href="#" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('img/blog-3.png') }}" class="img-fluid rounded-top w-100" alt="" />
                            <div class="blog-categiry py-2 px-4">
                                <span>Learning</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small">
                                    <span class="fa fa-user text-primary"></span> 10X Research
                                </div>
                                <div class="small">
                                    <span class="fa fa-calendar text-primary"></span> 30 Dec 2025
                                </div>
                                <div class="small">
                                    <span class="fa fa-download text-primary"></span> Download
                                </div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Learning Materials</a>
                            <p class="mb-3">
                                Access educational resources and materials for capacity
                                building.
                            </p>
                            <a href="#" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
