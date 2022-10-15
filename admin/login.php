<!DOCTYPE html>
<html>
<head>
	<title>bookstore</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<center><div class="card" style="width: 20rem;background-color:lightblue;color:black;">
	<form method="POST" action="loginprocess.php">

  		<div class="card-body">
			<div class="form-group">
    				<label>USERNAME</label>
    				<input type="text" class="form-control"  aria-describedby="emailHelp" name="username" required>
  			</div>
  			<div class="form-group">
    				<label>PASSWORD</label>
    				<input type="password" class="form-control" name="password" required>
  			</div>
 					 <button type="submit" name="submitbtn" class="btn btn-primary">Submit</button>
		</div>
</center>	</div>
</form>

</body>
</html>
