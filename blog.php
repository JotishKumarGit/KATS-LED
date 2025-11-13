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
    
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Blog</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

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

    <!-- footer -->
    <?php include('footer.php') ?>


    