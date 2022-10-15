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


include("dbconnect.php");
 $query = " SELECT * from customer_tbl where status ='0' and deleted = '0' ";

 $query_res = $link->query($query);


 ?>

 	<table class="table table-bordered" style="width: 100%;" id="datatable">
 			<thead><tr><th>CUSTOMER ID</th>
 						<th>CUSTOMER NAME</th>
 						 <th>CUSTOMER EMAIL</th>
 						<th>CUSTOMER PHONE NUMBER</th>
 						<th>CUSTOMER ADDRESS</th>
 						<th>CUSTOMER LAND MARK</th>
 						<th>CUSTOMER PINCODE</th>
 						<th>CUSTOMER PASSWORD</th>
 						<th>EDIT</th>
 						<th>DELETE</th>
 					</tr>
 			</thead>

		<?php
 	 			while($rows = mysqli_fetch_array($query_res))
 	 			{
 				//foreach($query_res as $rows )
 					//{
 						$user_id = $rows['user_id'];
 						$customer_name = $rows["customer_name"];
 						$customer_email = $rows["customer_email"];;
 						$customer_phone_number=$rows['customer_phone_number'];
 						$customer_address=$rows['customer_address'];
 						$customer_land_mark=$rows['customer_land_mark'];
 						$customer_pincode=$rows['customer_pincode'];
 						$customer_password=$rows['customer_password'];
 						//$tax_rate = $rows["tax_rate"];

 					

		 ?>
 			<tr><td> <?php echo " $user_id"; ?></td>
 				<td> <?php echo " $customer_name"; ?></td>
 				<td> <?php echo " $customer_email"; ?></td>
 				<td> <?php echo " $customer_phone_number"; ?></td>
 				<td> <?php echo " $customer_address"; ?></td>
 				<td> <?php echo " $customer_land_mark"; ?></td>
 				<td> <?php echo " $customer_pincode"; ?></td>
 				<td> <?php echo " $customer_password"; ?></td>
 				<td><a  href="edit_customer.php?user_id=<?php echo $user_id; ?> " class="btn btn-primary">EDIT</a> 

				</td>
				<td><a href="delete_customer.php?user_id=<?php echo $user_id;?>" class="btn btn-danger">DELETE</a>
			</tr>
	
<?php 
				}
				

				//<img src="upload:category_image/jpg;base64,'.base64_encode( $rows['category_image'] )."></img>


?>

	<a href="index.php" class="btn btn-secondary">CANCEL</a>
	<?php
	//include('includes/footer.php');
?>


</div>
<?php
include('includes/script.php');
?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#datatable').DataTable();
} );
</script>
</body>
</html>