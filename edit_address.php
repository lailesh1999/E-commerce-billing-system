<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>



<?php 
		include('dbconnect.php');

		$address_id = $_GET['address_id'];
		


	$query = " SELECT  * from address_tbl where address_id = '$address_id' and deleted = '0' and status='0' ";
	$query_res = $link->query($query);
	while($rows = mysqli_fetch_array($query_res))
	//foreach($query_res as $rows)
	{
		
	
						$address_id = $rows['address_id'];
 						$address = $rows['address'];
						$pincode = $rows['pincode'];
						$city = $rows['city'];
						$state = $rows['state'];
						$land_mark = $rows['land_mark'];
						$name = $rows['name'];
						$mobile_number=$rows['mobile_number'];
		//$tax_rate = $rows['tax_rate'];
?>
			<div class="card-body" style="width:40%;">
				<div class="form-group">
					<form method="POST" action="update_address_process.php" >
						<input type="hidden" name="address_id" value="<?php echo $address_id;?>">
						<label>ADDRESS</label>
			            <input type="text" class="form-control"  name="address" value="<?php echo $address; ?>"required>
			            <label>PIN CODE</label>
			            <input type="text" class="form-control"  name="pincode" value="<?php echo $pincode; ?>" required>
			            <label>CITY</label>
			            <input type="text" class="form-control"  name="city" value="<?php echo $city; ?>" required>
			            <label>STATE</label>
			            <input type="text" class="form-control"  name="state" value="<?php echo $state; ?>" required>
			            <label>LAND MARK</label>
			            <input type="text" class="form-control"  name="land_mark" value="<?php echo $land_mark; ?>" required>
			            <label>NAME</label>
			            <input type="text" class="form-control"  name="name"  value="<?php echo $name; ?>" required>
			            <label>10-DIGIT MOBILE NUMBER</label>
            <input type="text" class="form-control"  name="mobile_number" value="<?php echo $mobile_number; ?>" required><br>
 
  		
 					 <button type="submit" name="updateaddress" class="btn btn-secondary">UPDATE ADDRESS</button>
 					 <a href="view_address.php" class="btn btn-success">CANCLE</a>
			</div>
		</form>

<?php
}

?>
</body>
</html>