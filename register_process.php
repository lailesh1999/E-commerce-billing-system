<?php

include('dbconnect.php');
if(isset($_POST['addregister']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$confirm_password=$_POST['confirm_password'];
	$phone_number=$_POST['phone_number'];
	//$phone_flag = "0";
	//$email_flag = "0";
	//$user_id="";
	/* $query ="SELECT * FROM register_tbl WHERE email  = '$email'";
	$query_run = $link->query($query); 
	while ($rows = mysqli_fetch_array($query_run)) 
	{
		//$user_id = $rows["user_id"];
		$email_flag = "1";

	}

	$query ="SELECT * FROM register_tbl WHERE phone_number  = '$phone_number'";
	$query_run = $link->query($query); 
	while ($rows = mysqli_fetch_array($query_run)) 
	{
		//$user_id = $rows["user_id"];
		$phone_flag = "1";
	}


	if($phone_flag == "1" && $email_flag == "1")
	{
	  	// echo "email is present ";
	  		 header('location:register.php?email=1&phone=1');
			//header('Location:register.php');

	}
	else if($phone_flag == "1")
	{
		header('location:register.php?phone=1');
	}
	else if($email_flag == "1")
	{
		header('location:register.php?email=1');
	}
	else
	{
		  */ $query = "INSERT INTO register_tbl (username,email,phone_number,password) VALUES ('$username','$email','$phone_number','$password')";
				$query_run=$link->query($query);
				
				if($query_run)
				{
					
				//echo "registertion is sucessfully done ";
				header('Location:login.php');
				}
				else
				{
				//echo "NOt saved ";
				//echo "not registered";
					header('Location:register.php');
				}
	 	}	 

?>