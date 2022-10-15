<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<?php

		include('includes/stylesheet.php');
	?>
</head>
<body>

<?php

		include('includes/sidenav.php');
?>
<div class="main-content" id="panel">
<?php
	

	include('includes/topnav.php');
	//include('includes/header.php');
?>

<?php 
		include('dbconnect.php');
		$user_id = $_GET['user_id'];
		


	$query = " select * from customer_tbl where user_id = '$user_id' and deleted = '0' and status='0' ";
	$query_res = $link->query($query);
	while($rows = mysqli_fetch_array($query_res))
	//foreach($query_res as $rows)
	{
		
	
		$customer_name=$rows['customer_name'];
		$customer_email=$rows['customer_email'];
		$customer_phone_number=$rows['customer_phone_number'];
		$customer_address=$rows['customer_address'];
		$customer_land_mark=$rows['customer_land_mark'];
		$customer_pincode=$rows['customer_pincode'];
		$customer_password=$rows['customer_password'];
		//$tax_rate = $rows['tax_rate'];
?>
			<div class="card-body" style="width:40%;">
				<div class="form-group">
					<form method="POST" action="update_customer_process.php" >
					<input type="hidden" name="customer_id" value="<?php echo $rows['customer_id'] ?>">
    				<label>Enter customer name</label>
    				<input type="text" class="form-control"  name="customer_name" value="<?php echo $customer_name ; ?> " required />
					<label>Enter customer email</label>
    				<input type="text" class="form-control"  name="customer_email" value="<?php echo $customer_email ; ?> " required />    		<label>Enter customer phone number</label>
    				<input type="text" class="form-control"  name="customer_phone_number" value="<?php echo $customer_phone_number ; ?> " required />
    				<label>Enter customer address</label>
    				<input type="text" class="form-control"  name="customer_address" value="<?php echo $customer_address ; ?> " required />
    				<label>Enter customer land mark</label>
    				<input type="text" class="form-control"  name="customer_land_mark" value="<?php echo $customer_land_mark ; ?> " required />
    				<label>Enter customer pincode</label>
    				<input type="text" class="form-control"  name="customer_pincode" value="<?php echo $customer_pincode ; ?> " required />
    				<label>Enter customer password</label>
    				<input type="text" class="form-control"  name="customer_password" value="<?php echo $customer_password ; ?> " required />		


  				</div>
  				<!--
  						<label>Upload Image</label><input type="file" name="category_image" value="<?php echo $category_image; ?>" size="25"><br><br>

  				-->
 					 <button type="submit" name="updatecustomer" class="btn btn-primary">UPDATE CUSTOMER</button>
 					 <a href="view_customer.php" class="btn btn-secondary">CANCLE</a>
			</div>
		</form>

<?php
}

?>
<?php
	//include('includes/footer.php');
?>


</div>
<?php
include('includes/script.php');
?>
</body>
</html>