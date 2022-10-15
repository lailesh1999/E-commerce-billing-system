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

include("dbconnect.php");
 $query = " SELECT * from tax_tbl  where deleted='0' and status='0'";
 $query_res = $link->query($query);


 ?>
<div style="padding: 2%;">
 	<table class="table table-bordered" style="width: 40%;" id="datatable">
 			<thead><tr><th>TAX ID</th>
 						<th>TAX NAME</th>
 						 <th>TAX RATE</th>
 						<th>EDIT</th>
 						<th>delete</th>
 					</tr>
 			</thead>

		 <?php
 	 			while($rows = mysqli_fetch_array($query_res))
 	 			{
 				//foreach($query_res as $rows )
 					//{
 						$tax_id = $rows['tax_id'];
 						$tax_name = $rows["tax_name"];
 						$tax_rate = $rows["tax_rate"];

 					

		 ?>
 			<tr><td> <?php echo " $tax_id"; ?></td>
 				<td><?php echo " $tax_name"; ?></td>
 				<td><?php echo " $tax_rate"; ?></td>
 				<td><a  href=" tax_edit.php?tax_id=<?php echo $tax_id; ?> " class="btn btn-primary">EDIT</a> 
				</td>
				<td> <a href="delete_tax.php?tax_id=<?php echo $tax_id; ?>" class="btn btn-danger">Delete</a></td>
			</tr>
	</div>
<?php 
 					}
				




?>
</table>
<!--
<script type="text/javascript">
	function edit_data(uid){

		var edit = confirm("Are you sure to edit the data");
		if(edit){
			window.location="unit_edit.php?id="+uid;
		}
		else{
			//alert("cancel");
		}

*/
-->
<?php
	//include('includes/footer.php');
?>


</div>
<?php
include('includes/script.php');
?>
	<a href="index.php" class="btn btn-secondary">CANCEL</a>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#datatable').DataTable();
} );
</script>
</body>
</html>