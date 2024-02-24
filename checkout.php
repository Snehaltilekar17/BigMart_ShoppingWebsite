<?php 
	include "config.php";
	session_start();
	
	include "cart.class.php";
	$cart=new Cart();
	
	if(isset($_POST["submit"])){
		
		$name=mysqli_real_escape_string($conn,$_POST["name"]);
		$email=mysqli_real_escape_string($conn,$_POST["email"]);
		$contact=mysqli_real_escape_string($conn,$_POST["contact"]);
		$address=mysqli_real_escape_string($conn,$_POST["address"]);
		$city=mysqli_real_escape_string($conn,$_POST["city"]);
		$pincode=mysqli_real_escape_string($conn,$_POST["pincode"]);
		#insert User Details
		$sql="insert into Delivery_details (NAME,EMAIL,CONTACT,ADDRESS,CITY,PINCODE) values ('{$name}','{$email}','{$contact}','{$address}','{$city}','{$pincode}')";
		if($conn->query($sql)){
			$uid=$conn->insert_id;

			#insert Order information
			$order_no=rand(10000,100000);
			$total_amt=$cart->get_cart_total();
			$sql="insert into orders (ORDER_NO,ORDER_DATE,UID,TOTAL_AMT,P_name) values ('{$order_no}',NOW(),'{$uid}','{$total_amt}','{$Pname}')";
			if($conn->query($sql)){
				$oid=$conn->insert_id;
				
				#insert Order Item Details
				$sql="insert into order_details (OID,PID,PNAME,PRICE,QTY,TOTAL) values ";
				$rows=[];
				foreach($cart->get_all_items() as $item){
					$rows[]="('{$oid}','{$item["id"]}','{$item["name"]}','{$item["price"]}','{$item["qty"]}','{$item["total"]}')";
				}
				$sql.=implode(",",$rows);
				if($conn->query($sql)){
					$cart->destroy();
					header("location:complete.php?order_no={$order_no}");
				}
			}
			
		}
		
	}
?>
<html>
	<head>
        <title>Checkout</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
		<?php include "navbar.php"; ?>
        <div class='container mt-5'></BR></BR>
			<h2 class='text-muted mb-4'>Delivery Details</h2>
			<div class='row'>
				<div class='col-md-6 mx-auto'>
					<form method='post' action='<?php echo $_SERVER["REQUEST_URI"];?>' autocomplete="off" HEIGHT="450">
							<label>Name</label>
							<input type='text' name='name' class='form-control' required placeholder=' Name'>
							<label>Email</label>
							<input type='email' name='email' class='form-control' required placeholder='abc@gmail.com'>
							<label>Contact</label>
							<input type='text' name='contact' class='form-control' required placeholder='10-digits'>
							<label>Address</label>
							<textarea class='form-control' required name='address'></textarea>
							<label>City</label>
							<input type='text' name='city' class='form-control' required placeholder='City'>
							<label>Pincode</label>
							<input type='text' name='pincode' class='form-control' required placeholder='Pincode'>
						<input type='submit' name='submit' value='Checkout' class='btn btn-primary'>
					</form>
				</div>
			</div>
		</div>
    </body>
</html> 