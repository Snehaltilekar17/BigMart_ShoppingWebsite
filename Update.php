<?php

include "config.php";

if (isset($_POST['Update_1'])) {

    $name = $_POST['Pname'];

    $Cate = $_POST['Category'];

    $AV_QTY = $_POST['AV_qty'];

    $Price = $_POST['Price'];

    $Description = $_POST['P_desc'];
/*
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./img/" . $filename;

*/
    $db = mysqli_connect("localhost", "root", "", "organic");

    // Get all the submitted data from the form
    $sql = "UPDATE product SET Pname='$name',Category='$Cate',AV_qty='$AV_QTY',Price='$Price',P_desc='$Description'/*,IMG='$filename' */)";

    // Execute query
    //mysqli_query($db, $sql);

    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "Record updated successfully.";

    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

}

if (isset($_GET['P_id'])) {

    $id = $_GET['P_id'];

    $sql = "SELECT * FROM product WHERE P_id='$id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $n_ame= $row['Pname'];
            $id = $row['P_id'];

            $Cate = $row['Category'];

            $AVqty = $row['AV_qty'];

            $P_rice = $row['Price'];

            $Desc_1 = $row['P_desc'];

         /*   $filename = $row['uploadfile']; */

        }



        ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
           
        </head>

        <body>
     
            <!-- Navbar End -->
            <?php include "ad_nav.php"; ?><br/>


            <!-- Update-Product Start -->
            <div id="page-content" class="page-content">
                <div class="banner">
                    <div class="jumbotron jumbotron-bg text-center rounded-0"
                        style="background-image: url('assets/img/bg-header.jpg');">
                        <div class="container">
                            <h1 class="pt-5">

                            </h1>
                            <p class="lead">
                                ADD Products to your website.
                            </p>
                            <table width="60%" align="center">
                                <tr>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </td>
                                    <td>
                                        <h3> <a href="Dsp_Product.php" class="nav-item nav-link">View Products</a></h3>

                                    </td>
                                </tr>
                            </table>



                            <div class="card card-login mb-5">
                                <div class="card-body">

                                    <form method="POST" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input class="form-control" type="file" name="uploadfile"
                                                value="<?php echo $filename; ?>">
                                        </div>

                                        <div class="">
                                            </br>
                                            <div class="">
                                                <input class="form-control" type="text" required="" placeholder="Product Name"
                                                    name="Pname" value="<?php echo $n_ame; ?>">
                                                <input type="hidden" name="id" value="<?php echo $id; ?>"><br>
                                            </div>
                                        </div>
                                        </br>
                                        <div class="form-group">
                                            <div class="">
                                                <input class="form-control" type="text" required="" placeholder="Category"
                                                    name="Category" value="<?php echo $Cate; ?>">
                                            </div>
                                        </div>
                                        </br>
                                        <div class="">
                                            <div class="">
                                                <input class="form-control" type="text" required=""
                                                    placeholder="Available Quantity" name="AV_qty"
                                                    value="<?php echo $AVqty; ?>">
                                            </div>
                                            </br>

                                        </div>
                                        <div class="">
                                            <div class="">
                                                <input class="form-control" type="text" required="" placeholder="Price"
                                                    name="Price" value="<?php echo $P_rice; ?>">

                                            </div>
                                        </div>
                                        </br>
                                        <div class="">
                                            <div class="">
                                                <input class="form-control" type="text" required=""
                                                    placeholder="Product Description" name="P_desc"
                                                    value="<?php echo $Desc_1; ?>">
                                            </div>
                                        </div>
                                        </br>

                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit" name="upload"> ADD </button>



                                            <button type="submit" class="btn btn-primary btn-block text-uppercase"
                                                name="Update">Update</button>


                                            <button type="submit" class="btn btn-primary btn-block text-uppercase"
                                                name="submit">Delete</button>



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
<?php

    } else {

        header('Location: DSP_Product.php');
    }
}
?>