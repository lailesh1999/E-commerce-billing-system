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
    ?>



    <div class="card-body" style="padding: 1%;">
        <div class="shadow-lg p-3 mb-5 bg-white rounded border border-dark" style="width:29rem;">
            <div class="card" style="width: 26rem;background-color:lightblue;color:black;">
                <form action="add_buy_supplier_process.php" method="POST">
                    <div class="card-body">
                        <div class="form-group">

                            <label>SELECT supplier name</label>
                            <select name="supplier_id" id="supplier_id" >
                            <option value="" >-SELECT supplier name</option>
                                <?php
                                        $query = "select * from supplier_tbl where status ='0' and deleted = '0' ";
                                        $query_result = $link->query($query);
                                        while($rows = mysqli_fetch_array($query_result))
                                        {
                                            $supplier_id = $rows['supplier_id'];
                                            $supplier_name =  $rows['supplier_name'];
                                ?>
                                        <option value="<?php echo $supplier_id; ?> "> <?php echo $supplier_name; ?> </option>

                                <?php
                                       }
                                ?>
                                        </select><br>
                                        
                            <label>SELECT CATEGORY</label>
                            <select name="category_id" id="category_id" onchange="dispSubCat(this.value)">
                            <option value="" >-SELECT CATEGORY-</option>
                                <?php
                                        $query = "select * from category_tbl where status ='0' and deleted = '0' ";
                                        $query_result = $link->query($query);
                                        while($rows = mysqli_fetch_array($query_result))
                                        {
                                            $category_id = $rows['category_id'];
                                            $category_name =  $rows['category_name'];
                                ?>
                                        <option value="<?php echo $category_id; ?> "> <?php echo $category_name; ?> </option>

                                <?php
                                       }
                                ?>
                                        </select><br>
                                         <label>SELECT SUB CATEGORY</label>
                                        <select name="sub_category_id" id="sub_category_id"  onchange="viewProduct(this.value)">
                                                                                            <option value="">-SELECT CATEGORY-</option>

                                        </select><br>


                                                <label>select product</label>
                                                <select name="product_id" id="product_id">
                                                
                                                    <option value="">-SELECT CATEGORY-</option>
                                                    

                                                        <!--
                                                        <?php 
                                                          
                                                            $query= " select * from product_tbl where deleted='0' and status='0'";
                                                            $query_res = $link->query($query);
                                                            while($rows = mysqli_fetch_array($query_res))
                                                            {
                                                                $product_name = $rows['product_name'];
                                                                $product_id=$rows['product_id'];
                                                                ?>
                                                    <option value="<?php echo $product_id; ?>"> <?php echo $product_name; ?></option>

                                                                

                                                               
                                                        <?php
                                                            }
                                                        ?>

                                                    -->
                                                </select>





                                    <label>ENTER QUANTITY</label>
                    		        <input type="text" class="form-control" id="qty" name="quantity" required>
                                    <label>ENTER indivisual quantity purchase price</label>
                                    <input type="text" class="form-control" id="itotal" onkeyup="calTotal(this.value)" name="purchase_price" required>
                  			        <label>ENTER invoice number</label>
                                    <input type="text" class="form-control"  name="invoice_number" required><br>
                                    <label>TOTAL PRICE</label>
                                    <input type="text" class="form-control" id="total" name="total_price" required><br>
                                    <button type="submit" name="addbuysupplier" class="btn btn-primary">ADD SUPPLIER</button>
                                    <input type="reset" class="btn btn-primary" />&nbsp<a href="index.php" class="btn btn-secondary">CANCEL</a>                                                                                                                        <br>  
                            </div>
                        </div>
                    </div>
                 </form>
            </div>
        </div>
    </div>

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
    $.ajax({
          type:'GET',
          url:'ajax_product.php?pro_id='+pro,
          //data:"cat_id="+val
          success: function(result){
       document.getElementById("product_id").innerHTML = result;


    }});
}
function calTotal(val1)
{
    //alert(val1);
    var num1 = document.getElementById('itotal').value;
    var num2 = document.getElementById('qty').value;
    var total = num1 * num2;
    //alert(total);
    document.getElementById('total').value = total;
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