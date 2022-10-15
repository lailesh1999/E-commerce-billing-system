<?php

include('dbconnect.php');
if(isset($_POST['updatepassword']))
{
	//session_start();
	//$admin_id = $_SESSION['admin_id'];
	$user_id=$_POST['user_id'];
	$password=$_POST['password'];
     echo $query = " UPDATE register_tbl SET password = '$password' where user_id = '$user_id'";
	$query_res = $link->query($query);
	if($query_res)
	{
		echo "updated sucessfully";
		header('location:view_register.php');
	}
	else
	{
		echo "not updated";
	}
	//if (move_uploaded_file($tempname, $folder))  { 
      //      $msg = "Image uploaded successfully"; 
       // }else{ 
        //    $msg = "Failed to upload image"; 
      //} 
}

?>