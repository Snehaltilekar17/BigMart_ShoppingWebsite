<html>
<head>

</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organic";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) 

{
    die("Connection failed: " . mysqli_connect_error());

}
	echo "Connected successfully";


// Attempt create table query execution

/*$sql = "CREATE TABLE stud(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE)";
    $sql ="CREATE TABLE products (
        id INT(11) PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        price DECIMAL(10, 2) NOT NULL
      )"; 

  
$sql="CREATE TABLE IF NOT EXISTS `products` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(200) NOT NULL,
	`desc` text NOT NULL,
	`price` decimal(7,2) NOT NULL,
	`rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
	`quantity` int(11) NOT NULL,
	`img` text NOT NULL,
	`date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;"; 
  
$sql="CREATE TABLE cart (
    cid INT(11) PRIMARY KEY AUTO_INCREMENT,
    id INT(11),
    product_image varchar(90) NOT NULL,
    quantity INT(11) NOT NULL ,
    total INT(11) NOT NULL
  )";  
  $sql="CREATE TABLE `bills` (
    `bill_id` bigint(20) NOT NULL AUTO_INCREMENT,
    `bill_to` text NOT NULL,
    `bill_ship` text NOT NULL,
    `bill_dop` date NOT NULL DEFAULT current_timestamp(),
    `bill_due` date NOT NULL DEFAULT current_timestamp(),
    `bill_notes` text DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
  $sql="ALTER TABLE `bills`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY (`bill_dop`),
  ADD KEY (`bill_due`)";
$sql="CREATE TABLE `bill_items` (
    `bill_id` bigint(20) NOT NULL PRIMARY KEY ,
    `item_id` bigint(20) NOT NULL PRIMARY KEY ,
    `item_name` varchar(255) NOT NULL,
    `item_desc` varchar(255) DEFAULT NULL,
    `item_qty` bigint(20) NOT NULL,
    `item_each` decimal(12,2) NOT NULL,
    `item_amt` decimal(12,2) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
$sql="CREATE TABLE `bill_totals` (
    `bill_id` bigint(20) NOT NULL PRIMARY KEY ,
    `total_id` bigint(20) NOT NULL PRIMARY KEY ,
    `total_name` varchar(255) NOT NULL,
    `total_amt` decimal(12,2) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";*/
$sql=" CREATE TABLE  `adminlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1";
if(mysqli_query($conn, $sql))
{
    echo "<br>Table created successfully.";
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>



</body>
</html>