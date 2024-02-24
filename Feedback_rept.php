<?php
include 'connectionreport.php';
$searchErr = '';
$employee_details='';
if(isset($_POST['save']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $stmt = $con->prepare("select * from contactus where ID like '%$search%' or Name like '%$search%'");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //print_r($employee_details);
         
    }
    else
    {
        $searchErr = "Please enter the information";
    }
    
}
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
<style>
.container{
    width:70%;
    height:30%;
    padding:20px;
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
    <?php include "ad_nav.php"; ?><br/>


    
    <!-- Navbar End -->

    
    <!--
<link rel="stylesheet" href="bootstrap.css" crossorigin="anonymous">
- Optional theme 
<link rel="stylesheet" href="bootstrap-theme.css" crossorigin="anonymous">
<style>
.container{
    width:70%;
    height:30%;
    padding:20px;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
 -->
 <br/>
    <br/>
    <div class="container">
    <h3><u>Feedback Report</u></h3>
    <br/><br/>
    <form class="form-horizontal" action="#" method="post">
    <div class="row">
        <div class="form-group">
            <label class="control-label col-sm-4" for="email"><b>Search Customer Information:</b>:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="search" placeholder="search here">
            </div></br>
            <div class="col-sm-2">
              <button type="submit" name="save" class="btn btn-success btn-sm">Submit</button>
            </div>
        </div>
        <div class="form-group">
            <span class="error" style="color:red;">* <?php echo $searchErr;?>
        </span>
        </div>
         
    </div>
    </form>

    <h3><u>Search Result</u></h3><br/>
    <div class="table-responsive">          
      <table class="table">
        <thead>
          <tr>
          <th>Sr.no</th>
          <th>ID</th>
            <th> Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Date</th>
        <!--    <th>Password</th>
            <th>Confirm Password</th>-->
          </tr>
        </thead>
        <tbody>
                <?php
                 if(!$employee_details)
                 {
                    echo '<tr>No data found</tr>';
                 }
                 else{
                    foreach($employee_details as $key=>$value)
                    {
                        ?>
                    <tr>
                        <td><?php echo $key+1;?></td>
                        <td><?php echo $value['ID'];?></td>
                        <td><?php echo $value['Name'];?></td>
                        <td><?php echo $value['email'];?></td>
                        <td><?php echo $value['subject'];?></td>
                     <td><?php  echo $value['msg'];?></td>
                       <td><?php echo $value['Date'];?></td>  
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
</body>
</html>
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