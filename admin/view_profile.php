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
	<?php

		include('includes/sidenav.php');
?>
<div class="main-content" id="panel">
<?php
	

	include('includes/topnav.php');
	$query="select * from admin_tbl where admin_id = '$admin_id'";
	$query_res = $link->query($query);
?>
<div style="padding: 4%;">
<table class="table table-bordered" id="datatable">
<tr>
	<th>USER NAME</th>
	<TH>PASSWORD</TH>
	<th>ROLE</th>
	<th>CREATED</th>

</tr>
<?php
	while($r = mysqli_fetch_array($query_res))
	{
		$username = $r['username'];
		$password = $r['password'];
		$role = $r['role'];
		$created_date = $r['created_date'];
	?>
	<tr>
		<td><?php echo $username; ?></td>
		<td><?php echo $password; ?></td>
		<td><?php echo $role; ?></td>
		<td><?php echo $created_date; ?></td>
		<td><a href="edit_profile.php?admin_id=<?php echo $admin_id; ?>">EDIT</a></td>
	</tr>
<?php

	}

?>
</table></div>










<?php
include('includes/script.php');
?>
</body>
</html>