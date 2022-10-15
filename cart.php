<!DOCTYPE html>
<html>
<head>
	<title>bookstore</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<?php
include('dbconnect.php');
session_start();
$user_id = $_SESSION['user_id'];
  $query= "SELECT p.product_name,p.selling_price,c.quantity,p.product_id,p.product_description,c.cart_id from product_tbl p,ajax_cart_tbl c where c.product_id = p.product_id and c.user_id = '$user_id' and c.deleted = '0' and p.deleted = '0'";
$query_run = $link->query($query);


?>
<div style="padding-left: 60%;padding-top: 2%"><a href="clear_cart.php" class="btn btn-danger">CLEAR CART</a></div>

<div style="padding: 5%;"><table class="table table-bordered" style="width: 100%;">
      <thead><tr><th>PRODUCT NAME</th>
        <th>PRODUCT DESCRIPTION</th>
            <th>QUANTITY</th>
             <th>PRICE</th>
            <th>TOTAL</th>
            <th></th>
          </tr>
      </thead>
    <?php
    $grand_total = 0;
    $total_quantity = 0;
while($rows = mysqli_fetch_array($query_run))
{
  $product_id = $rows['product_id'];
  $cart_id=$rows['cart_id'];
  $product_name=$rows['product_name'];
  $quantity=$rows['quantity'];
  $product_description = $rows['product_description'];
  $selling_price=$rows['selling_price'];
  $total_price = $quantity * $selling_price;
  $total_quantity = $total_quantity + $quantity;
  $grand_total = $grand_total + $total_price;
  
  

?>
<tr><td> <?php echo " $product_name"; ?></td>
  <td><?php echo "$product_description"; ?></td>

        <td>

          <button type="button" name="submit" id="button1" class="btn btn-sm" onclick= "addtocart_plus(<?php echo $product_id; ?>)" ><i class='fas fa-plus' style='font-size:10px'></i></button>
         <input type="text" name="quantity" id="quantity<?php echo $product_id; ?>" value="<?php echo $quantity; ?>" size="1px">
            <button class="btn btn-sm"><i class='fas fa-minus'onclick="addtocart_minus(<?php echo $product_id; ?>)" style='font-size:10px'></i></button><br><br>


          </td>
        <td width="20%"><?php echo " $selling_price";?></td>
        <td><?php echo "$total_price" ?></td>
        <td><a  href="cart_remove.php?cart_id=<?php echo $cart_id; ?> " class="btn btn-primary">REMOVE</a> 

        </td>

      </tr>

</div>

<?php
}

?>
<td  style="padding-left: 2%;"></td>  <td></td><td><b>TOTAL QUANTITY:&nbsp</b><?php echo $total_quantity; ?></td><td colspan="1"> </td><td colspan="2"><b>GRAND-TOTAL:&nbsp</b><?php echo $grand_total; ?></td></table>

<a href="index.php">cancel</a> <b style="padding-left: 50%"><a href="place_order.php"class="btn btn-success">CHECK NOW!! </a></b>

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
