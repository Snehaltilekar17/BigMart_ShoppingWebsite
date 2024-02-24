<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BigMart- online Grocery shopp</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start 
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    -->
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>123 Street,Maharashtra, India</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>bigmart@website.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">BIG<span class="text-secondary">Mart</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <br />
            <small>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto p-4 p-lg-0"></div><br>
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="Brands.php" class="nav-item nav-link">Brands</a>
                <a href="#" class="nav-item nav-link">Photos</a>
                    <a href="about.php" class="nav-item nav-link">Beauty</a>

                         <!--   <a href="product.php" class="nav-item nav-link">BabyCare</a>  
                <a href="Brands.php" class="nav-item nav-link">Brands</a>
                <a href="about.php" class="nav-item nav-link">Tea</a>
                <a href="product.php" class="nav-item nav-link">Ghee</a>
                <a href="TEST.PHP" class="nav-item nav-link">Bakery</a>
                <a href="about.php" class="nav-item nav-link">Beauty</a>
                <a href="product.php" class="nav-item nav-link">Household</a>
                -->
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="product_1.php" class="nav-item nav-link">Products</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.php" class="dropdown-item">Blog Grid</a>
                            <a href="feature.php" class="dropdown-item">Our Features</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                            <a href="404.php" class="dropdown-item">404 Page</a>
                        </div>
                    </div>

                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
            </small>
            <div class="d-none d-lg-flex ms-2">

                <a class="btn-sm-square bg-white rounded-circle ms-3" href="view_cart.php">
                    <small class="fa fa-shopping-bag text-body"></small>
                </a>
                <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                    <small class="fa fa-search text-body"></small>

                </a>
                <a class="btn-sm-square bg-white rounded-circle ms-3" href="login.php">
                    <small class="fa fa-user text-body">
                    </small><br />
                </a>

            </div>
    </div>
    </nav>
    </div>
    <!-- Navbar End -->




    
</body>
</html>

<?php
//<a class="nav-item nav-link" href="view_cart.php">Cart (<?php echo $cart->get_cart_count();?>)</a>
?>