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
        <div class="shadow-lg p-3 mb-5 bg-white rounded border " style="width:30rem;">
            <div class="card" style="width: 26rem;background-color:white;color:black;">
                <form action="add_supplier_process.php" method="POST">
                    <label>ENTER SUPPLIER NAME</label>
    		        <input type="text" class="form-control"  name="supplier_name" required>
                    <label>ENTER SUPPLIER CONTACT</label>
                    <input type="text" class="form-control" id="contact" name="supplier_contact" onblur="contactVali(this.value)" required>
                    <div id="phone" style="color:red;"></div>
  			        <label>ENTER SUPPLIER GMAIL</label>
                    <input type="text" class="form-control" id="emailid"  name="supplier_email"  required>
                    <label>ENTER SUPPLIER ADDRESS</label>
                    <input type="text" class="form-control"  name="supplier_address" required>
                    <label>ENTER GST</label>
                    <input type="text" class="form-control"  name="gst"  required><br>
                    <button type="submit" name="addsupplier" id="submit" class="btn btn-primary" disabled>ADD SUPPLIER</button>
                    <input type="reset" class="btn btn-primary" />&nbsp<a href="index.php" class="btn btn-secondary">CANCEL</a>                                                                                                                        <br>
                </form>
            </div>
        </div>
    </div>


<?php
    //include('includes/footer.php');
?>


</div>
<?php
include('includes/script.php');
?>

<script type="text/javascript">
    function contactVali(val1) {
        //alert(val1);
        var bt = document.getElementById("submit");
        var phoneno = /^\d{10}$/;
        if(val1.match(phoneno))
        {
            //return true;
            bt.disabled = false;
        }
        else
        {
            var b = "please enter 10 digit phone number";
            document.getElementById('phone').innerHTML = b;
            //return false;
            bt.disabled = true;
        }
    }
</script>
</body>
</html>