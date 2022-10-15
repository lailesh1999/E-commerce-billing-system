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
 $query = " SELECT * from unit_tbl where deleted='0' and status='0' ";
 $query_res = $link->query($query);
 ?>
 	<div style="padding: 2%;">
 	<table class="table table-bordered" id="example" style="width: 40%;">
 			<thead><tr><th>UNIT ID</th>
 						<th>UNIT NAME</th>
 						<th>EDIT</th>
 						<th>DELETE</th>
 					</tr>
 			</thead>

		 <?php
 	 			while($rows = mysqli_fetch_array($query_res))
 	 			{
 				//foreach($query_res as $rows )
 					//{
 						$unit_id = $rows['unit_id'];
 						$unit_name = $rows["unit_name"];

		 ?>
 			<tr><td> <?php echo " $unit_id"; ?></td>
 				<td><?php echo " $unit_name"; ?></td>
 				<td><a  href=" update_unit.php?unit_id=<?php echo $unit_id; ?> " class="btn btn-primary">EDIT</a> </td>
 				<td> <a href="delete_unit.php?unit_id=<?php echo $unit_id;?>" class = "btn btn-danger">delete</a></td>
			</tr>
	
<?php 
 					}
				




?>
</table>
<a href="index.php" class="btn btn-danger">CANCEL</a></div>
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
	


</div>




<?php
	//include('includes/footer.php');
?>


</div>


<?php
include('includes/script.php');
?>

    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>

</body>
</html>