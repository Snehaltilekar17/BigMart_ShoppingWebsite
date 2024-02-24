<?php
include 'connectionreport.php';
$searchErr = '';
$employee_details = '';
if (isset($_POST['save'])) {
    if (!empty(($_POST['search']))) {
        $search = $_POST['search'];
        $stmt = $con->prepare("select * from orders where ORDER_DATE  like '%$search%' or  ORDER_NO like '%$search%'");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $con = mysqli_connect("localhost", "root", "", "organic");


    } else {
        $searchErr = "Please enter the information";
    }

}
if (!empty($_POST['search'])) {
    $con = ("select * from orders where ORDER_DATE  like '%$search%' ");
}
$con = mysqli_connect("localhost", "root", "", "organic");

// mysqli_connect("servername","username","password","database_name")

// Get all the categories from category table
$sql = "SELECT ORDER_DATE FROM `orders`";
$all_categories = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        .container {
            width: 70%;
            height: 30%;
            padding: 20px;
        }
    </style>


</head>

<body>


    <!-- Navbar Start -->
    <?php include "ad_nav.php"; ?><br />



    <body>
        <br />

        <div class="container">
            <center>
                <h3>Sale's Report</h3>


                <form class="form-horizontal" action="#" method="post">
                    <div class="row">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="email"><b>Search Order Information:</b>:</label>
                            <div class="col-sm-4">
                                <!--        <label>Select a Category</label>
        <select name="Category">
            <?php
            // use a while loop to fetch data 
            // from the $all_categories variable 
            // and individually display as an option
            while (
                $orders = mysqli_fetch_array(
                    $all_categories,
                    MYSQLI_ASSOC
                )
            ):
                ;
                ?>
            <option value="<?php //echo $category["OREDR_NO"];
                // The value we usually set is the primary key
                ?>">
                    <?php //echo $orders["ORDER_DATE"];
                        // To show the category name to the user
                        ?>
                </option>
                
            <?php
            endwhile;
            // While loop must be terminated
            ?>-->
                                </select>
                                <table>
                                    <tr>
                                        <td><input type="text" class="form-control" name="search"
                                                placeholder="search here"></td>
                            </div>

                            <!--    <input type="submit" name="find"> -->
                            <td>
                                <div class="col-sm-2"></br>
                                    <button type="submit" name="save" class="btn btn-success btn-sm">Submit</button>

                                    <span class="error" style="color:red;">*
                                        <?php echo $searchErr; ?>
                                    </span>
                                </div>
                            </td>
                            </tr>
                            <table>
            </center>
        </div>
        

        </div>
        </form>

        <h5><u>Search Result</u></h5><br />
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th> ORDER_NO</th>
                        <th>ORDER_DATE</th>
                        <th>UID</th>
                        <th>TOTAL_AMT</th>
                        <!--    <th>Password</th>
            <th>Confirm Password</th>-->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!$employee_details) {
                        echo '<tr>No data found</tr>';
                    } else {
                        foreach ($employee_details as $key => $value) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $key + 1; ?>
                                </td>
                                <td>
                                    <?php echo $value['ORDER_NO']; ?>
                                </td>
                                <td>
                                    <?php echo $value['ORDER_DATE']; ?>
                                </td>
                                <td>
                                    <?php echo $value['UID']; ?>
                                </td>
                                <td>
                                    <?php echo $value['TOTAL_AMT']; ?>
                                </td>
                                <!--   <td><?php // echo $value['pass'];?></td>
                        <td><?php //echo $value['confpass'];?></td>  -->
                            </tr>

                            <?php
                        }

                    }
                    ?>

                </tbody>
            </table>
        </div>
        </div>
        <script src="jquery-3.2.1.min.js"></script>
        <script src="bootstrap.min.js"></script>
    


    <!--Footer Strat-->
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">@BigMart</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By :@Snehal Tilekar,@Sayali Kachare</a>
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