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
<div class="card-body" style="padding: 4%;">
	<div class="shadow-lg p-3 mb-5 bg-white rounded border border-dark" style="width:22rem;">
<div class="card" style="width: 20rem;background-color:lightblue;color:black;">

	<form method="POST" action="add_unit_process.php">

  		<div class="card-body">
			<div class="form-group">
    				<label>Enter Unit name</label>
    				<input type="text" class="form-control"  name="unit_name" required>
  			</div>
  			
 					 <button type="submit" name="addunit" class="btn btn-primary">ADD UNIT</button>
 					 <a href="index.php" class="btn btn-secondary">CANCEL</a>
 					</div>
 			</div
		</div>
</center>	</div>
</form>
</div>
<?php
include('includes/script.php');
?>

</body>
</html>