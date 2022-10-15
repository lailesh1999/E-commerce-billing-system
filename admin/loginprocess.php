
<?php
include('dbconnect.php');
if (isset($_POST['submitbtn'])) 
{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$flag = "0";
		$admin_id = "";
		$query=" SELECT admin_id FROM admin_tbl WHERE username='$username' AND password='$password'";
		$query_res=$link->query($query);
		while($row=mysqli_fetch_array($query_res))
		{
			$admin_id = $row["admin_id"];
			$flag="1";
		}
		if($flag=="1"){
			session_start();
			$_SESSION["admin_id"] = $admin_id;
			header("location:index.php");
			echo "password and username are correct";
		}
		else
		{
			echo " not correct";
		}


}
















/*



if(isset($_POST['submitbtn']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	 $connection= mysqli_connect("localhost","root","","book_store");

	$query=" SELECT * FROM register WHERE username='$username' AND password='$password'";
	$query_run=mysqli_query($connection,$query);
	

}
*/
?>