<?php
include 'connectionreport.php';
$searchErr = '';
$employee_details = '';
if (isset($_POST['save'])) {
    if (!empty($_POST['search'])) {
        $search = $_POST['search'];
        $stmt = $con->prepare("select * from register where reg_id like '%$search%' or Name like '%$search%'");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //print_r($employee_details);

    } else {
        $searchErr = "Please enter the information";
    }

}

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
    <!-- Spinner Start -->
    <!--
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
-->
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php include "ad_nav.php"; ?><br />

    <!-- Page Header End -->
    <!--report Page start-->
    <br />
    <center>
    <div class="container">
        <h3><u>Registration Report</u></h3>
       
       
        <form class="form-horizontal" action="#" method="post">
            <div class="row">
                <div class="form-group">
                    <table>
                        <tr>
                            <td><input type="text" class="form-control" name="search" placeholder="search here"></td>
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

            </div>
        </form>
        </center>
      
        <h5><u>Search Result</u></h5><br />
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>ID</th>
                        <th> Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Confirm Password</th>
                        <th>Date</th>
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
                                    <?php echo $value['reg_id']; ?>
                                </td>
                                <td>
                                    <?php echo $value['Name']; ?>
                                </td>
                                <td>
                                    <?php echo $value['email']; ?>
                                </td>
                                <td>
                                    <?php echo $value['mob']; ?>
                                </td>
                                <td>
                                    <?php echo $value['uname']; ?>
                                </td>
                                <td>
                                    <?php echo $value['pass']; ?>
                                </td>
                                <td>
                                    <?php echo $value['confpass']; ?>
                                </td>
                                <td>
                                    <?php echo $value['date']; ?>
                                </td>
                            </tr>

                            <?php
                        }
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
                </br>
    <script src="jquery-3.2.1.min.js"></script>
    <script src="bootstrap.min.js"></script>
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