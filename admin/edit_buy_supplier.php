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
  //include('includes/header.php');
?>


<?php 
		include('dbconnect.php');
		$buy_supplier_id = $_GET['buy_supplier_id'];
		


		$query = " select * from buy_supplier_tbl where deleted = '0' and status ='0' and buy_supplier_id = '$buy_supplier_id'";
		$query_res = $link->query($query);
	while($rows = mysqli_fetch_array($query_res))
	//foreach($query_res as $rows)
	{
		$product_id = $rows['product_id'];
		$quantity=$rows['quantity'];
		$supplier_id=$rows['supplier_id'];
		$purchase_price=$rows['purchase_price'];
    $total_price = $rows['total_price'];
		$invoice_number=$rows['invoice_number'];
?>
			<div class="card-body" style="width:40%;">
				<div class="form-group">
				<form method="POST" action="update_buy_supplier.php">
				
					<input type="hidden" name="buy_supplier_id" value="<?php echo $rows['buy_supplier_id']; ?>" >

                            <label>SELECT supplier name</label>
                            <select name="supplier_id" id="supplier_id" >
                                <?php
                                        $query = "select * from supplier_tbl where status ='0' and deleted = '0' ";
                                        $query_result = $link->query($query);
                                        while($rows = mysqli_fetch_array($query_result))
                                        {
                                            $supp_id = $rows['supplier_id'];
                                            $supplier_name =  $rows['supplier_name'];
                                ?>
                                        <option value="<?php echo $supp_id; ?>" <?php if($supplier_id == $supp_id){ echo "selected"; }?>> <?php echo $supplier_name; ?> </option>

                                <?php
                                       }
                                ?>
                                        </select><br>
					<label>SELECT CATEGORY</label>
                            <select name="category_id" id="category_id" onchange="dispSubCat(this.value)">
                                <?php
                                        $product_query = "select * from product_tbl where product_id='$product_id'";
 	 									$product_res = $link->query($product_query);
					 	 				while($product_row = mysqli_fetch_array($product_res))
					 	 				{
					 	 					$category_id = $product_row["category_id"];
					 	 					//$sub_category_id = $product_row["sub_category_id"];
					 	 					/* */
					 	 					$category_query = "select * from category_tbl where deleted='0' and status='0'";
					 	 					$category_res  = $link->query($category_query);
					 	 					while($category_row = mysqli_fetch_array($category_res))
					 	 					{
					 	 						$category_name = $category_row["category_name"];
					 	 						$cat_id = $category_row['category_id'];
					 	 					
					                  ?>
                                        <option value="<?php echo $cat_id; ?> " <?php if($category_id == $cat_id){ echo "selected";} ?> > <?php echo $category_name; ?> </option>

                                <?php
                                			}
                                       }
                                ?>
                                        </select><br>
                                      <label>SELECT SUB CATEGORY</label>
                                      <select name="sub_category_id" id="sub_category_id"  onchange="viewProduct(this.value)">
                                            
                                           <?php
                                            $product_query = "select * from product_tbl where product_id='$product_id '";
 	 									$product_res = $link->query($product_query);
					 	 				while($product_row = mysqli_fetch_array($product_res))
					 	 				{
					 	 					$sub_category_id = $product_row["sub_category_id"];
					 	 					//$sub_category_id = $product_row["sub_category_id"];
					 	 					/* */
					 	 					$sub_category_query = "select * from sub_category_tbl where deleted='0' and status='0'";
					 	 					$sub_category_res  = $link->query($sub_category_query);
					 	 					while($sub_category_row = mysqli_fetch_array($sub_category_res))
					 	 					{
					 	 						$sub_category_name = $sub_category_row["sub_category_name"];
					 	 						$sub_cat_id = $sub_category_row["sub_category_id"];
					 	 					
					                  ?>
                                        <option value="<?php echo $sub_cat_id; ?> "  <?php if($sub_category_id == $sub_cat_id){ echo "selected";} ?>> <?php echo $sub_category_name; ?> </option>

                                <?php
                                			}
                                       }
                                ?>
                                        </select><br>


                                                <label>select product</label>
                                                <select name="product_id" id="product_id">
                     
                                                        <?php 
                                                          
                                                            $query= " select * from product_tbl  where deleted='0' and status='0'";
                                                            $query_res = $link->query($query);
                                                            while($rows = mysqli_fetch_array($query_res))
                                                            {
                                                                $product_name = $rows['product_name'];
                                                                $pro_id=$rows['product_id'];
                                                                ?>
                                                    <option value="<?php echo $pro_id; ?>" <?php if($product_id == $pro_id){ echo "selected";} ?>> <?php echo $product_name; ?></option>

                                                                

                                                               
                                                        <?php
                                                            }
                                                        ?>

                                                 
                                                </select>


                                      <br><label>ACTUAL  QUANTITY</label>
                    		        <input type="text" class="form-control"  name="actual_quantity" id="actual_quantity" value="<?php echo $quantity; ?>" required>
                    		        

                                    <br><label>ENTER QUANTITY</label>
                    		        <input type="text" class="form-control"  name="quantity" id="quantity" onkeyup="defQty()" value="<?php echo $quantity; ?>" required >

                                    <br><label>DIFFERENCE  QUANTITY</label>
                    		        <input type="text" class="form-control"  name="def_quantity" id="def_quantity" value="<?php echo $quantity; ?>" required>
                                    <label>ENTER indivisual quantity purchase price</label>
                                  <input type="text" class="form-control"  name="purchase_price" onkeyup="calTotal()" id="itotal"  value="<?php echo $purchase_price; ?>"  required>
                                    <label> TOTAL price</label>
                                    <input type="text" class="form-control"  name="total_price" id="total"  value="<?php echo $total_price; ?>" required>
                  			        <label>ENTER invoice number</label>
                                    <input type="text" class="form-control"  name="invoice_number" value="<?php echo $invoice_number; ?>" required><br>
                                    
                                    <button type="submit" name="updatebuysupplier" class="btn btn-primary">UPDATE BUY  SUPPLIER</button>
                                    <input type="reset" class="btn btn-primary" />&nbsp<a href="index.php" class="btn btn-secondary">CANCEL</a>                                                                                                                        <br>
                            </div>
                        </div>
                    </div>
                 </form>
            </div>
        </div>
    </div>
<?php
}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  
function dispSubCat(val)
{
  //alert(val);

   $.ajax({
          type:'GET',
          url:'ajax_sub_cat.php?cat_id='+val,
          //data:"cat_id="+val
          success: function(result){
            //alert(result);
       document.getElementById("sub_category_id").innerHTML = result;


    }});

}

