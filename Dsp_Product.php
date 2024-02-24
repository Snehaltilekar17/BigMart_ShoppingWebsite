<!-- PHP code to establish connection with the localserver -->
<?php
include "config.php";

$sql = "SELECT * FROM `product`";

$all_categories = mysqli_query($conn, $sql);
//$name = mysqli_real_escape_string($conn, $_POST['Product_name']);

// Store the Category ID in a "id" variable
//$id = mysqli_real_escape_string($conn, $_POST['Category']);


// Database name is geeksforgeeks

// Server is localhost with
// port number 3306
//$mysqli = new mysqli($servername, $user,
//			$password, $database);

// Checking for connections
if ($conn->connect_error) {
    die('Connect Error (' .
        $conn->connect_errno . ') ' .
        $conn->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM product ORDER BY P_id DESC ";
$result = $conn->query($sql);


//UPDATE----**
if (isset($_GET['Edit'])) {

$name = $_POST['Pname'];

$Cate = $_POST['Category'];

$AV_QTY = $_POST['AV_qty'];

$Price = $_POST['Price'];

$Description = $_POST['P_desc'];

$filename = $_FILES["uploadfile"]["name"];
$sql = " SELECT * FROM product ORDER BY P_id DESC ";

}
//UPdate-Select

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `product` WHERE `P_id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) 
    {        

        while ($row = $result->fetch_assoc()) {

            $name = $row['Pname'];

            $Cate = $row['Category'];

            $AV_QTY = $row['AV_qty'];

            $Price  = $row['Price'];

            $Description = $row['P_desc'];

            $filename = $row['uploadfile'];
            $id = $row['P_id'];



	
        }
        } 
    }
    ?>

<!--$conn->close();
-->

<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }

        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
                ' Calibri', 'Trebuchet MS', 'sans-serif';
        }

        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }

        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        td {
            font-weight: lighter;
        }
    </style>
</head>

<body>
    <section>
        <h1>Product List Added By the Admin</h1>        <!-- TABLE CONSTRUCTION -->
        <div>
            <form method="POST" >

                <table>
                    <tr>
                        <td>Product List
                        </td>
                        <form method="POST">
                            <!--
                            <label>Name of Product:</label>
                            <input type="text" name="Product_name" required><br>
                            <label>Select a Category</label>
                            <select name="Category">
                                <?php
                                /*
                                // use a while loop to fetch data 
                                // from the $all_categories variable 
                                // and individually display as an option
                                while (
                                    $category = mysqli_fetch_array(
                                        $all_categories,
                                        MYSQLI_ASSOC
                                    )
                                ):
                                    ;
                                    */
                                    ?>
                                    <option value="<? //php echo $category["Category_ID"];
                                    // The value we usually set is the primary key
                                    ?>">
                                        <?php // echo $category["Category_Name"];
                                        // To show the category name to the user
                                        ?>
                                    </option>
                                    <?php
                                //endwhile;
                                // While loop must be terminated
                                ?>
                            </select>
                            <br>
                            <input type="submit" value="submit" name="submit">
                        </form>

                        <td>

                        </td>

                    </tr>
                </table>
                            -->
            </form>
        </div>
        <div>
            <table>
                <tr>
                    <th>Pid</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Available Quantity</th>
                    <th>Price</th>
                    <th>Product Description</th>
                    <th>Image</th>
                    <th>Action</th>


                </tr>
                <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                <?php
                // LOOP TILL END OF DATA
                while ($rows = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                        <td>
                            <?php echo $rows['P_id']; ?>
                        </td>
                        <td>
                            <?php echo $rows['Pname']; ?>
                        </td>
                        <td>
                            <?php echo $rows['Category']; ?>
                        </td>
                        <td>
                            <?php echo $rows['AV_qty']; ?>
                        </td>
                        <td>
                            <?php echo $rows['Price']; ?>
                        </td>
                        <td>
                            <?php echo $rows['P_desc']; ?>
                        </td>
                        <td>
                            <?php echo $rows['IMG']; ?>
                        </td>
                        <td><a href="Update.php?id=<?php echo $rows['P_id']; ?>">Edit</a>&nbsp;
                                    <a href="delete.php?id=<?php echo $rows['P_id']; ?>">Delete</a>
                                </td>

                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </section>
</body>

</html>