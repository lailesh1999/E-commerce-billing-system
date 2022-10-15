
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php

		include('includes/stylesheet.php');
		include('dbconnect.php');
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
<h1><center>INVOICE</center>     </h1>
<form method="POST" action="bill_process.php">
<div class="form_control" style="padding: 6%">
<?php
$order_no = rand(1000000,10000000); 
?>


<b>RECIPT NO:</b><input type="text" name="order_no" class="form_control" value="<?php echo $order_no; ?>">
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <?php 
$month = date('m');
$day = date('d');
$year = date('Y');

 $today = $year . '-' . $month . '-' . $day;
?> 
<b>DATE:</b><input type="date" name="date"  id="date" class="form_control" value="<?php echo $today; ?>" disabled>
<?php
date_default_timezone_set("Asia/Kolkata");
$time = date("h:i:sa");
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<b>TIME:</b><input type="text" name="" class="form_control" value="<?php echo $time; ?>" disabled><br><br>

<b>CUSTOMER NAME </b>
<select name="user_id" id="customer_id" onchange="dispContact(this.value)">
	<option value="">-CUSTOMER NAME-</option>
<?php
$query = "SELECT * from customer_tbl where deleted='0' and status='0'";
$query_run = $link->query($query);
while($rows = mysqli_fetch_array($query_run))
{
	$customer_name = $rows['customer_name'];
	$user_id = $rows['user_id'];

?>
<option name="user_id" value="<?php echo $user_id; ?>"><?php echo $customer_name; ?></option>


<?php
}
?>

	
</select >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>CONTACT:</b><input type="text" name="" class="form_control"  id="contact" disabled>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="add_customer.php" class="btn btn-primary">ADD CUSTOMER</a>
<br><br>
<table class="table" id="dataTable">
	<tr>
		<th>CODE</th>
		<th>PRODUCT</th>
		<th>QTY</th>
		<th>PRICE</th>
		<th>TOTAL</th>
		
</tr>
<tr>
		
			<td><input type="text" name="product_code[]" class="form_control"  size="5" onblur="proCode(this.value,'1')"></td>
			<td><input type="text" name="product[]" class="form_control"  id="product1"  size="17" ></td>
			<td><input type="Number" name="quantity[]" class="form_control" value="1" id="quantity1" onclick="proCode2(this.value,'1')" size="9"  min="0"></td>
			<td><input type="text" name="price[]" class="form_control" id="price1" value="" size="9" ></td>
			<td><input type="text" name="total[]" id="total1" class="form_control" value="" size="9" ></td>
			<td><input type="text" name="slno[]" id="slno" class="form_control" value="1" size="9" ></td>
		</tr>
		<div id="addedRows"></div>
	</table>
	
	<b style="padding-left: 62%;">GRAND TOTAL:<input type="text" name="grand_total" id="gtotal1" class="form_control" value="" size="9" ></b><br><br>

	<button type="button"   name="rows" class="btn btn-primary" onclick="addRow('dataTable')" style="cursor: pointer;">ADD ROWS</button>
<!--	<input type="button"  name="rows" value="DELETE ROW " class="btn btn-danger" onclick="deleteRow('dataTable')" data-bs-toggle="tooltip" data-bs-placement="bottom" title="SELECT ROWS TO DELETE">-->
</div>

<div>
	

<center><input type="submit" name="bill" value="bill" class="btn btn-success"></center>

</form>
<?php
	//include('includes/footer.php');
?>


