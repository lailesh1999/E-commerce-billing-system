<?php
include('dbconnect.php');
if(isset($_POST['updateadmin']))
{
	$admin_id = $_POST['admin_id'];
	$username = $_POST['username'];
	$password =$_POST['password'];
	$role =$_POST['role'];
	echo $query= " UPDATE admin_tbl set username='$username',password='$password',role='$role' WHERE admin_id='$admin_id' ";
	$query_result = $link->query($query);
	if($query_result)
{
			echo "data has been inserted";
			header('location:view_profile.php');

		}
		else
		{
			echo " not inserted";
		}

}




?>