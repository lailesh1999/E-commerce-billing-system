<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>



<?php 
		include('dbconnect.php');
		$user_id = $_GET['user_id'];
		


	$query = " select * from register_tbl where user_id = '$user_id'";
	$query_res = $link->query($query);
	while($rows = mysqli_fetch_array($query_res))
	//foreach($query_res as $rows)
	{
		$username = $rows['username'];
		$phone_number = $rows['phone_number'];
		$email=$rows['email'];
		$password=$rows['password'];
		//$tax_rate = $rows['tax_rate'];
?>
			<div class="card-body" style="width:40%;">
				<div class="form-group">
					<form method="POST" action="update_register_process.php" >
					<input type="hidden" name="user_id" value="<?php echo $rows['user_id'] ?>">
    				<label>Enter user name</label>
    			<input type="text" class="form-control"  name="username" value="<?php echo $username ; ?> " required />
    				<label>Enter Phone number</label>
    			<input type="text" class="form-control"  name="phone_number" value="<?php echo $phone_number ; ?> " required />
    			<label>Enter email</label>
    			<input type="text" class="form-control"  name="email" value="<?php echo $email ; ?> " required />
    			
  				
 					<br> <button type="submit" name="updateregister" class="btn btn-primary" id="submit" >UPDATE USER</button>
 					 <a href="view_register.php" class="btn btn-secondary">CANCLE</a>
			</div>
    </form></div></div>
	

<?php
}

?>

<script type="text/javascript">

function CheckPasswordMatch()
{
  //alert(111);
  //var bt = document.getElementById('submit');
  var passWord = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;
    if( passWord == confirmPassword){
      var var1 = "password  match";
      document.getElementById("CheckPasswordMatch").innerHTML = var1;
      //bt.disabled = false;
    }else
    {
     // bt.disabled = true;
      var var2 = "password doesnot match ";
      document.getElementById("CheckPasswordMatch").innerHTML = var2;
    }

}
</script>
</body>
</html>





























