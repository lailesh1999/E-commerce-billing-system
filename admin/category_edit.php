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

		include('dbconnect.php');
		$category_id = $_GET['category_id'];
		


	$query = " select * from category_tbl where category_id = '$category_id'";
	$query_res = $link->query($query);
	while($rows = mysqli_fetch_array($query_res))
	//foreach($query_res as $rows)
	{
		$category_name = $rows['category_name'];
		$category_image = $rows['category_image'];
		//$tax_rate = $rows['tax_rate'];
?>
			<div class="card-body" style="width:40%;">
				<div class="form-group">
					<form method="POST" action="update_category_process.php" enctype="multipart/form-data">
					<input type="hidden" name="category_id" value="<?php echo $rows['category_id'] ?>">
    				<label>Enter category_name</label>
    				<input type="text" class="form-control"  name="category_name" value="<?php echo $category_name ; ?> " required />
    				
  				</div>
  				<!--
  						<label>Upload Image</label><input type="file" name="category_image" value="<?php echo $category_image; ?>" size="25"><br><br>

  				-->
 					 <button type="submit" name="updatecategory" class="btn btn-primary">UPDATE category</button>
 					 <a href="view_category.php" class="btn btn-secondary">CANCLE</a>
			</div>
		</form>

<?php
}

?>
<?php
	//include('includes/footer.php');
?>


</div>
<?php
include('includes/script.php');
?>
</body>
</html>