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

include("dbconnect.php");
 $query = " SELECT * from category_tbl where status ='0' and deleted = '0' ";

 $query_res = $link->query($query);


 ?>
<div style="padding: 3%;">
 	<table class="table table-bordered" style="width: 40%;" id="datatable">
 			<thead><tr><th>CATEGORY ID</th>
 						<th>CATEGORY NAME</th>
 						 <th>IMAGE</th>
 						<th>EDIT</th>
 						<th>DELETE</th>
 					</tr>
 			</thead>

		<?php
 	 			while($rows = mysqli_fetch_array($query_res))
 	 			{
 				//foreach($query_res as $rows )
 					//{
 						$category_id = $rows['category_id'];
 						$category_name = $rows["category_name"];
 						$category_image = $rows["category_image"];
 						//$tax_rate = $rows["tax_rate"];

 					

		 ?>
 			<tr><td> <?php echo " $category_id"; ?></td>
 				<td><?php echo " $category_name"; ?></td>
 				<td><img src="upload/<?php echo $category_image;?>" width="100" height="100" /></td>
 				<td><a  href="category_edit.php?category_id=<?php echo $category_id; ?> " class="btn btn-primary">EDIT</a> 

				</td>
				<td><a href="delete_category.php?category_id=<?php echo $category_id;?>" class="btn btn-danger">DELETE</a>
			</tr></td></tr>
	</div>
<?php 
				}
				

				//<img src="upload:category_image/jpg;base64,'.base64_encode( $rows['category_image'] )."></img>


?>
</table>
	<a href="index.php" class="btn btn-secondary">CANCEL</a>
	<?php
	//include('includes/footer.php');
?>


</div>
<?php
include('includes/script.php');
?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#datatable').DataTable();
} );
</script>
</body>
</html>