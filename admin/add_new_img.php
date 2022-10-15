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
<?php
//include('dbconnect.php');
$product_id = $_GET['product_id'];



?>

<div class="card-body"n style="padding: 1%;">
  <div class="shadow-lg p-3 mb-5 bg-white rounded border border-dark" style="width:29rem;">
<div class="card" style="width: 26rem;background-color:lightblue;color:black;">

  
	<form method="POST" action="add_product_new_img_process.php" enctype="multipart/form-data">

  		<div class="card-body">
			<div class="form-group">
			<input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
    				<label>Upload Image</label><input type="file" name="product_img" size="25"><br><br>

  			</form>
 					 <button type="submit" name="addimg" class="btn btn-primary"> UPLOAD IMAGE </button>
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