</div>
<?php
include('includes/script.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
	var rowCount = 1;
	function addRow(dataTable1) {
	//alert(dataTable1);
	rowCount ++;
	var recRow= '<tr><td><input type="text" name="product_code[]" class="form_control"  size="5" onblur="proCode(this.value,'+rowCount+')"></td><td><input type="text" name="product[]" class="form_control"  id="product'+rowCount+'"  size="17" ></td><td><input type="Number" name="quantity[]" class="form_control" value="1" id="quantity'+rowCount+'" onclick="proCode2(this.value,'+rowCount+')" size="9"  min="0"></td><td><input type="text" name="price[]" class="form_control" id="price'+rowCount+'" value="" size="9" ></td><td><input type="text" name="total[]" id="total'+rowCount+'" class="form_control" value="" size="9" ></td><td><input type="text" name="slno[]" id="slno" class="form_control" value='+rowCount+' size="9" ></td><td><p> <button type="button"onclick="removeRow('+rowCount+');" class="btn btn-danger">Delete </button> </p></td></tr>';
jQuery('#addedRows').append(recRow);
}
function removeRow(removeNum) {
	alert(removeNum);
jQuery('#rowCount'+removeNum).remove();
}
</script>
	<!--
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	var row = table.insertRow(rowCount);

	var cell1 = row.insertCell(0);
	var element1 = document.createElement("input");
	element1.type = "checkbox";
	element1.name= "chkbox[]";
	cell1.appendChild(element1);




	var cell2 = row.insertCell(1);
	var element2 = document.createElement("input");
	element2.type = "text";
	element2.size = "5";
	element2.addEventListener("blur", proCode_test.bind(rowCount),false);
	element2.name= "product_code[]";
	element2.id = "product_code"+rowCount;
	cell2.appendChild(element2);

	var cell3 = row.insertCell(2);
	var element3 = document.createElement("input");
	element3.type = "text";
	element3.size = "17";
	element3.name= "product_name[]";
	cell3.appendChild(element3);

	var cell4 = row.insertCell(3);
	var element4 = document.createElement("input");
	element4.type = "Number";
	element4.value = "1"
	element4.size = "9";
	element4.name= "qty[]";
	cell4.appendChild(element4);

	var cell5 = row.insertCell(4);
	var element5 = document.createElement("input");
	element5.type = "text";
	element5.size = "9";
	element5.name= "price[]";
	cell5.appendChild(element5);

	var cell6 = row.insertCell(5);
	var element6 = document.createElement("input");
	element6.type = "text";
	element6.size = "9";
	element6.name= "total[]";
	cell6.appendChild(element6);

	var cell7 = row.insertCell(6);
	var element7 = document.createElement("input");
	element7.type = "text";
	element7.value = rowCount;
	element7.size = "9";
	element7.name= "slno[]";
	cell7.appendChild(element7);
	*/	



function deleteRow(tableID) {
	try {
			var table = document.getElementById(tableID);
			var rowCount = table.rows.length;
			for(var i=0; i<rowCount; i++) {
				var row = table.rows[i];
				var txtbox = row.cells[0].childNodes[0];
				if(null != txtbox && true == txtbox.checked) {
				table.deleteRow(i);
					rowCount--;
					i--;
					}
				}
			}catch(e) {
				alert(e);
			}
		}
-->
>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
function proCode(val1,rCount)
{
  //alert(val1);
  $.ajax({
   
          type:'GET',
          url:'ajax_rows.php?proid='+val1,
          success: function(result){
            //alert(result);
            var res =result.split("~");
            //alert(res[1]);
           document.getElementById("product"+rCount).value = res[0];
           document.getElementById("price"+rCount).value = res[1];
           var numVal1 = Number(document.getElementById("price"+rCount).value);
            var numVal2 = Number(document.getElementById("quantity"+rCount).value);
             

            var totalCost = (numVal2)  * (numVal1);
            //alert(totalCost);
             document.getElementById("total"+rCount).value = totalCost;
           
    }});

}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
function proCode2(val1,rCount)
{
  //alert(val1)
           var numVal1 = Number(document.getElementById("price"+rCount).value);
            var numVal2 = Number(document.getElementById("quantity"+rCount).value);
            var totalCost = (numVal2)  * (numVal1);
             document.getElementById("total"+rCount).value = totalCost;
             var grandTotal = 0;
             var grandTotal = (grandTotal) + (totalCost);
             document.getElementById("gtotal1").value = grandTotal;
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
function dispContact(val1)
{
  //alert(val1);
  $.ajax({
   
          type:'GET',
          url:'ajax_contact.php?cust_id='+val1,
          success: function(result){
            //alert(result);
            var res =result.split(" ");
            document.getElementById("contact").value = res[0];
            
    }});

}

</script>

</body>
</html>