function viewProduct(pro)
{
    alert(pro);
    $.ajax({
          type:'GET',
          url:'ajax_product.php?pro_id='+pro,
          //data:"cat_id="+val
          success: function(result){
            alert(result);
       document.getElementById("product_id").innerHTML = result;


    }});
}

function defQty()
{
            var numVal1 = Number(document.getElementById("actual_quantity").value);
            var numVal2 = Number(document.getElementById("quantity").value);
            var totalValue = (numVal2) - (numVal1);
            document.getElementById("def_quantity").value = totalValue;
            var num2 = document.getElementById("itotal").value;
            var num1 = document.getElementById("quantity").value;
           // var num3 = Math.abs("num1");
            //alert(num3);
            //alert(num1);
            //alert(num2);
            var total = num1 * num2;
            //var total2 = Math.abs("total");
            //alert(total);
            document.getElementById("total").value = Math.abs(total);
}
function calTotal()
{
    //alert();
    var num2 = document.getElementById("itotal").value;
    var num1 = document.getElementById("quantity").value;
    //alert(num1);
    //alert(num2);
    var total = num1 * num2;
    //alert(total);
    document.getElementById("total").value = Math.abs(total);
}
</script>

<?php
  //include('includes/footer.php');
?>


</div>
<?php
include('includes/script.php');
?>

</body>
</html>