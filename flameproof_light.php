<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KATS LED - Products - Flameproof Lights</title>
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

        /* products details css */
 body {
      background-color: #f8f9fa;
      padding: 40px 0;
    }
    .product-image {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }
    .product-details {
      padding-left: 30px;
    }
    .product-title {
      font-size: 2rem;
      font-weight: bold;
    }
    .product-description {
      font-size: 1.1rem;
      margin-top: 15px;
    }
    ul.product-specs {
      margin-top: 20px;
    }
    ul.product-specs li {
      margin-bottom: 8px;
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
                <h1 class="display-3 text-white mb-3 animated slideInDown">Flameproof Lights</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Flameproof Lights </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
         
    <!-- Products Details -->
    <div class="container">
        <div class="row align-items-center bg-white shadow p-4 rounded">

            <!-- Left Side: Product Image -->
            <div class="col-md-6">
                <img src="img/Flameproof-lights.jpg" alt="Flameproof Lights" class="product-image">
            </div>

            <!-- Right Side: Product Content -->
            <div class="col-md-6 product-details">
                <h1 class="product-title">Flameproof Lights</h1>
                <p class="product-description">
                    Our Flameproof Lights are designed for use in hazardous environments where explosive gases or dust may be present. Engineered with high-quality materials, these lights ensure maximum safety, durability, and efficiency in extreme conditions.
                </p>

                <ul class="product-specs">
                    <li>✅ Certified for Zone 1 & 2 hazardous areas</li>
                    <li>✅ Explosion-proof aluminium alloy body</li>
                    <li>✅ High-lumen LED for superior brightness</li>
                    <li>✅ IP66 weatherproof & dustproof protection</li>
                    <li>✅ Available in multiple wattages (20W - 100W)</li>
                    <li>✅ Suitable for oil, gas, and chemical industries</li>
                </ul>
                <button class="btn btn-primary "><a href="" class="text-white" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a></button>
            </div>

           
        </div>
    </div>
    <!--  End products detalis -->

    <!-- footer -->
    <?php include('footer.php') ?>