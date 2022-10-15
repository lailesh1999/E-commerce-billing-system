<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title>bookstore</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<?php
include('dbconnect.php');
$query ="select * from invoice_tbl where deleted='0' ";
//$query ="SELECT p.product_name,id.quantity,id.price,i.invoice_id,i.grand_total from product_tbl p,invoice_tbl i,invoice_detail_tbl id where id.product_id = p.product_id and id.invoice_id = i.invoice_id and i.deleted= '0'and p.deleted='0' and i.invoice_id='$invoice_id'";
$query_result = $link->query($query);
while($rows= mysqli_fetch_array($query_result))
{
	$order_no = $rows['order_no'];
	$grand_total=$rows['grand_total'];
	$invoice_id = $rows['invoice_id'];
	$product_img="";
	//echo $img_query = "SELECT product_img.pm,product_id.p,product_img_id.pm from product_img_tbl pm,product_tbl p where deleted='0' and status='0' and pm.product_id = p.product_id";
	/*$img_query="SELECT product_img,product_id,product_img_id from product_img_tbl where deleted='1'";
	$query_run = $link->query($img_query);
	while($row = mysqli_fetch_array($query_run))
	{
		$product_img = $row['product_img'];
	}
		*/?>
	<div style="padding: 20px">	<div style="padding-left:20px;border: 2px solid blue;width: 30%;height:200px;">
		
	<a href="order_detail.php?invoice_id=<?php echo$invoice_id; ?>"><b>ORDER NO:<?php echo $order_no;?></b></a><br>
	<!--<img src="admin/product_img/<?php echo $product_img;?>" width="100" height="100" />-->
	<b>TOTAL PRICE:<?php echo $grand_total;?></b><br>
	


	</div></div>
	<?php
}


?>
</body>
</html>