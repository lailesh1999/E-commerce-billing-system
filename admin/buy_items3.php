
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<h1><center>INVOICE</center>     </h1><br><br>
<div class="form_control" style="padding: 6%">
<?php



?>


<b>RECIPT NO:</b><input type="text" name="recpt" class="form_control" value="" disabled>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <?php 

$month = date('m');
$day = date('d');
$year = date('Y');

 $today = $year . '-' . $month . '-' . $day;
?> 
<b>DATE:</b><input type="date" name="date"  id="date" class="form_control" value="<?php echo $today; ?>" disabled>
<?php
date_default_timezone_set("Indian/Kerguelen");
$time = date("h:i:sa");
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<b>TIME:</b><input type="text" name="" class="form_control" value="<?php echo $time; ?>" disabled><br><br>
<b>CONTACT:</b><input type="text" name="" class="form_control" value="" ><br><br>
<table class="table">
	<tr><th>CODE</th>
		<th>PRODUCT</th>
		<th>QTY</th>
		<th>PRICE</th>
		<th>TOTAL</th>
</tr>
<tr>
		<td><input type="text" name="" class="form_control" value="" size="5" ></td>
			<td><input type="text" name="" class="form_control" value="" size="17" ></td>
			<td><input type="text" name="" class="form_control" value="" size="9" ></td>
			<td><input type="text" name="" class="form_control" value="" size="9" ></td>
			<td><input type="text" name="" class="form_control" value="" size="9" ></td>
		</tr>
<div id="addedRows"></div>

	</table>
	<button type="button" class="btn btn-danger" id="rowss" name="rows" onclick="rowChange(this.id)">ADD ROWS</a>
</div>

<div>
	
</table>

<?php
	//include('includes/footer.php');
?>


</div>
<?php
include('includes/script.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
var rowCount = 1;
function addMoreRows(frm) {
rowCount ++;
var recRow = '<p id="rowCount'+rowCount+'"></p> 
<td><input name="" type="text" size="17%" maxlength="120" /></td>

<td><input name="" type="text" maxlength="120" style="margin: 4px 5px 0 5px;"/></td>

<td><input name="" type="text" maxlength="120" style="margin: 4px 10px 0 0px;"/></td>

</tr>

<p> <a href="javascript:void(0);" onclick="removeRow('+rowCount+');">Delete</a></p>

<p>';
jQuery('#addedRows').append(recRow);
}

function removeRow(removeNum) {
jQuery('#rowCount'+removeNum).remove();
}
</script>
</script>
</body>
</html>
