<?php
include('dbconnect.php');
if(isset($_POST['addadmin']))
{
	$username = $_POST['username'];
	$password =$_POST['password'];
	$role =$_POST['role'];

echo $query = "INSERT into admin_tbl(username,password,role) VALUES ('$username','$password','$role')";
$query_result = $link->query($query);
if($query_result)
{
			echo "data has been inserted";
			header('location:index.php');

		}
		else
		{
			echo " not inserted";
		}




}
?>