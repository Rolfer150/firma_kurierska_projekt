<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Klean - Cleaning Services Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/home/style.css') }}" rel="stylesheet">
</head>

<body>
<!-- Header Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 bg-secondary d-none d-lg-block">
            <a href="" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <h1 class="m-0 display-3 text-primary">Firma kurierska</h1>
            </a>
        </div>
        <div class="col-lg-9">
            <div class="row bg-dark d-none d-lg-flex">
                <div class="col-lg-7 text-left text-white">
                    <div class="h-100 d-inline-flex align-items-center border-right border-primary py-2 px-3">
                        <i class="fa fa-envelope text-primary mr-2"></i>
                        <small>firma_kurierska@projekt.com</small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                        <i class="fa fa-phone-alt text-primary mr-2"></i>
                        <small>+123 456 789</small>
                    </div>
                </div>
                <div class="col-lg-5 text-right">
                    <div class="d-inline-flex align-items-center pr-2">
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                <a href="" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary">Firma kurierska</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="/main" class="nav-item nav-link">Strona główna</a>
                        <a href="/about" class="nav-item nav-link active">O nas</a>
                        <a href="/service" class="nav-item nav-link">Serwis</a>
                        <a href="/project" class="nav-item nav-link">Projekt</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="blog.html" class="dropdown-item">Latest Blog</a>
                                <a href="single.html" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div>
                        <a href="/contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="" class="btn btn-primary mr-3 d-none d-lg-block">Get A Quote</a>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Page Header Start -->
<div class="container-fluid bg-primary py-5 mb-5">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">About</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="btn btn-sm btn-outline-light" href="">Home</a>
                    <i class="fas fa-angle-double-right text-light mx-2"></i>
                    <a class="btn btn-sm btn-outline-light disabled" href="">About</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-fluid py-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="d-flex flex-column align-items-center justify-content-center bg-about rounded h-100 py-5 px-3">
                    <i class="fa fa-5x fa-award text-primary mb-4"></i>
                    <h1 class="display-2 text-white mb-2" data-toggle="counter-up">25</h1>
                    <h2 class="text-white m-0">Years Experience</h2>
                </div>
            </div>
            <div class="col-lg-7 pt-5 pb-lg-5">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Learn About Us</h6>
                <h1 class="mb-4 section-title">We Provide The Best Cleaning Services</h1>
                <h5 class="text-muted font-weight-normal mb-3">Eos kasd eos dolor vero vero, lorem stet diam rebum. Ipsum amet sed vero dolor sea lorem justo est dolor eos</h5>
                <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor</p>
                <div class="d-flex align-items-center pt-4">
                    <a href="" class="btn btn-primary mr-5">Learn More</a>
                    <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                        <span></span>
                    </button>
                    <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Video Modal Start -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->


<!-- Features Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 pt-lg-5 pb-3">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Why Choose Us</h6>
                <h1 class="mb-4 section-title">25 Years Experience In Cleaning Industry</h1>
                <p class="mb-4">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                <div class="row">
                    <div class="col-sm-4">
                        <h1 class="text-secondary mb-2" data-toggle="counter-up">225</h1>
                        <h6 class="font-weight-semi-bold mb-sm-4">Our Cleaners</h6>
                    </div>
                    <div class="col-sm-4">
                        <h1 class="text-secondary mb-2" data-toggle="counter-up">1050</h1>
                        <h6 class="font-weight-semi-bold mb-sm-4">Happy Clients</h6>
                    </div>
                    <div class="col-sm-4">
                        <h1 class="text-secondary mb-2" data-toggle="counter-up">2500</h1>
                        <h6 class="font-weight-semi-bold mb-sm-4">Projects Done</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" style="min-height: 400px;">
                <div class="position-relative h-100 rounded overflow-hidden">
                    <img class="position-absolute w-100 h-100" src="{{ asset('img/feature.jpg') }}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- Team Start -->
<div class="container-fluid pt-5">
    <div class="container py-5">
        <div class="row align-items-end mb-4">
            <div class="col-lg-6">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Meet Our Team</h6>
                <h1 class="section-title mb-3">Meet Our Highly Experienced Cleaners</h1>
            </div>
            <div class="col-lg-6">
                <h4 class="font-weight-normal text-muted mb-3">Eirmod kasd duo eos et magna, diam dolore stet sea clita sit ea erat lorem. Ipsum eos ipsum magna lorem stet</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel team-carousel position-relative">
                    <div class="team d-flex flex-column text-center rounded overflow-hidden">
                        <div class="position-relative">
                            <div class="team-img">
                                <img class="img-fluid w-100" src="{{ asset('img/team-1.jpg') }}" alt="">
                            </div>
                            <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-primary text-center py-4">
                            <h5 class="font-weight-bold">Full Name</h5>
                            <p class="text-white m-0">Designation</p>
                        </div>
                    </div>
                    <div class="team d-flex flex-column text-center rounded overflow-hidden">
                        <div class="position-relative">
                            <div class="team-img">
                                <img class="img-fluid w-100" src="{{ asset('img/team-2.jpg') }}" alt="">
                            </div>
                            <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-primary text-center py-4">
                            <h5 class="font-weight-bold">Full Name</h5>
                            <p class="text-white m-0">Designation</p>
                        </div>
                    </div>
                    <div class="team d-flex flex-column text-center rounded overflow-hidden">
                        <div class="position-relative">
                            <div class="team-img">
                                <img class="img-fluid w-100" src="{{ asset('img/team-3.jpg') }}" alt="">
                            </div>
                            <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-primary text-center py-4">
                            <h5 class="font-weight-bold">Full Name</h5>
                            <p class="text-white m-0">Designation</p>
                        </div>
                    </div>
                    <div class="team d-flex flex-column text-center rounded overflow-hidden">
                        <div class="position-relative">
                            <div class="team-img">
                                <img class="img-fluid w-100" src="{{ asset('img/team-4.jpg') }}" alt="">
                            </div>
                            <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-primary text-center py-4">
                            <h5 class="font-weight-bold">Full Name</h5>
                            <p class="text-white m-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Footer Start -->
<div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <a href="/main" class="navbar-brand">
                <h1 class="m-0 mt-n3 display-4 text-primary">Klean</h1>
            </a>
            <p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
            <h5 class="font-weight-semi-bold text-white mb-2">Opening Hours:</h5>
            <p class="mb-1">Mon – Sat, 8AM – 5PM</p>
            <p class="mb-0">Sunday: Closed</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Get In Touch</h4>
            <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>123 Street, New York, USA</p>
            <p><i class="fa fa-phone-alt text-primary mr-2"></i>+012 345 67890</p>
            <p><i class="fa fa-envelope text-primary mr-2"></i>info@example.com</p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Quick Links</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Projects</a>
                <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Newsletter</h4>
            <p>Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum sea tempor magna tempor. Accu kasd sed ea duo ipsum.</p>
            <div class="w-100">
                <div class="input-group">
                    <label>
                        <input type="text" class="form-control border-0" style="padding: 25px;" placeholder="Your Email">
                    </label>
                    <div class="input-group-append">
                        <button class="btn btn-primary px-4">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
    <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white">&copy; <a href="#">Your Site Name</a>. All Rights Reserved. Designed by <a href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
        <div class="col-lg-6 text-center text-md-right">
            <ul class="nav d-inline-flex">
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Privacy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Terms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Help</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

<!-- Contact Javascript File -->
<script src="{{ asset('mail/jqBootstrapValidation.min.js') }}"></script>
<script src="{{ asset('mail/contact.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('js/home/main.js') }}"></script>
</body>

</html>
