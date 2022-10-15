<!DOCTYPE html>
<html>
<head>
	<title></title>

 


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">	
	<link rel="stylesheet"  href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
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
 //$query = " SELECT * from product_tbl where deleted='0' and status='0' ";
  $query ="  SELECT p.product_name,p.product_description,p.product_code,p.quantity,p.product_price,p.discount,p.selling_price,c.category_name,s.sub_category_name,t.tax_name,t.tax_rate,u.unit_name,c.category_id,s.sub_category_id,u.unit_id,t.tax_id,p.product_id from sub_category_tbl s, category_tbl c,unit_tbl u,tax_tbl t,product_tbl p where p.sub_category_id=s.sub_category_id and p.category_id=c.category_id  and p.unit_id=u.unit_id and p.tax_id=t.tax_id and c.deleted='0' and s.deleted='0' and p.deleted='0' and u.deleted='0' and t.deleted='0'";
 $query_res = $link->query($query);
 ?>
 	<div style="padding: 2%;">
 	<table class="table table-bordered" id="example" style="width: 100%;">
 			<thead><tr><th>PRODUCT ID</th>
 						<th>UNIT NAME</th>
 						 <th>TAX NAME</th>
 			 			<th>TAX RATE</th>
 						<th>CATEGORY NAME</th>
 						<th>SUB CATEGORY NAME</th>
 						<th>PRODUCT NAME</th>
 						 <th>PRODUCT DESCRIPTION</th>
 						 <th>PRODUCT CODE</th>
 						<th>QUANTITY</th>
 						<th>PRODUCT PRICE</th>
 						<th>DISCOUNT</th>
 						 <th>SELLING PRICE</th>
 						<th>EDIT</th>
 						<th>DELETE</th>
 						<th>VIEW IMAGE</th>
 					</tr>
 			</thead>

		 <?php
 	 			while($rows = mysqli_fetch_array($query_res))
 	 			{
 				//foreach($query_res as $rows )
 					//{
 						$product_name = $rows['product_name'];
 						$product_id = $rows['product_id'];
						$product_description =$rows['product_description'];
						$product_code=$rows['product_code'];
						$quantity=$rows['quantity'];
						$product_price = $rows['product_price'];
						$discount=$rows['discount'];
						$selling_price=$rows['selling_price'];
						$unit_name=$rows['unit_name'];
						$tax_name=$rows['tax_name'];
						$tax_rate=$rows['tax_rate'];
						$category_name=$rows['category_name'];
						$sub_category_name=$rows['sub_category_name'];
		 ?>
 				<tr><td> <?php echo " $product_id"; ?></td>
				<td> <?php echo "$unit_name "; ?></td>
				<td> <?php echo "$tax_name "; ?></td>
				<td> <?php echo "$tax_rate "; ?></td>
				<td> <?php echo " $category_name"; ?></td>
				<td> <?php echo " $sub_category_name"; ?></td>
 				<td><?php echo " $product_name"; ?></td>
 				<td><?php echo " $product_description"; ?></td>
 				<td><?php echo " $product_code"; ?></td>
 				<td><?php echo " $quantity"; ?></td>
 				<td><?php echo " $product_price"; ?></td>
 				<td><?php echo " $discount"; ?></td>
 				<td><?php echo " $selling_price"; ?></td>

 				<td><a  href=" product_edit.php?product_id=<?php echo $product_id; ?> " class="btn btn-primary">EDIT</a> </td>
 				<td> <a href="delete_product.php?product_id=<?php echo $product_id;?>" class = "btn btn-danger">delete</a>
 				<td> <a href="view_product_img.php?product_id=<?php echo $product_id;?>">view image </a></td>
			</tr>
	</div>
<?php 
 					}
				




?>
</td></tr></table>
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
	
<a href="index.php" class="btn btn-dark">CANCEL</a>
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
    $('#example').DataTable();
} );
</script>
</body>
</html>