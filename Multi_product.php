<?php
include "config.php";
if (isset($_POST["Import"])) {
        //First we need to make a connection with the database
/*
$host='localhost'; // Host Name.
$db_user= 'root'; //User Name
$db_password= '';
$db= 'store'; // Database Name.
$conn=mysql_connect($host,$db_user,$db_password) or die (mysql_error());

mysql_select_db($db) or die (mysql_error());
*/
        $db = mysqli_connect("localhost", "root", "", "organic");

        echo $filename = $_FILES["file"]["tmp_name"];
        if ($_FILES["file"]["size"] > 0) {
                $file = fopen($filename, "r");
                //$sql_data = "SELECT * FROM prod_list_1 ";
                while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE) {
                        //print_r($emapData);
//exit();
                        $sql = "INSERT into product(Pname,Category,AV_qty,Price,P_desc,IMG,Date_added) values ('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','')";
                        //mysql_query($sql);
                        mysqli_query($db, $sql);

                }
                fclose($file);
                echo '<script type="text/javascript">';
                echo ' alert("Product Added Successfully..!!")'; //not showing an alert box.
                echo '</script>';
                       // header('Location: index.php');
        } else
                echo 'Invalid File:Please Upload CSV File';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
<?php include "ad_nav.php"; ?><br/>
</br></bbbbbbr></br>
        <div class="card card-login mb-5">
                <div class="card-body">
<center>

                        <form enctype="multipart/form-data" method="post" role="form">


                                <div class="form-group">
                                        <label for="exampleInputFile">File Upload</label>
                                        <input type="file" name="file" id="file" size="150">
                                        <p class="help-block">
                                                Only Excel/CSV File Import.
                                        </p>
                                </div>
                                <button type="submit" class="btn btn-default" name="Import"
                                        value="Import">Upload</button>


                        </form>
</center>
                </div>
        </div>

</body>

</html>