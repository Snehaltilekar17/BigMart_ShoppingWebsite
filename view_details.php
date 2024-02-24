<?php 
	include "config.php";
	session_start();
	
	include "cart.class.php";
	$cart=new Cart();
	
	if(isset($_POST["submit"])){
		$item=[
			"id"=>$_POST["pid"],
			"name"=>$_POST["product"],
			"price"=>$_POST["price"],
			"qty"=>$_POST["qty"],
		   // "total"=>("price" * "qty"),

			"total"=>(($_POST["qty"])*($_POST["price"])),
			"img"=>$_POST["img"],
		];
		$cart->add_to_cart($item);
		header("location:view_cart.php");
	}
	
	$data=[];
	$sql="select * from product where P_id={$_GET["id"]}";
	$res=$conn->query($sql);
	if($res->num_rows>0){
		$data=$row=$res->fetch_assoc();
	}
?>
<html>
	<head>
        <title>Products Details</title>

    </head>
    <body>
	<?php include "navbar.php"; ?>
        <div class='container mt-5'>
			<div class='row'>
				<div class='col-md-9 mx-auto'></br>
</br>
</br>
					<h2 class='text-muted mb-4'>Product Details</h2><hr>
					<div class='row mt-5'>
						<div class='col-md-4'>
							  <img src="./Added_imgs/img/<?php echo $data["IMG"]; ?>" class='img-thumbnail'>
						</div>	
						<div class='col-md-8'>
							<h2 class='text-muted'><?php echo $data["Pname"]; ?></h2>
							<p class="font-weight-bold">Price &#8377; <?php echo $data["Price"]; ?></p>
							<p class="font-weight-bold">Available Quantity : <?php echo $data["AV_qty"]; ?></p>


							<p><?php echo $data["P_desc"]; ?></p>
							
							<form method='post' action='<?php echo $_SERVER["REQUEST_URI"];?>'>
								<input type='hidden' name='pid' value='<?php echo $data["P_id"]; ?>'>
								<input type='hidden' name='product' value='<?php echo $data["Pname"]; ?>'>
								<input type='hidden' name='price' value='<?php echo $data["Price"]; ?>'>
								<input type='hidden' name='img' value='<?php echo $data["IMG"]; ?>'>
									<p><input type='number' min='1' value='1' name='qty' required class='form-control col-md-5'></p>
								<input type='submit' name='submit' value='Add To Cart' class='btn btn-primary'>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	
    </body>
</html> 