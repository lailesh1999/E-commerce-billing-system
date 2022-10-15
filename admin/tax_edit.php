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

		include('dbconnect.php');
		$tax_id = $_GET['tax_id'];
		


	$query = " select * from tax_tbl where tax_id = '$tax_id'";
	$query_res = $link->query($query);
	while($rows = mysqli_fetch_array($query_res))
	//foreach($query_res as $rows)
	{
		$tax_name = $rows['tax_name'];
		$tax_rate = $rows['tax_rate'];
?>
			<div class="card-body" style="width:40%;">
				<div class="form-group">
					<form method="POST" action="update_tax.php">
					<input type="hidden" name="tax_id" value="<?php echo $rows['tax_id'] ?>">
    				<label>Enter Tax name</label>
    				<input type="text" class="form-control"  name="tax_name" value="<?php echo $tax_name ; ?> "required>
    				<label>Enter Tax Rate</label>
    				<input type="text" class="form-control"  name="tax_rate" value="<?php echo $tax_rate ; ?> "required>
  				</div>
  			
 					 <button type="submit" name="updatetax" class="btn btn-primary">UPDATE TAX</button>
 					 <a href="view_tax.php" class="btn btn-secondary">CANCLE</a>
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