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
		$supplier_id = $_GET['supplier_id'];
		


		$query = " select * from supplier_tbl where deleted = '0' and status ='0' and supplier_id = '$supplier_id'";
		$query_res = $link->query($query);
	while($rows = mysqli_fetch_array($query_res))
	//foreach($query_res as $rows)
	{
		$supplier_name = $rows['supplier_name'];
		$supplier_contact=$rows['supplier_contact'];
		$supplier_email=$rows['supplier_email'];
		$supplier_address=$rows['supplier_address'];
		$gst=$rows['gst'];
?>
			<div class="card-body" style="width:40%;">
				<div class="form-group">
					<form method="POST" action="update_supplier_process.php" >
					<input type="hidden" name="supplier_id" value="<?php echo $rows['supplier_id'] ?>">
    				<label>Enter  supplier name</label>
    				<input type="text" class="form-control"  name="supplier_name" value="<?php echo $supplier_name ; ?> " required />
    				<label>Enter  supplier contact</label>
    				<input type="text" class="form-control"  name="supplier_contact" value="<?php echo $supplier_contact ; ?> " required />
    				<label>Enter  supplier email</label>
    				<input type="text" class="form-control"  name="supplier_email" value="<?php echo $supplier_email ; ?> " required />
    				<label>Enter  supplier address</label>
    				<input type="text" class="form-control"  name="supplier_address" value="<?php echo $supplier_address ; ?> " required />
    				<label>Enter  gst</label>
    				<input type="text" class="form-control"  name="gst" value="<?php echo $gst ; ?> " required />
    				
  				</div>
  				<!--
  						<label>Upload Image</label><input type="file" name="category_image" value="<?php echo $category_image; ?>" size="25"><br><br>

  				-->
 					 <button type="submit" name="updatesupplier" class="btn btn-primary">UPDATE SUPPLIER</button>
 					 <a href="view_supplier.php" class="btn btn-secondary">CANCLE</a>
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