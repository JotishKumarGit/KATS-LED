<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KATS LED</title>
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

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/BanerPanel-light.webp" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Panel Light Heat Issue //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Panel light gets heated during use</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/BanerPanel-light.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/baner-2Panel-light.webp" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Overheating Panel Light //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Light warms up quickly when turned on</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/baner-2Panel-light.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-thermometer-half fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Panel Light Overheating</h5>
                            <p>Panel lights may overheat due to poor heat dissipation or usage of low-quality materials.</p>
                            <a class="text-secondary border-bottom" href="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-bolt fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Energy Efficiency</h5>
                            <p>LED panel lights offer better brightness with lower power consumption, saving energy and costs.</p>
                            <a class="text-secondary border-bottom" href="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-wrench fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Proper Installation</h5>
                            <p>Correct installation of panel lights ensures safety, longevity, and optimal light output.</p>
                            <a class="text-secondary border-bottom" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/Panel-Light.jpg" style="object-fit: cover;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Years</span></h1>
                            <h4 class="text-white">Experience</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">// About Us //</h6>
                    <h1 class="mb-4"><span class="text-primary">KATS LED</span> Experts in Panel Light Solutions</h1>
                    <p class="mb-4">Established by Mr. Manoj Patole, KATS LED brings over 15 years of excellence in providing high-quality, energy-efficient panel lights. We specialize in advanced lighting solutions for commercial, residential, and industrial applications. Trust, innovation, and service define our work.</p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Reliable & Durable Products</h6>
                                    <span>Our LED panel lights are built for longevity and consistent performance.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Expert Engineering</h6>
                                    <span>Precision designs and thermal management for optimal lighting efficiency.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Trusted by Clients</h6>
                                    <span>We serve various sectors with proven customer satisfaction and trust.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary py-3 px-5">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- products -->
    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Products</h2>
                <p class="text-muted">
                    We specialize in a wide range of lighting solutions including street lights, flood lights, high bay lights, and flameproof lights. Our motion sensor lights are available in tube lights, panel lights, and street lights up to 100 watts for enhanced energy efficiency and automation.</p>
            </div>

            <div class="row justify-content-center text-center align-items-center g-4">
                <!-- Product Card 1 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100">
                        <img src="img/Flameproof-lights.jpg" class="card-img-top" alt="Flameproof Lights">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Flameproof Lights</h5>
                            <a href="flameproof_light.php" class="btn btn-primary mt-auto">Details</a>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100">
                        <img src="img/Flood-lights.jpg" class="card-img-top" alt="Flameproof Lights">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Flood Lights</h5>
                            <a href="flood_light.php" class="btn btn-primary mt-auto">Details</a>
                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100">
                        <img src="img/Hbay-lights.jpg" class="card-img-top" alt="Flameproof Lights">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Hbay Lights</h5>
                            <a href="hbay_light.php" class="btn btn-primary mt-auto">Details</a>
                        </div>
                    </div>
                </div>
                <!-- 4 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100">
                        <img src="img/Motion-sensor-lights.webp" class="card-img-top" alt="Flameproof Lights">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Motion Sensor Lights</h5>
                            <a href="motion_sensor_light.php" class="btn btn-primary mt-auto">Details</a>
                        </div>
                    </div>
                </div>
                <!-- 5 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100">
                        <img src="img/panel-lights.jpg" class="card-img-top" alt="Flameproof Lights">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Panel Lights</h5>
                            <a href="panel_light.php" class="btn btn-primary mt-auto">Details</a>
                        </div>
                    </div>
                </div>
                <!-- 6 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100">
                        <img src="img/Street-lights.jpg" class="card-img-top" alt="Flameproof Lights">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Street Lights</h5>
                            <a href="street_light.php" class="btn btn-primary mt-auto">Details</a>
                        </div>
                    </div>
                </div>
                <!-- 7 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100">
                        <img src="img/Tube-lights.webp" class="card-img-top" alt="Flameproof Lights">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Tube Lights</h5>
                            <a href="Tube_light.php" class="btn btn-primary mt-auto">Details</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end products -->

    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">15</h2>
                    <p class="text-white mb-0">Years Experience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">12</h2>
                    <p class="text-white mb-0">Expert Technicians</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">120</h2>
                    <p class="text-white mb-0">Satisfied Clients</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-folder fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Compleate Projects</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->

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

    
    <!-- Blog Section -->
    <div class="container-fluid py-5" style="background-color: #f8fbff;">
        <div class="container">
            <h2 class="text-center mb-3" style="color: #004aad;">Our Blog</h2>
            <p class="text-center mb-5" style="color: #333;">Stay updated with the latest trends and tips in LED lighting through our informative blog posts.</p>

            <div class="row g-4">

                <!-- Blog 1 -->
                <div class="col-md-3">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="img/Motion-sensor-lights.webp" class="card-img-top" alt="Motion Sensor LED Lights">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #004aad;">Smart Motion Sensor Lights</h5>
                            <p class="card-text">Discover how motion sensor LED lights enhance security, save energy, and provide modern convenience for your home or business.</p>
                            <a href="blog.php" class="btn btn-primary" style="background-color: #004aad; border: none;">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog 2 -->
                <div class="col-md-3">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="img/maintenance.jpg" class="card-img-top" alt="LED Maintenance Tips">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #004aad;">LED Light Maintenance Tips</h5>
                            <p class="card-text">Learn essential maintenance tips to increase the lifespan of your LED lighting system and maintain consistent brightness.</p>
                            <a href="blog.php" class="btn btn-primary" style="background-color: #004aad; border: none;">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog 3 -->
                <div class="col-md-3">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="img/lighting_system.webp" class="card-img-top" alt="Efficient Lighting System">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #004aad;">Designing an Efficient Lighting System</h5>
                            <p class="card-text">Find out how to design a lighting system that maximizes brightness, minimizes cost, and complements modern interiors.</p>
                            <a href="blog.php" class="btn btn-primary" style="background-color: #004aad; border: none;">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog 4 -->
                <div class="col-md-3">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="img/ledPanelnstallatio.webp" class="card-img-top" alt="LED Panel Installation">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #004aad;">LED Panel Installation Guide</h5>
                            <p class="card-text">Step-by-step guidance on installing LED panels safely and effectively for homes, offices, and industrial spaces.</p>
                            <a href="blog.php" class="btn btn-primary" style="background-color: #004aad; border: none;">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Contact Us //</h6>
                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Booking //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>katsengg@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// General //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>katsengg@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Technical //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>katsengg@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">

                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15138.54448324094!2d73.79084903559287!3d18.4548235263549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s25%2F2%2C%20NANDED%20PHATA%2CSINHAGAD%20RD%20%2C%20PUNE%20India!5e0!3m2!1sen!2sin!4v1757660221843!5m2!1sen!2sin"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done.</p>

                        <form onsubmit="return whatsappForm(event)">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- footer -->
    <?php include('footer.php') ?>