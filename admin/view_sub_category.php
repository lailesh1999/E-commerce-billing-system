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
 	//$query = " SELECT * from sub_category_tbl where status ='0' and deleted = '0' ";
//$query="SELECT category_tbl.category_id, category_tbl.category_name,sub_category_tbl.sub_category_name, sub_category_tbl.sub_category_id
//FROM category_tbl
//INNER JOIN sub_category_tbl
//ON category_tbl.sub_category_id=sub_category_tbl.sub_category_id ";

$query = "  SELECT c.category_name,s.sub_category_name,c.category_id,s.sub_category_id from sub_category_tbl s, category_tbl c where c.category_id=s.category_id and c.deleted='0' and s.deleted='0'";
$query_res = $link->query($query);


 ?>

 	<table class="table table-bordered" style="width: 40%;" id="datatable">
 			<thead><tr><th>SUB CATEGORY ID</th>
 						<th> CATEGORY NAME</th>
 						<th>SUB CATEGORY NAME</th>
 						<th>EDIT</th>
 						<th>DELETE</th>
 					</tr>
 			</thead>

		<?php
 	 			while($rows = mysqli_fetch_array($query_res))
 	 			{
 				//foreach($query_res as $rows )
 					//{
 						$sub_category_id = $rows['sub_category_id'];
 						$category_name = $rows['category_name'];
 						$sub_category_name = $rows["sub_category_name"];
 						

 					

		 ?>
 			<tr><td> <?php echo " $sub_category_id"; ?></td>
 			    <td> <?php echo " $category_name"; ?> </td>
 				<td> <?php echo " $sub_category_name"; ?></td>
 				<td><a  href="sub_category_edit.php?sub_category_id=<?php echo $sub_category_id; ?> " class="btn btn-primary">EDIT</a> 

				</td>
				<td><a href="delete_sub_category.php?sub_category_id=<?php echo $sub_category_id;?>" class="btn btn-danger"           >DELETE</a>
			</tr>
	
<?php 
				}
				




?>

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