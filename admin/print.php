<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<?php
include('dbconnect.php');

$invoice_id = $_GET['invoice_id'];
$query = "SELECT * from invoice_tbl where invoice_id='$invoice_id' and deleted = '0'";
$query_res = $link->query($query);
?>
<div style="width: 50%;border: 2px solid black;padding-left: 1%;height: auto;">
<table class="table table-bordered" style="width: 100%;" id="datatable">
<b><center>CUSTOMER DETAIL</center></b><hr>	
<?php
 while($row = mysqli_fetch_array($query_res))
 {
 	$order_no = $row['order_no'];
 	$invoice_id = $row['invoice_id'];
 	$grand_total = $row['grand_total'];
 	$address_id = $row['address_id'];
 	$user_id = $row['user_id'];
 	$created_date = $row['created_date'];

 	if($address_id != 'NO')
 	{
 	 $query1 = "SELECT a.address,a.pincode,u.username,a.name,a.mobile_number,a.pincode from register_tbl u,address_tbl a where a.user_id=u.user_id and address_id = '$address_id' ";
 		$query_result1 = $link->query($query1);
 		while($r = mysqli_fetch_array($query_result1))
 		{
 			$address = $r['address'];
 			$name =$r['name'];
 			$phone_number=$r['mobile_number'];
 			$pincode=$r['pincode'];
 			$mode = '<B style="color:green;">ONLINE</B>';
 		}
 	}
 	else
 	{
 		$query_customer =  "SELECT * from customer_tbl where user_id = '$user_id' and deleted='0' ";
 	$query_result = $link->query($query_customer);
 	while($r = mysqli_fetch_array($query_result))
 	{
 		$name = $r['customer_name'];
 		$address = $r['customer_address'];
 		$phone_number = $r['customer_phone_number'];
 		$pincode = $r['customer_pincode'];
 	}
 	}
 	?>
 	<tr>
 		<tr><th style="text-align: left;">CUSTOMER NAME:</th><td><?php echo $name; ?></td></tr>
 		<tr><th style="text-align: left;">ORDER NO:</th><td><?php echo $order_no; ?></td></tr>
 		
 		<tr><th style="text-align: left;">ADDRESS:</th><td><?php echo $address; ?></td></tr>
 		<tr><TH style="text-align: left;">PHONE NUMBER:P</TH><td><?php echo $phone_number; ?></td></tr>
 		<tr><TH style="text-align: left;">PINCODE:</TH><td><?php echo $pincode; ?></td></tr>
 		<tr><th style="text-align: left;">ORDERED  DATE:</th><td><?php echo $created_date; ?></td>

<?php
}
?>
</tr></table></div>

<?php


 	$query_invoice = " SELECT i.grand_total,i.order_no,p.product_name,id.quantity,id.price,i.invoice_id,id.invoice_detail_id from invoice_tbl i,product_tbl p,invoice_detail_tbl id where id.product_id = p.product_id and id.invoice_id = i.invoice_id and id.invoice_id='$invoice_id'";
	$query_invoice_result = $link->query($query_invoice);
	$total_quantity = 0;
	?>
<div style="width: 50%;border: 2px solid black;padding-left: 1%;height: auto;">

<table class="table table-borderless" style="width: 100%;">
	<b><center>ORDER DETAIL</center></b>
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

</table></div>
<script type="text/javascript">
	
window.print();	
</script>

</body>
</html>
