<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title', '10X Research - Business Consulting Services')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('lib/animate/animate.min.css') }}" />
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    @yield('styles')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block">
        <div class="container">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <div class="border-end border-primary pe-3">
                            <a href="#" class="text-muted small"><i
                                    class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                        </div>
                        <div class="ps-3">
                            <a href="mailto:info@tenxconsultancy.com" class="text-muted small"><i
                                    class="fas fa-envelope text-primary me-2"></i>info@tenxconsultancy.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex justify-content-end">
                        <div class="d-flex border-end border-primary pe-3">
                            <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn p-0 text-primary me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="dropdown ms-3">
                            <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i
                                        class="fas fa-globe-europe text-primary me-2"></i> English</small></a>
                            <div class="dropdown-menu rounded">
                                <a href="#" class="dropdown-item">English</a>
                                <a href="#" class="dropdown-item">Bangla</a>
                                <a href="#" class="dropdown-item">French</a>
                                <a href="#" class="dropdown-item">Spanish</a>
                                <a href="#" class="dropdown-item">Arabic</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="{{ route('home') }}" class="navbar-brand p-0">
                    <img src="{{ asset('img/10x Logo-square.jpg') }}" alt="10x Research Consultancy Logo"
                        style="height: 50px" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-0 mx-lg-auto">
                        <a href="{{ route('home') }}"
                            class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Key
                                Areas</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('research') }}" class="dropdown-item">Research</a>
                                <a href="{{ route('innovation') }}" class="dropdown-item">Innovation</a>
                                <a href="{{ route('consultancy') }}" class="dropdown-item">Consultancy</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="{{ route('services') }}" class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown">Services</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('research-services') }}" class="dropdown-item">Research
                                    Services</a>
                                <a href="{{ route('innovation-services') }}" class="dropdown-item">Innovation
                                    Services</a>
                                <a href="{{ route('consultancy-services') }}" class="dropdown-item">Consultancy
                                    Services</a>
                                <a href="{{ route('training-services') }}" class="dropdown-item">Training & Capacity
                                    Building</a>
                            </div>
                        </div>
                        <a href="{{ route('resources') }}"
                            class="nav-item nav-link {{ request()->routeIs('resources') ? 'active' : '' }}">Resources</a>
                        <a href="{{ route('blog.index') }}"
                            class="nav-item nav-link {{ request()->routeIs('blog.*') ? 'active' : '' }}">Blog</a>
                        <a href="{{ route('announcements.index') }}"
                            class="nav-item nav-link {{ request()->routeIs('announcements.*') ? 'active' : '' }}">Announcements</a>
                        <a href="{{ route('contact') }}"
                            class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contacts</a>
                    </div>
                </div>
                <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                    <a href="#" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada"
                        data-wow-delay=".9s">
                        <i class="fa fa-phone-alt fa-2x"></i>
                        <div class="position-absolute" style="top: 7px; right: 12px">
                            <span><i class="fa fa-comment-dots text-secondary"></i></span>
                        </div>
                    </a>
                    <div class="d-flex flex-column ms-3">
                        <span>Call to Our Experts</span>
                        <a href="tel:+252 905 925 858"><span class="text-dark">Free: +252 905 925 858</span></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-9">
                    <div class="mb-5">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-6 col-xl-5">
                                <div class="footer-item">
                                    <a href="{{ route('home') }}" class="p-0">
                                        <img src="{{ asset('img/10x Logo-square.jpg') }}"
                                            alt="10x Research Consultancy Logo" style="height: 40px" />
                                    </a>
                                    <p class="text-white mb-4">
                                        Advancing knowledge and innovation through research,
                                        consultancy, and capacity building in Somalia.
                                    </p>
                                    <div class="footer-btn d-flex">
                                        <a class="btn btn-md-square rounded-circle me-3" href="#"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-md-square rounded-circle me-3" href="#"><i
                                                class="fab fa-twitter"></i></a>
                                        <a class="btn btn-md-square rounded-circle me-3" href="#"><i
                                                class="fab fa-instagram"></i></a>
                                        <a class="btn btn-md-square rounded-circle me-0" href="#"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="footer-item">
                                    <h4 class="text-white mb-4">Useful Links</h4>
                                    <a href="{{ route('home') }}"><i class="fas fa-angle-right me-2"></i> Home</a>
                                    <a href="{{ route('research-services') }}"><i
                                            class="fas fa-angle-right me-2"></i> Research Services</a>
                                    <a href="{{ route('innovation-services') }}"><i
                                            class="fas fa-angle-right me-2"></i> Innovation Services</a>
                                    <a href="{{ route('consultancy-services') }}"><i
                                            class="fas fa-angle-right me-2"></i> Consultancy Services</a>
                                    <a href="{{ route('training-services') }}"><i
                                            class="fas fa-angle-right me-2"></i> Training & Capacity Building</a>
                                    <a href="{{ route('services') }}"><i class="fas fa-angle-right me-2"></i>
                                        Services</a>
                                    <a href="{{ route('contact') }}"><i class="fas fa-angle-right me-2"></i>
                                        Contact</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="footer-item">
                                    <h4 class="mb-4 text-white">Our Gallery</h4>
                                    <div class="row g-3">
                                        <div class="col-4">
                                            <div class="footer-instagram rounded">
                                                <img src="{{ asset('img/instagram-footer-1.jpg') }}"
                                                    class="img-fluid w-100" alt="" />
                                                <div class="footer-search-icon">
                                                    <a href="{{ asset('img/instagram-footer-1.jpg') }}"
                                                        data-lightbox="gallery-1" class="my-auto"><i
                                                            class="fas fa-link text-white"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="footer-instagram rounded">
                                                <img src="{{ asset('img/instagram-footer-2.jpg') }}"
                                                    class="img-fluid w-100" alt="" />
                                                <div class="footer-search-icon">
                                                    <a href="{{ asset('img/instagram-footer-2.jpg') }}"
                                                        data-lightbox="gallery-2" class="my-auto"><i
                                                            class="fas fa-link text-white"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="footer-instagram rounded">
                                                <img src="{{ asset('img/instagram-footer-3.jpg') }}"
                                                    class="img-fluid w-100" alt="" />
                                                <div class="footer-search-icon">
                                                    <a href="{{ asset('img/instagram-footer-3.jpg') }}"
                                                        data-lightbox="gallery-3" class="my-auto"><i
                                                            class="fas fa-link text-white"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="footer-instagram rounded">
                                                <img src="{{ asset('img/instagram-footer-4.jpg') }}"
                                                    class="img-fluid w-100" alt="" />
                                                <div class="footer-search-icon">
                                                    <a href="{{ asset('img/instagram-footer-4.jpg') }}"
                                                        data-lightbox="gallery-4" class="my-auto"><i
                                                            class="fas fa-link text-white"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="footer-instagram rounded">
                                                <img src="{{ asset('img/instagram-footer-5.jpg') }}"
                                                    class="img-fluid w-100" alt="" />
                                                <div class="footer-search-icon">
                                                    <a href="{{ asset('img/instagram-footer-5.jpg') }}"
                                                        data-lightbox="gallery-5" class="my-auto"><i
                                                            class="fas fa-link text-white"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="footer-instagram rounded">
                                                <img src="{{ asset('img/instagram-footer-6.jpg') }}"
                                                    class="img-fluid w-100" alt="" />
                                                <div class="footer-search-icon">
                                                    <a href="{{ asset('img/instagram-footer-6.jpg') }}"
                                                        data-lightbox="gallery-6" class="my-auto"><i
                                                            class="fas fa-link text-white"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-5" style="border-top: 1px solid rgba(255, 255, 255, 0.08)">
                        <div class="row g-0">
                            <div class="col-12">
                                <div class="row g-4">
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="d-flex">
                                            <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                <i class="fas fa-map-marker-alt fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4 class="text-white">Address</h4>
                                                <p class="mb-0">Bosaso, Puntland Somalia</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="d-flex">
                                            <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                <i class="fas fa-envelope fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4 class="text-white">Mail Us</h4>
                                                <p class="mb-0">info@tenxconsultancy.com</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="d-flex">
                                            <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                <i class="fa fa-phone-alt fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4 class="text-white">Telephone</h4>
                                                <p class="mb-0">+252 905 925 858</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Newsletter</h4>
                        <p class="text-white mb-3">
                            Stay updated with our latest research findings, innovation news,
                            and consultancy insights from 10x Research Consultancy.
                        </p>
                        <div class="position-relative rounded-pill mb-4">
                            <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Enter your email" />
                            <button type="button"
                                class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                        </div>
                        <div class="d-flex flex-shrink-0">
                            <div class="footer-btn">
                                <a href="#" class="btn btn-lg-square rounded-circle position-relative wow tada"
                                    data-wow-delay=".9s">
                                    <i class="fa fa-phone-alt fa-2x"></i>
                                    <div class="position-absolute" style="top: 2px; right: 12px">
                                        <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column ms-3 flex-shrink-0">
                                <span>Call to Our Experts</span>
                                <a href="tel:+252 905 925 858"><span class="text-white">Free: +252 905 925
                                        858</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-end mb-md-0">
                    <span class="text-body"><a href="#" class="border-bottom text-white"><i
                                class="fas fa-copyright text-light me-2"></i>10X Research</a>, All right
                        reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-start text-body">
                    Designed By <a class="border-bottom text-white" href="https://stawitech.com">Stawitech</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('scripts')
</body>

</html>
