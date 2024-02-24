
<html>
<body>
<?php

$servername = "localhost";

$username = "root"; 

$password = ""; 

$dbname = "organic"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn)
{
	//echo "Connected successful...!!";
}

if ($conn->connect_error) 
{

    die("Connection failed: " . $conn->connect_error);

}

?> 
</body>
</html>
