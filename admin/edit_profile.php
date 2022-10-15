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
	include('dbconnect.php');
	$admin_id = $_GET['admin_id'];
	$query = " select * from admin_tbl where admin_id='$admin_id'";
	$query_res = $link->query($query);
	while ($r = mysqli_fetch_array($query_res)) {
		$admin_id= $r['admin_id'];
		$username = $r['username'];
		$password = $r['password'];
		$role = $r['role'];	
	?>
<div class="card-body"n style="padding: 1%;">
  <div class="shadow-lg p-3 mb-5 bg-white rounded border border-dark" style="width:29rem;">
<div class="card" style="width: 26rem;background-color:lightblue;color:black;">
	<form method="POST" action="update_admin_process.php" enctype="multipart/form-data">

  		<div class="card-body">
			<div class="form-group">
				<input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>">
				<label>EDIT USERNAME  NAME</label>
    				<input type="text" class="form-control"  name="username" value="<?php echo $username; ?>" required>

				<label>EDIT PASSWORD</label>
					 <input type="text" class="form-control"  name="password" value="<?php echo $password; ?>" required>
				<label>EDIT ROLE</label>
					  <input type="text" class="form-control"  name="role" value="<?php echo $role; ?>" required>
					

  		</div>
  			</form>
 					 <button type="submit" name="updateadmin" class="btn btn-primary">UPDATE ADMIN</button>
           <input type="reset" class="btn btn-primary" />&nbsp<a href="index.php" class="btn btn-secondary">CANCEL</a>
           <br>
           </div>
        
		</div>
</center>	</div>
</form></div>

<?php



	}

?>




</div>
<?php
include('includes/script.php');
?>
</body>
</html>