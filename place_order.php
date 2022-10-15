<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<?php

include("dbconnect.php");
session_start();
$user_id = $_SESSION['user_id'];
  $query = " SELECT * from address_tbl where  deleted = '0' and user_id = '$user_id' ";
 $query_res = $link->query($query);
 $addr = "0";
 while($rows = mysqli_fetch_array($query_res))
 	 			{
 				//foreach($query_res as $rows )
 					//{
 						$address_id=$rows['address_id'];
 						$address = $rows['address'];
						$pincode = $rows['pincode'];
						$city = $rows['city'];
						$state = $rows['state'];
						$land_mark = $rows['land_mark'];
						$name = $rows['name'];
						$mobile_number=$rows['mobile_number'];
						$addr = $addr+1;
 						//$password =$rows['password'];
 						//$tax_rate = $rows["tax_rate"];

 					

		 ?>

	<form method="POST" action="place_order_process.php"> 	
 	<div style="padding-left: 7%;padding-top: 3%;width: 50%"><table><input type="radio" id="address" name="address_id" value="<?php echo $address_id; ?>">&nbsp <i>ADDRESS: <?php echo $addr;?></i>

 			<tr><td> <?php echo " $name"; ?>,
 					<?php echo " $address"; ?>,
 					<?php echo " $city"; ?>,
 		            <?php echo " $state"; ?>,
 					<?php echo " $land_mark"; ?>,
 					<?php echo " $pincode"; ?>,
 					<?php echo " $mobile_number"; ?></td></tr>			
 						 
 							
</td>

 					</tr>
 			</thead>
</table>

		</div>
 			
 				
 				
 				
<?php 
				}
				

				//<img src="upload:category_image/jpg;base64,'.base64_encode( $rows['category_image'] )."></img>


?>
<a href="add_address.php">ADD ADDRESS</a><br>
	
<a href="cart.php">cancel</a>
<button type="submit" name="placeorder" class="btn btn-success">PLACE ORDER</button>

</form>

</script>
</body>
</html>	