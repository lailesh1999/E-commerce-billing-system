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
	$query = "select * from supplier_tbl where deleted='0' and status='0' ";
	$query_result = $link->query($query);
?>

<div style="padding: 2%;">
 	<table class="table table-bordered" style="width: 100%;" id="datatable">
 		<thead><tr><th>SUPPLIER ID</th>
 						<th>SUPPLIER NAME</th>
 						 <th>SUPPLIER CONTACT</th>
 			 			<th>SUPPLIER EMAIL</th>
 						<th>SUPPLIER ADDRESS</th>
 						<th>GST</th>
 						<th>EDIT</th>
 						<th>DELETE</th>
 						
 					</tr>
 			</thead>
<?php
				while($rows = mysqli_fetch_array($query_result))
 	 			{
 	 				$supplier_id = $rows['supplier_id'];
 	 				$supplier_name = $rows['supplier_name'];
 	 				$supplier_contact = $rows['supplier_contact'];
 	 				$supplier_email=$rows['supplier_email'];
 	 				$supplier_address=$rows['supplier_address'];
 	 				$gst=$rows['gst'];
?>
		<tr><td> <?php echo " $supplier_id"; ?></td>
				<td> <?php echo "$supplier_name "; ?></td>
				<td> <?php echo "$supplier_contact "; ?></td>
				<td> <?php echo "$supplier_email "; ?></td>
				<td> <?php echo " $supplier_address"; ?></td>
				<td> <?php echo " $gst"; ?></td>

 				<td><a  href="edit_supplier.php?supplier_id=<?php echo $supplier_id; ?> " class="btn btn-primary">EDIT</a> </td>
 				<td> <a href="delete_supplier.php?supplier_id=<?php echo $supplier_id;?>" class = "btn btn-danger">delete</a>
			</tr>
	</div>
<?php
}
?>
<a href="index.php">cancel</a>
<?php
	//include('includes/footer.php');
?>


</div>
<?php
include('includes/script.php');
?>
</table>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#datatable').DataTable();
} );
</script>
</body>