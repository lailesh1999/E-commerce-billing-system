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
	//incl

	include("dbconnect.php");
	//$query 'SELECT p.product_name,p.product_description,p.product_code,p.quantity,p.product_price,p.discount,p.selling_price,c.category_name,s.sub_category_name,t.tax_name,t.tax_rate,u.unit_name,c.category_id,s.sub_category_id,u.unit_id,t.tax_id,p.product_id from sub_category_tbl s, category_tbl c,unit_tbl u,tax_tbl t,product_tbl p where p.sub_category_id=s.sub_category_id and p.category_id=c.category_id  and p.unit_id=u.unit_id and p.tax_id=t.tax_id and c.deleted='0' and s.deleted='0' and p.deleted='0' and u.deleted='0' and t.deleted='0'";'
	 $query = "SELECT b.quantity,b.purchase_price,b.invoice_number,b.total_price,p.product_name,s.supplier_name,p.product_id,b.buy_supplier_id,s.supplier_id from buy_supplier_tbl b,product_tbl p,supplier_tbl s where b.product_id = p.product_id  and b.supplier_id = s.supplier_id and p.deleted='0' and b.deleted='0' and s.deleted='0'";




	//SELECT b.quantity,b.purchase_price,b.invoice_number,p.product_name,p.product_id,p.category_id,c.category_name,b.buy_supplier_id from buy_supplier_tbl b,product_tbl p,category_tbl c where p.product_id = b.product_id and p.deleted='0' and b.deleted='0'
	$query_result = $link->query($query);
?>

<div style="padding: 4%;">
 	<table class="table table-bordered" style="width: 100%;" id="datatable">
 		<thead><tr><th> BUY SUPPLIER ID</th>
 					<th>PRODUCT ID</th>
 						<th>SUPPLIER NAME</th>
 						 <th>QUANTITY</th>
 			 			<th>PURCHASE PRICE</th>
 			 			<th>TOTAL PRICE</th>
 						<th>INVOICE NUMBER</th>
 						<th>product name</th>
 						<th>Category name</th>
 						<th>Sub Category Name</th>
 						<th>EDIT</th>
 						<th>DELETE</th>
 						
 					</tr>
 			</thead>
<?php
				while($rows = mysqli_fetch_array($query_result))
 	 			{
 	 				//$supplier_id = $rows['supplier_id'];
 	 				$product_id=$rows['product_id'];
 	 				$supplier_id=$rows['supplier_id'];
 	 				$buy_supplier_id=$rows['buy_supplier_id'];
 	 				$quantity=$rows['quantity'];
 	 				$purchase_price=$rows['purchase_price'];
 	 				$invoice_number=$rows['invoice_number'];
 	 				$product_name=$rows['product_name'];
 	 				$supplier_name=$rows['supplier_name'];
 	 				$total_price = $rows['total_price'];
 	 				$category_name = "";
 	 				$sub_category_name = "";
 	 				$product_query = "select * from product_tbl where product_id='$product_id'";
 	 				$product_res = $link->query($product_query);
 	 				while($product_row = mysqli_fetch_array($product_res))
 	 				{
 	 					$category_id = $product_row["category_id"];
 	 					$sub_category_id = $product_row["sub_category_id"];
 	 					$category_query = "select * from category_tbl where category_id='$category_id'";
 	 					$category_res  = $link->query($category_query);
 	 					while($category_row = mysqli_fetch_array($category_res))
 	 					{
 	 						$category_name = $category_row["category_name"];
 	 					}

 	 					$sub_category_query = "select * from sub_category_tbl where sub_category_id='$sub_category_id'";
 	 					$sub_category_res  = $link->query($sub_category_query);
 	 					while($sub_category_row = mysqli_fetch_array($sub_category_res))
 	 					{
 	 						$sub_category_name = $sub_category_row["sub_category_name"];
 	 					}
 	 				}
 	 			
?>
		<tr>
					<td> <?php echo $buy_supplier_id; ?></td>
					<td> <?php echo $product_id ; ?></td>
					<td><?php echo $supplier_name; ?></td>
					<td> <?php echo $quantity ; ?></td>
					<td> <?php echo $purchase_price ; ?></td>
					<td> <?php echo $total_price ; ?></td>
					<td> <?php echo  $invoice_number; ?></td>
					<td> <?php echo $product_name; ?></td>
					<td><?php echo $category_name; ?></td>
					<td><?php echo $sub_category_name; ?></td>
					

 				<td><a  href="edit_buy_supplier.php?buy_supplier_id=<?php echo $buy_supplier_id; ?> " class="btn btn-primary">EDIT</a> </td>
 				<td> <a href="delete_buy_supplier.php?buy_supplier_id=<?php echo $buy_supplier_id;?>" class = "btn btn-danger">delete</a></td>
			</tr>
	</div>
<?php
}
?>
</table>
<a href="index.php">cancel</a>

<
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