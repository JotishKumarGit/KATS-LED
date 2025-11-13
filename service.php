<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KATS LED - Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        /* Card hover animation */
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            object-fit: cover;
            height: 170px;
        }
    </style>

</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- header -->
    <?php include('header.php') ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Services </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Services //</h6>
                <h1 class="mb-5">Explore Our Lighting Solutions</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-lightbulb fa-2x me-3"></i>
                            <h4 class="m-0">LED Panel Installation</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-tools fa-2x me-3"></i>
                            <h4 class="m-0">Maintenance & Repairs</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-microchip fa-2x me-3"></i>
                            <h4 class="m-0">Smart Lighting Systems</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-bolt fa-2x me-3"></i>
                            <h4 class="m-0">Energy Efficiency Upgrades</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <!-- LED Panel Installation -->
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/ledPanelnstallatio.webp"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Professional LED Panel Installation</h3>
                                    <p class="mb-4">We specialize in high-quality LED panel light installations for homes, offices, and industrial spaces. Brighten your space with sleek, energy-efficient lighting.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Custom Installation Layouts</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Certified Electricians</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Affordable Pricing</p>
                                    <a href="#" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Maintenance & Repairs -->
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/maintenance.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Maintenance & Repairs</h3>
                                    <p class="mb-4">Keep your panel lights working at peak performance. Our technicians quickly diagnose and fix flickering, dimming, or complete failures.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quick Fault Diagnosis</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Spare Parts Availability</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Emergency Service Available</p>
                                    <a href="#" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Smart Lighting Systems -->
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/lighting_system.webp"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Smart Lighting Systems</h3>
                                    <p class="mb-4">Upgrade to intelligent lighting systems that can be controlled via mobile apps, voice assistants, or sensors for maximum efficiency and ambiance.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>App & Voice Control</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Motion Sensor Integration</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Custom Automation Setup</p>
                                    <a href="#" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Energy Efficiency Upgrades -->
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/efficiency.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Energy Efficiency Upgrades</h3>
                                    <p class="mb-4">Reduce energy costs and environmental impact by upgrading outdated lighting to energy-efficient LED panel lights. Great for green building compliance.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Lower Power Consumption</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Government Rebates Eligible</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Fast ROI</p>
                                    <a href="#" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Testimonial //</h6>
                <h1 class="mb-5">What Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <!-- Testimonial 1 -->
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/amit_testimonials.jpg" style="width: 80px; height: 80px;" alt="Amit Sharma">
                    <h5 class="mb-0">Amit Sharma</h5>
                    <p>Interior Designer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">I highly recommend their LED panel lighting services. Excellent quality, quick installation, and very professional team!</p>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/sneha_testimonials.jpg" style="width: 80px; height: 80px;" alt="Sneha Patel">
                    <h5 class="mb-0">Sneha Patel</h5>
                    <p>Architect</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Their lighting solutions added elegance to my client's office space. Loved the energy-efficient designs and custom service.</p>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/ravi_testimonials.jpg" style="width: 80px; height: 80px;" alt="Ravi Deshmukh">
                    <h5 class="mb-0">Ravi Deshmukh</h5>
                    <p>Business Owner</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">I had my entire showroom fitted with their LED panels. The lighting quality is superb and helps highlight my products beautifully.</p>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/neha_testimonials.jpg" style="width: 80px; height: 80px;" alt="Neha Reddy">
                    <h5 class="mb-0">Neha Reddy</h5>
                    <p>Homeowner</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">The team installed LED panel lights throughout my home. The ambiance has changed completely! Very satisfied with their service.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- footer -->
    <?php include('footer.php') ?>