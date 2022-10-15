<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <?php

    include('includes/stylesheet.php');
  ?>
</head>
<body>
  <?php

    include('includes/sidenav.php');
?>
<div class="main-content" id="panel">
<?php
  

  include('includes/topnav.php');
  //include('includes/header.php');
?>
<div class="card-body"n style="padding: 1%;">
  <div class="shadow-lg p-3 mb-5 bg-white rounded border border-dark" style="width:29rem;">
<div class="card" style="width: 26rem;background-color:lightblue;color:black;">
	<form method="POST" action="add_customer_process.php" enctype="multipart/form-data">

  		<div class="card-body">
			<div class="form-group">
				<label>ENTER CUSTOMER  NAME</label>
    				<input type="text" class="form-control"  name="customer_name" required>

<label>ENTER CUSTOMER  EMAIL</label>
            <input type="text" class="form-control"  name="customer_email" required>
<label>ENTER CUSTOMER  PHONE NUMBER</label>
            <input type="text" class="form-control"  name="customer_phone_number" required>
<label>ENTER CUSTOMER  ADDRESS</label>
            <input type="text" class="form-control"  name="customer_address" required>
<label>ENTER CUSTOMER  LAND MARK</label>
            <input type="text" class="form-control"  name="customer_land_mark" required>
<label>ENTER CUSTOMER  PINCODE</label>
            <input type="text" class="form-control"  name="customer_pincode" required>
<label>ENTER CUSTOMER  PASSWORD</label>
            <input type="text" class="form-control"  name="customer_password" required>

  		</div>
  			</form>
 					 <button type="submit" name="addcustomer" class="btn btn-primary">ADD CATEGORY</button>
           <input type="reset" class="btn btn-primary" />&nbsp<a href="index.php" class="btn btn-secondary">CANCEL</a>
           <br>
           </div>
        
		</div>
</center>	</div>
</form></div>


<?php
  //include('includes/footer.php');
?>


</div>
<?php
include('includes/script.php');
?>

</body>
</html>