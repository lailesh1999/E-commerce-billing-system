<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<?php

		include('includes/stylesheet.php');
		include('dbconnect.php');
		session_start();
		$admin_id = $_SESSION['admin_id'];
	?>
</head>
<body>
dy>
	<?php

		include('includes/sidenav.php');
?>
<div class="main-content" id="panel">
<?php
	

	include('includes/topnav.php');
?>
<div class="card-body"n style="padding: 1%;">
  <div class="shadow-lg p-3 mb-5 bg-white rounded border border-dark" style="width:29rem;">
<div class="card" style="width: 26rem;background-color:lightblue;color:black;">
	<form method="POST" action="add_admin_process.php" enctype="multipart/form-data">

  		<div class="card-body">
			<div class="form-group">
				<label>ENTER USERNAME  NAME</label>
    				<input type="text" class="form-control"  name="username" required>

				<label>ENTER PASSWORD</label>
					 <input type="text" class="form-control"  name="password" required>
				<label>ENTER ROLE</label>
					  <input type="text" class="form-control"  name="role" required>
					

  		</div>
  			</form>
 					 <button type="submit" name="addadmin" class="btn btn-primary">ADD ADMIN</button>
           <input type="reset" class="btn btn-primary" />&nbsp<a href="index.php" class="btn btn-secondary">CANCEL</a>
           <br>
           </div>
        
		</div>
</center>	</div>
</form></div>










</div>
<?php
include('includes/script.php');
?>
</body>
</html>