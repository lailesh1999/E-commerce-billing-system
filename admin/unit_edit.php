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
	include('dbconnect.php');
?>
<div class="main-content" id="panel">
<?php
	

	include('includes/topnav.php');
	//include('includes/header.php');


		$unit_id = $_GET['unit_id'];
		


	$query = " select * from unit_tbl  where unit_id = '$unit_id'";
	$query_res = $link->query($query);
	while($rows = mysqli_fetch_array($query_res))
	//foreach($query_res as $rows)
	{
		$unit_name = $rows['unit_name'];
?>			
			<div style="padding: 6%;">
			<div class="card" style="width:30%;">
				<div class="card-body" >
					<div class="form-group">
						<form method="POST" action="update_unit.php">
    					<label>Enter Unit name</label>
    					<input type="hidden" name="unit_id" value="<?php echo $rows['unit_id'] ?>">
    					<input type="text" class="form-control"  name="unit_name" value="<?php echo $unit_name ; ?> "required>
  					</div>
  			
 					 <button type="submit" name="updateunit" class="btn btn-primary">UPDATE</button>
 					 <a href="view_unit.php" class="btn btn-secondary">CANCLE</a>
 				</form>
 			</div>
			</div>
	</div>

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