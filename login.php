<!DOCTYPE html>
<html>
<head>
	<title>bookstore</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<center><div class="card" style="width: 23rem;background-color:lightblue;color:black;">
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
         <button type="submit" name="loginbtn" class="btn btn-primary">LOGIN</button> <a href="register.php">register</a><br>

        <?php 
        if(isset($_GET["msg"]))
        {
          if($_GET["msg"]=='1')
          {
            ?>
            <div class="container">
                <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>INVALID USER NAME AND PASSWORD!!!!</strong> 
                  </div>
              </div>
              <?php

          }
         
                  }
        ?>
 					

           
		</div>
</center>	</div>
</form>





</body>
</html>
