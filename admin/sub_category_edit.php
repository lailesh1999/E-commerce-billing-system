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

	include('dbconnect.php');
	$sub_category_id = $_GET['sub_category_id'];
		

	$query="SELECT s.sub_category_name,s.sub_category_id,s.category_id from sub_category_tbl s where sub_category_id='$sub_category_id'";
	//$query = " select * from sub_category_tbl  where sub_category_id = '$sub_category_id'";
	$query_res = $link->query($query);
	while($rows = mysqli_fetch_array($query_res))
	//foreach($query_res as $rows)
	{
		$sub_category_name = $rows['sub_category_name'];
		$sub_category_id = $rows['sub_category_id'];
		$category_id = $rows['category_id'];
?>
		<div style="padding: 1%;">
			<div class="card" style="width:30%;padding: 1%;">
				<div class="card-body" >
					<div class="form-group">
						<form method="POST" action="update_sub_category_process.php">
							 <label>SELECT CATEGORY</label>
        						<select name="category_id" id="category_id">
            						
										<?php
            								include('dbconnect.php');
            								$query = "select * from category_tbl where status ='0' and deleted = '0' ";
            								$query_result = $link->query($query);
            								while($rows = mysqli_fetch_array($query_result))
            								{
              									$cat_id = $rows['category_id'];
              									$category_name =  $rows['category_name'];
              							?>
              									<option value="<?php echo $cat_id; ?> " <?php if($category_id==$cat_id){echo "selected";} ?>>  <?php echo $category_name; ?> </option>
            							<?php
            								}
										?>
								</select>
								<input type="hidden" name="sub_category_id" value="<?php echo $sub_category_id;?>">
    							<label>Enter sub category name</label>
    							<input type="text" class="form-control"  name="sub_category_name" value="<?php echo $sub_category_name ; ?> "required>
  								</div>
  			
 					 			<button type="submit" name="updatesubcategory" class="btn btn-primary">UPDATE</button>
 					 				<a href="view_sub_category.php" class="btn btn-secondary">CANCLE</a>
 						</form>
 					</div>
				</div>
			</div>
		</div>
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