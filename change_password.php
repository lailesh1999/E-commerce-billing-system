<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>



<?php 
		include('dbconnect.php');
		session_start();
		$user_id = $_SESSION['user_id'];
		


	$query = " select * from register_tbl where user_id = '$user_id'";
	$query_res = $link->query($query);
	while($rows = mysqli_fetch_array($query_res))
	//foreach($query_res as $rows)
	{
		$password=$rows['password'];
	?>
		<div class="card-body" style="width:40%;">
				<div class="form-group">
					<form method="POST" action="update_password_process.php" >
					<input type="hidden" name="user_id" value="<?php echo $rows['user_id'] ?>">

					<label>Existing password</label>
    				<input type="text" class="form-control" id="epassword" name="epassword"  value="<?php echo $password ; ?> " required />


 
    				<label>Enter	new  password</label>
    		<input type="text" class="form-control" id="password" name="password"   required />
      

    			<label>Confirm password</label><br>
    		<input type="text" class="form-control" onkeyup="CheckPasswordMatch()" id="confirm_password"  name="confirm_password"  required>
    			<div class="registrationFormAlert" style="color:blue;" id="CheckPasswordMatch"></div>
  				
 					<br> <button type="submit" name="updatepassword" class="btn btn-primary" id="submit" disabled>UPDATE PASSWORD</button>
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
  var bt = document.getElementById('submit');
  var passWord = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;
    if( passWord == confirmPassword){
      var var1 = "password  match";
      document.getElementById("CheckPasswordMatch").innerHTML = var1;
      bt.disabled = false;
    }else
    {
     bt.disabled = true;
      var var2 = "password doesnot match ";
      document.getElementById("CheckPasswordMatch").innerHTML = var2;
    }

}
/*
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function visibility3() {
  var x = document.getElementById('password');
  if (x.type === 'password') {
    x.type = "text";
    $('#eyeShow').show();
    $('#eyeSlash').hide();
  }else {
    x.type = "password";
    $('#eyeShow').hide();
    $('#eyeSlash').show();
  }
}*/

</script>
</body>
</html>