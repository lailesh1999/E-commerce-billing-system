<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<div class="card-body" style="padding: 1%;">
  <div class="shadow-lg p-3 mb-5 bg-white rounded border border-dark" style="width:29rem;">
<div class="card" style="width: 26rem;background-color:lightgrey;color:black;">
	<form method="POST" action="add_category_process.php" enctype="multipart/form-data">

  		<div class="card-body">
			<div class="form-group">
				<label>ENTER CATEGORY NAME</label>
    				<input type="text" class="form-control"  name="category_name" required>
  			</div>
    				<label>Upload Image</label><input type="file" name="category_image" size="25"><br><br>

  			</form>
 					 <button type="submit" name="addcategory" class="btn btn-primary">ADD CATEGORY</button>
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