<?php
include("dbconnect.php");
if(isset($_POST['loginbtn']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$flag = "0";
	$user_id = "";
	$query=" SELECT * FROM register_tbl WHERE username='$username' AND password='$password'";
	$query_run = $link->query($query);
	while($rows=mysqli_fetch_array($query_run))
	{
			$user_id = $rows["user_id"];
			$flag="1";
	}
		if($flag=="1")
		{
			session_start();
			$_SESSION["user_id"] = $user_id;
			header("location:index1.php");
			echo "password and username are correct";
		}
		else
		{
			//$message = "Username and/or Password incorrect.\\nTry again.";
 			 /*echo "<script type='text/javascript'>alert('$message'); </script>";
 			 echo "<script type='text/javascript'>window.location='login.php';</script>";*/
 			 header('location:login.php?msg=1');

		}
}

?>