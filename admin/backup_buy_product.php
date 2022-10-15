
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


<div>
	<?php
	

	//include('includes/topnav.php');
	//include('includes/header.php');
include("dbconnect.php");
 //$query = " SELECT * from product_tbl where deleted='0' and status='0' ";
  $query ="  SELECT p.product_name,p.product_description,p.product_code,p.quantity,p.product_price,p.discount,p.selling_price,s.sub_category_name,s.sub_category_id,p.product_id from sub_category_tbl s,product_tbl p where p.sub_category_id=s.sub_category_id and s.deleted='0' and p.deleted='0'";
 $query_res = $link->query($query);
 ?>
 	<div style="padding: 2%;">
 	<table class="table table-bordered myTable" id="example" style="width: 100%;">
 			<thead><tr><th>PRODUCT ID</th>
 						
 						<th>SUB CATEGORY NAME</th>
 						<th>PRODUCT NAME</th>
 						 <th>PRODUCT DESCRIPTION</th>
 						 <th>PRODUCT CODE</th>
 						<th>QUANTITY</th>
 						<th>PRODUCT PRICE</th>
 						<th>DISCOUNT</th>
 						
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
						
						$discount=$rows['discount'];
						$selling_price=$rows['selling_price'];
						
						$sub_category_name=$rows['sub_category_name'];
		 ?>
 				<tr><td> <?php echo " $product_id"; ?></td>
				<td> <?php echo " $sub_category_name"; ?></td>
 				<td><?php echo " $product_name"; ?></td>
 				<td><?php echo " $product_description"; ?></td>
 				<td><?php echo " $product_code"; ?></td>
 				<td><?php echo " $quantity"; ?></td>
 				
 				<td><?php echo " $discount"; ?></td>
 				<td><?php echo " $selling_price"; ?></td>

 				
 				
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
	
<a href="index.php" class="btn btn-primary">CANCEL</a>
	<!--
<a href="add_unit.php" >Add Unit</a><br/>
<a href="view_unit.php">View Unit</a><br>
<a href="add_tax.php">Add tax</a><br>
<a href="view_tax.php">View tax</a><br>
<a href="add_category.php">Add category</a><br>
<a href="view_category.php">View category</a><br>
<a href="add_sub_category.php">Add sub category</a><br>
<a href="view_sub_category.php">View sub category</a><br>
<a href="add_product.php" >Add product</a><br/>
<a href="view_product.php" >view product</a><br/>
<a href="add_supplier.php">Add supplier</a><br>
<a href="view_supplier.php">view supplier</a><br>
<a href="add_buy_supplier.php">add buy supplier</a><br>
<a href="view_buy_supplier.php">view buy supplier</a><br>
<a href="add_customer.php">add customer</a><br>
<a href="view_customer.php">view customer</a><br>
-->
</div>





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
