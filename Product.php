<!--PHP Script for PRoduct(View product on website)-->
<?php
//code for adding product in cart
include "config.php";
session_start();

include "cart.class.php";
$cart = new Cart();

$data = [];
$sql = "select * from product";
$res = $conn->query($sql);
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $data[] = $row;
    }
}

?>


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
    <!-- Spinner Start -->
    <!--
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                <a href="product.php" class="nav-item nav-link">Photos</a>
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

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">

        <div class="container">

            <h1 class="display-3 mb-3 animated slideInDown"></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#"></a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#"></a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page"></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <h2> <a href="logout.php" class="" style="background:red"> &nbsp; LogOut &nbsp;</a></h2>

        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s"
                        style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Our Products</h1>
                        <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor
                            duo.</p>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill"
                                href="#tab-1">Tea</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2"
                                name="Ghee_1">Ghee </a>
                        </li>
                        <li class="nav-item me-0">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3"
                                name="beauty_1">Beauty</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2"
                                name="hh_1">Household
                            </a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-5"
                                name="Bakery_1">Bakery </a>
                        </li>
                        <li class="nav-item me-0">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-6"
                                name="Babycare_1">BabyCare</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--PHP code for ROWs -->


            <!-- Product Start-->

            <div class="tab-content">
                <h2 class="tab-1" class="tab-pane fade show p-0 active">Products</h2>
                <div class='row g-4'>
                    <?php foreach ($data as $row): ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">

                                    <img class="card-img-top" height="300px"
                                        src="./Added_imgs/img/<?php echo $row["IMG"]; ?> ">
                                </div>
                                <div class="text-center p-4">
                                    <h5 class="">
                                        <?php echo $row["Pname"]; ?>
                                    </h5>
                                    <p class="text-primary me-1">
                                        Price &#8377;
                                        <?php echo $row["Price"]; ?>
                                    </p>
                                    <a href="view_details.php?id=<?php echo $row["P_id"]; ?>"
                                        class='btn btn-primary  float-right'>View Details</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Product End-->
            <?php
            /*
            include "config.php";
        $product = mysqli_query($conn, "SELECT * FROM Product ORDER BY P_id ASC");
        if (!empty($product)) {
            while ($row = mysqli_fetch_array($product)) {
                */
            ?>
        

            <?php
            /*
    }}
    */
            ?>
        </div>
    </div>
    <div class="col-12 text-center">
        <a class="btn btn-primary rounded-pill py-3 px-5" href="">Browse More Products</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!-- Product End -->


    <!-- Firm Visit Start -->
    <div class="container-fluid bg-primary bg-icon mt-5 py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-5 text-white mb-3">Visit Our Firm</h1>
                    <p class="text-white mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                        amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                        dolore erat amet. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.</p>
                </div>
                <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="">Visit Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Firm Visit End -->


    

     <!-- Footer Start -->
     <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h1 class="fw-bold text-primary mb-4">Big<span class="text-secondary">Mart</span></h1>
                <p></p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Address</h4>
                <p><i class="fa fa-map-marker-alt me-3"></i> &nbsp; 123 Street,</br> &nbsp; &nbsp;&nbsp;
                    Maharashtra,India </br>
                    &nbsp;&nbsp;&nbsp;&nbsp; 9359852831 </br>
                    &nbsp;&nbsp;&nbsp;&nbsp; bigmart@website.com
                </p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Quick Links</h4>
                <a class="btn btn-link" href="login.php">Login</a>
                <a class="btn btn-link" href="about.php">About Us</a>
                <a class="btn btn-link" href="contact.php">Contact Us</a>

                <a class="btn btn-link" href="blog.php">Blogs</a>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">BigMart</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By : @Snehal Tilekar,@Sayali Kachare</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>