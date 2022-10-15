<?php
include('dbconnect.php');
if(isset($_POST['bill']))
{
	$order_no = $_POST['order_no'];
	$user_id = $_POST['user_id'];
	//$date= $_POST['date'];
	//$time = $_POST['time'];
	//$address_id = $_POST['address_id'];
	//$grand_total = $_POST['grand_total'];
	$total = $_POST['total'];
	$grand_total=0;
	foreach ($total as $totals) {
		$grand_total = $grand_total + $totals;
	}
 $grand_total;
	$query = "INSERT into invoice_tbl (order_no,user_id,grand_total) VALUES('$order_no','$user_id','$grand_total')";
	$query_run = $link->query($query);
	$invoice_id = $link->insert_id;
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	$product = $_POST['product'];
	$product_code = $_POST["product_code"];
	$i=0;
	foreach ($product as $key=>$value ) {

		 $product_code = $_POST["product_code"][$i];
		$product = $_POST['product'][$i];
		$price = $_POST['price'][$i];
		$quantity = $_POST['quantity'][$i];
		 $product_qry = "SELECT product_id from product_tbl where product_code='$product_code' and deleted='0'and status='0'";
		$product_result = $link->query($product_qry);
		while($rows = mysqli_fetch_array($product_result))
		{
			$product_id = $rows['product_id']; 
		}
		//echo "<br/>";
		 $query_invoice_detail = " INSERT INTO invoice_detail_tbl (invoice_id,product_id,quantity,price) values('$invoice_id','$product_id','$quantity','$price') ";
		$query_invoice_detail_result = $link->query($query_invoice_detail);
		$i++;
	}
	
		//echo $query_invoice_detail = " INSERT INTO invoice_detail_tbl (invoice_id,product_id,quantity,price) values('$invoice_id','$product_id','$quantity','$price') ";
			//$query_run_invoice_detail = $link->query($query_invoice_detail);

?>
<div style="width: 50%;border: 2px solid black;padding-left: 1%;height: auto;">
	<?php
	$query = " select * from customer_tbl where user_id='$user_id' and deleted = '0'";
	$query_run = $link->query($query);
	while($row = mysqli_fetch_array($query_run))
	{
		$customer_name = $row['customer_name'];
		$customer_email = $row['customer_email'];
		$customer_phone_number = $row['customer_phone_number'];
		$customer_address = $row['customer_address'];
		$customer_pincode = $row['customer_pincode'];
	}
	
	?>
	<b>NAME:<?php echo $customer_name;?></b><br>
	<b>PHONE NUMNBER:<?php echo $customer_phone_number;?></b><br>
	<b>ADDRESS:<?php echo $customer_address;?></b><br>
	<b>PINCODE:<?php echo $customer_pincode;?></b><br>
	<b>RECIPT NO:<?php echo $order_no;?></b><br>
	

	<?php
	$query_invoice = " SELECT i.grand_total,i.order_no,p.product_name,id.quantity,id.price,i.invoice_id,id.invoice_detail_id from invoice_tbl i,product_tbl p,invoice_detail_tbl id where id.product_id = p.product_id and id.invoice_id = i.invoice_id and i.order_no='$order_no'";
	$query_invoice_result = $link->query($query_invoice);
	$total_quantity = 0;
	?>
<table class="table table-borderless" style="width: 100%;">
 			<thead><tr><th>PRODUCT NAME</th>
 						 <th>QUANTITY</th>
 			 			<th>PRICE</th>
 						<th>TOTAL PRICE</th><hr>
 						</tr>




	<?php
	while($r =mysqli_fetch_array($query_invoice_result))
	{
		$grand_total = $r['grand_total'];
		$product_name = $r['product_name'];
		$quantity=$r['quantity'];
		$price=$r['price'];
		$totalq = $quantity * $price;
		$total_quantity = $total_quantity + $quantity;
	?>
<tr><td style="text-align: center;"> <?php echo " $product_name"; ?></td>
				<td style="text-align: center;"> <?php echo "$quantity "; ?></td>
				<td style="text-align: center;"> <?php echo "$price "; ?></td>
				<td style="text-align: center;"> <?php echo " $totalq"; ?></td>
		<?php
 }

?>
 				</tr>
 				<td  style="padding-left: 2%;"></td>  <td><b>TOTAL QUANTITY:&nbsp</b><?php echo $total_quantity; ?></td><td colspan="1"> </td><td colspan="2"><b>GRAND-TOTAL:&nbsp</b><?php echo $grand_total; ?></td>




</div>


<?php
$query6 = "select * from invoice_detail_tbl where invoice_id = '$invoice_id'";
$query_result6 = $link->query($query6);
while($rowss = mysqli_fetch_array($query_result6))
{
	$quantity2 = $rowss['quantity'];
	 $quantity2;
	$product_id = $rowss['product_id'];
	 $query ="select * from product_tbl where product_id='$product_id'";
	$res1 = $link->query($query);
	//if($res1)
	$quantity ="";
	while($row1 = mysqli_fetch_array($res1))
	{
		$quantity=$row1['quantity'];
		$product_id = $row1['product_id'];
		//echo $quantity;
	}
	 $quantity = $quantity-$quantity2;
	 $query4 = " UPDATE product_tbl set quantity = '$quantity' where deleted ='0' and status='0' and product_id = '$product_id'";
	$query_result4 = $link->query($query4);

}

}



?>
<script type="text/javascript">
	
	window.print();
</script>