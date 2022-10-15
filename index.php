<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" type="text/css" href="link.php">
</head>
<body>
<a href="view_register.php">VIEW PROFILE</a><BR>
<a href="change_password.php">CHANGE PASSWORD</a><br>
<a href="add_address.php">ADD ADDRESS</a><br>
<a href="view_address.php">VIEW ADDRESS</a><br>
<a href="my_orders.php">MY ORDERS</a>
<a href="logout.php">Logout</a>
<div style="padding-left: 60%;"><a href="cart.php" class="btn btn-danger">GO TO CART</a></div>
<?php
include('dbconnect.php');
session_start();
if(isset($_SESSION['user_id']))
{
	$user_id = $_SESSION['user_id'];
}
else
{
	header("location:login.php");
}

$query = " SELECT  p.product_id,p.product_name,p.product_code,p.discount,p.quantity,p.selling_price,i.product_img,p.product_id,i.product_img_id from product_img_tbl i,product_tbl p where p.product_id = i.product_id and i.deleted = '0' and p.deleted='0'";
$query_result = $link->query($query);
?>
<!--
<div style="padding: 2%;">
 	<table class="table table-bordered" style="width: 100%;">
 	-->
 			<!--<th>PRODUCT NAME</th>
 						 <th>PRODUCT DESCRIPTION</th>
 						 <th>PRODUCT CODE</th>
 						<th> Available QUANTITY</th>
 						<th>discount</th>
 						<th>PRODUCT PRICE</th>
 						
 						 			</tr>
 			</thead>
-->

 <?php
 	 			while($rows = mysqli_fetch_array($query_result))
 	 			{
 	 					$product_name = $rows['product_name'];
 	 					$product_img=$rows['product_img'];
						//$product_description =$rows['product_description'];
						
						$quantity=$rows['quantity'];
						$discount=$rows['discount'];
						$selling_price=$rows['selling_price'];
						$product_id = $rows["product_id"];
					?>
 		<div style="padding-left: 20px">	<div style="padding-left:20px;border: 2px solid blue;width: 20%;"><table ><tr><td style="width:150px;">
 			<a href="view_buy_products.php?product_id=<?php echo $rows['product_id']; ?>&product_img_id=<?php echo $rows['product_img_id']; ?>">
 				<img src="admin/product_img/<?php echo $product_img;?>" width="100" height="100" /></a></td><td>
 				<?php echo "<b> $product_name</b>"; ?><br>
 				<?php echo " $discount &nbsp%0FF"; ?><br>
 				<?php echo "RS $selling_price"; ?>
 					
 			</td></tr><tr><td style="text-align: center;"><br>

 					<button type="button" name="submit" id="button1" class="btn btn-sm" onclick= "addtocart_plus(<?php echo $product_id; ?>)" ><i class='fas fa-plus' style='font-size:10px'></i></button>
 					<?php
 					
 					$quantity2 = 0;
 					$query1 = "SELECT quantity from ajax_cart_tbl where product_id='$product_id' and user_id='$user_id'  and deleted = '0'";
 					$query_res = $link->query($query1);
 					while ($row = mysqli_fetch_array($query_res)) {
 						//$cart_id = $row['cart_id'];
 						$quantity2 = $row['quantity'];
 						
 					}
 						
 						?>
 						<input type="text" name="quantity" id="quantity<?php echo $product_id; ?>" value="<?php echo $quantity2; ?>" size="1px">
 				
 					
	

						<button class="btn btn-sm"><i class='fas fa-minus'onclick="addtocart_minus(<?php echo $product_id; ?>)" style='font-size:10px'></i></button><br><br>


						

 			<br></tr><br></table></div><br></td></tr></table></div>

</tr>
	</div>
<?php 
 					}
?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">




	function addtocart_plus(product_id)
	{
		//alert(product_id);
		var qty = parseInt(document.getElementById("quantity"+product_id).value);
		qty = parseInt(qty)+1;
		document.getElementById("quantity"+product_id).value = qty;
		$.ajax({
          type:'GET',
          url:'ajax_product_cart.php?pro_id='+product_id+'&quantity='+qty,
          //data:"cat_id="+val

          success: function(result){
            //alert(result);

       //document.getElementById("submit").innerHTML = result;

    	}});
	}


	function addtocart_minus(product_id)
	{
		//alert(product_id);
		var qty = parseInt(document.getElementById("quantity"+product_id).value);
		qty = parseInt(qty)-1;
		document.getElementById("quantity"+product_id).value = qty;
		$.ajax({
          type:'GET',
          url:'ajax_minus_product_cart.php?pro_id='+product_id+'&quantity='+qty,
          success: function(result){


          	}});
	}





</script>
</body>
</html>