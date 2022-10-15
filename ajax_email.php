<?php


include("dbconnect.php");
           
	$email=$_GET['email_id'];
	//$phone_number=$_POST['phone_number'];
	$email_flag = "0";
	$query ="SELECT * FROM register_tbl WHERE email  = '$email'";
	$query_run = $link->query($query); 
	while ($rows = mysqli_fetch_array($query_run)) 
	{
		//$user_id = $rows["user_id"];
		$email_flag = "1";

	}
	if($email_flag == "1")
	{
		
		echo "<b style=color:red;>Email is already present</b><br>";
		//header('location:register.php?');
	}

	 
	 







?>