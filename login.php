<!--PHP Script for contact us(Feedback form)-->
<?php
include "config.php";

if (isset($_POST['submit'])) {
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    //to prevent from mysqli injection  
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    //        $sql = "SELECT * FROM register WHERE uname='.$user.' AND pass='.$pass.'";

    $sql = "SELECT * from register where uname = '$username' and pass = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($row['uname'] === $username && $row['pass'] === $password) {

        echo '<script type="text/javascript">';
        echo ' alert(" LogIN Successfully..!!")'; //not showing an alert box.
        echo '</script>';
        header("Location: Product_1.php");

    } else {

        echo '<script type="text/javascript">';
        echo ' alert("Failed to LogIN..!!Invalid Credentials")'; //not showing an alert box.
        echo '</script>';
    }



    // insertion of LOG IN data into table

    session_start();
    $_SESSION['sess_user'] = $username;

    $Username = $_POST['uname'];

    $password = $_POST['pass'];
    // $current_date = date("y-m-d H:i:s");


    $sql = "INSERT INTO LogIN (uname,pass,date) VALUES ('$Username','$password',NOW())";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        // echo "New record created successfully.";


    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();

} else {
    ?>
    <script>

        alert("echo "Error: " . $sql . " < br > " . $conn->error;");
    </script>
    <?php
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
    <link href="js/main.js" rel="stylesheet">

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
                <a class="btn-sm-square bg-white rounded-circle ms-3" value="Admin" href="login.php">
                    <small class="fa fa-user text-body">
                    </small><br />
                </a>

            </div>
    </div>
    </nav>
    </div>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <a href="logout.php" class="nav-item nav-link">Logout</a>

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

    <!-- Login Start -->
    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0"
                style="background-image: url('assets/img/bg-header.jpg');">
                <div class="container">
                    <h1 class="pt-5">
                        Login
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>

                    <div class="card card-login mb-5">
                        <div class="card-body">
                            <!--registr-->
                            <form action="" method="POST">

                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" required="" placeholder="Username"
                                            name="uname">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="password" required="" placeholder="Password"
                                            name="pass">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <input id="checkbox0" type="checkbox" name="terms">
                                            <label for="checkbox0" class="mb-0">Check I am not a Robot <a
                                                    href="terms.html" class="text-light">Terms &
                                                    Conditions</a> </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row text-center mt-4">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block text-uppercase"
                                            name="submit" onclick="reg_form">LogIN</button>
                                        <script>
                                            function reg_form() {
                                                alert("Loged in successfully...!!");
                                            }

                                        </script>
                                        <div>
                                            New User Login Here<a href="register.php"
                                                class="nav-item nav-link">Register</a>

                                        </div>
                                        <div>
                                            <h2>Admin login </h2>
                                            <a href="Admin_login.php" class="nav-item nav-link">Click here</a>
                                            
                                        </div>

                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Login End -->


    <!-- Google Map Start -->
    <div class="container-xxl px-0 wow fadeIn" data-wow-delay="0.1s" style="margin-bottom: -6px;">
        <iframe class="w-100" style="height: 450px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Google Map End -->


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