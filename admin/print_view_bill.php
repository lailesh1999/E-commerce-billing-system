<?php
if(isset($_POST['report']))
{
	$from_date = $_POST['from_date'];
	$to_date = $_POST['to_date'];
	 $query =" SELECT i.order_no,i.grand_total,p.product_name,id.quantity,id.price,i.invoice_id,p.product_id,id.invoice_detail_id,i.user_id from invoice_tbl i,invoice_detail_tbl id,product_tbl p where id.created_date between '$from_date' and '$to_date' and i.deleted='0'and id.product_id = p.product_id and id.invoice_id = i.invoice_id ";
	$query_res = $link->query($query);
?>
<div style="padding: 5%"> 
<table class="table table-bordered" style="width: 100%;">
	<tr><th>CUSTOMER NAME</th>
		<th>ORDER NO</th>
		<th>PRODUCT NAME</th>
		<th>QUANTITY</th>
		<th>PRICE</th>
		<th>GRAND TOTAL</th>
		<th>ADDRESS</th>
		<TH>PHONE NUMBER</TH>
		<TH>PINCODE</TH>
	</tr>
<?php
if (mysqli_num_rows($query_res) > 0) 
{
 while($row = mysqli_fetch_array($query_res))
 {
 	$order_no = $row['order_no'];
 	$product_name = $row['product_name'];
 	$quantity = $row['quantity'];
 	$price = $row['price'];
 	$grand_total = $row['grand_total'];
 	$user_id = $row['user_id'];
 	
  $query_customer =  "SELECT * from customer_tbl where user_id = '$user_id' and deleted='0' ";
 	$query_result = $link->query($query_customer);
 	while($r = mysqli_fetch_array($query_result))
 	{
 		$customer_name = $r['customer_name'];
 		$customer_address = $r['customer_address'];
 		$customer_phone_number = $r['customer_phone_number'];
 		$customer_pincode = $r['customer_pincode'];
 	}
 	?>
 	<tr>
 		<td><?php echo $customer_name; ?></td>
 		<td><?php echo $order_no; ?></td>
 		<td><?php echo $product_name; ?></td>
 		<td><?php echo $quantity; ?></td>
 		<td><?php echo $price; ?></td>
 		<td><?php echo $grand_total; ?></td>
 		<td><?php echo $customer_address; ?></td>
 		<td><?php echo $customer_phone_number; ?></td>
 		<td><?php echo $customer_pincode; ?></td>
 		<td><?php echo $user_id; ?></td>

 		


 	</tr>
 	<?php
 }




?>



</table>