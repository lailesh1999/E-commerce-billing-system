
<?php
include('dbconnect.php');
$product_code = $_GET["proid"];
$query = "SELECT * from product_tbl where product_code = '$product_code' and deleted='0'";
$query_result = $link->query($query);
while($rows = mysqli_fetch_array($query_result))
{
	$product_name = $rows['product_name'];
	$selling_price = $rows['selling_price'];
	//$quantity = $rows['quantity'];
	//$total = $quantity * $selling_price;
}

echo "$product_name~$selling_price";


?>






