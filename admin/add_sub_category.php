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
<div class="card-body"n style="padding: 1%;">
  <div class="shadow-lg p-3 mb-5 bg-white rounded border border-dark" style="width:29rem;">
<div class="card" style="width: 26rem;background-color:lightblue;color:black;">
	<form method="POST" action="add_sub_category_process.php" enctype="multipart/form-data">

  		<div class="card-body">
			<div class="form-group">

        <label>SELECT CATEGORY</label>
        <select name="category_id" id="category_id">
            <option value="">-SELECT CATEGORY-</option>
<?php
            include('dbconnect.php');
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
        </select>
				<label>ENTER SUB CATEGORY NAME</label>
    				<input type="text" class="form-control"  name="sub_category_name" required>
  			</div>
     
 					 <button type="submit" name="addsubcategory" class="btn btn-primary">ADD SUB CATEGORY</button>
           <input type="reset" class="btn btn-primary" />&nbsp<a href="index.php" class="btn btn-secondary">CANCEL</a>
           <br>
           </div>
        
		</div>
</center>	</div>
</form></div>



<?php
  //include('includes/footer.php');
?>


</div>
<?php
include('includes/script.php');
?>
</body>
</html>