<?php


include("dbconnect.php");
           
	$phone_number=$_GET['phone_id'];
	//$phone_number=$_POST['phone_number'];
	$phone_flag = "0";
	$query ="SELECT * FROM register_tbl WHERE phone_number  = '$phone_number'";
	$query_run = $link->query($query); 
	while ($rows = mysqli_fetch_array($query_run)) 
	{
		
		$phone_flag = "1";

	}
	if($phone_flag == "1")
	{
		
		echo "<b style=color:red;>Phone number is already present</b><br>";
		//header('location:register.php?');
	}

	 
	 







?>