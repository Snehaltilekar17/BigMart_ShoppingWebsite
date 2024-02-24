<?php
include "config.php";
// error_reporting(0);
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

    $name = $_POST['Pname'];

    $Cate = $_POST['Category'];

    $AV_QTY = $_POST['AV_qty'];

    $Price = $_POST['Price'];

    $Description = $_POST['P_desc'];

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./Added_imgs/img/" . $filename;


    $db = mysqli_connect("localhost", "root", "", "organic");

    // Get all the submitted data from the form
    $sql = "INSERT INTO Product(Pname,Category,AV_qty,Price,P_desc,IMG) VALUES ('$name','$Cate','$AV_QTY','$Price','$Description','$filename')";

    // Execute query
    mysqli_query($db, $sql);



    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo '<script type="text/javascript">';
        echo ' alert("Product Added Successfully..!!")'; //not showing an alert box.
        echo '</script>';

    } else {
        echo '<script type="text/javascript">';
        echo ' alert("Failed to ADD Product..!!")'; //not showing an alert box.
        echo '</script>';
    }
}
//header("location:complete.php?order_no={$order_no}");


?>


<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>

    <?php include "ad_nav.php"; ?><br />


    <!-- ADD-Product Start -->
    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0"
                style="background-image: url('assets/img/bg-header.jpg');">
                <div class="container">
</br></br>
                    <table>
                        <tr>
                            <td>&nbsp;&nbsp;
                                ADD Products to your website.
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </td>
                            <td>
                                <h6> <a href="Dsp_Product.php"
                                        class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        View Products</a></h6>

                            <td>
                                <h6> <a href="Multi_product.php" class=""> &nbsp;&nbsp; &nbsp; Insert Products In
                                        Bulk</a>
                                    </h4>
                            </td>
                        </tr>
                    </table>
                    <div class="card card-login mb-5">
                        <div class="card-body">

                            <form method="POST" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input class="form-control" type="file" name="uploadfile" value="" />
                                </div>

                                <div class="">
                                    </br>
                                    <div class="">
                                        <input class="form-control" type="text" required="" placeholder="Product Name"
                                            name="Pname">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <div class="">
                                        <input class="form-control" type="text" required="" placeholder="Category"
                                            name="Category">
                                    </div>
                                </div>
                                </br>
                                <div class="">
                                    <div class="">
                                        <input class="form-control" type="text" required=""
                                            placeholder="Available Quantity" name="AV_qty">
                                    </div>
                                    </br>

                                </div>
                                <div class="">
                                    <div class="">
                                        <input class="form-control" type="number" required="" placeholder="Price"
                                            name="Price">

                                    </div>
                                </div>
                                </br>
                                <div class="">
                                    <div class="">
                                        <input class="form-control" type="text" required=""
                                            placeholder="Product Description" name="P_desc">
                                    </div>
                                </div>
                             

                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit" name="upload"> ADD </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ADD-Product End -->






    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">@BigMart</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By :@Snehal Tilekar,@Sayali KAchare</a>
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