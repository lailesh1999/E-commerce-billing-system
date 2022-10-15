<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="card-body"n style="padding: 1%;">
  <div class="shadow-lg p-3 mb-5 bg-white rounded border border-dark" style="width:29rem;">
<div class="card" style="width: 26rem;background-color:lightblue;color:black;">
	<form method="POST" action="register_process.php">

  		<div class="card-body">
			<div class="form-group">
				

			<label>ENTER USER NAME</label>
            <input type="text" class="form-control"  name="username" required>
			<label>ENTER EMAIL</label>
            <input type="text" class="form-control" onkeyup="funEmail(this.value)" name="email"  required>
            <b id="email"></b>
            
            <?php
            /*
            if(isset($_GET['email']))
            {
              if($_GET['email'] == '1'){
                echo" <i style=color:red;>email is already present </i><br>";
                //header('location:register.php');
              }
            }

            */
            ?>
            <label>ENTER PHONE NUMBER</label>
            <input type="text" class="form-control" onkeyup="funPhone(this.value)" name="phone_number" required>
            <b id="phone"> </b>
             <?php 
             /*used in php
            if(isset($_GET['phone']))
            {
              if($_GET['phone'] == '1'){
                echo" <i style=color:red;>phone number is already present </i><br>";
                //header('location:register.php');
              }
            }b
            */
            ?>
			<label>ENTER PASSWORD</label>
            <input type="text" class="form-control" id="password"  name="password" required>
			<label>ENTER CONFIRM PASSWORD</label>
            <input type="text" class="form-control" id="confirm_password" onkeyup="checkPasswordMatch()"   name="confirm_password" required>
<div class="registrationFormAlert" style="color:green;" id="CheckPasswordMatch">
  		</div>
  			</form>
 					 <button type="submit" name="addregister" id="submit" class="btn btn-primary" disabled>SAVE </button>
           <input type="reset" class="btn btn-primary" />&nbsp<a href="index.php" class="btn btn-secondary">CANCEL</a>
           <br>
           </div>
        
		</div>
</center>	</div>
</form></div>

    </div>
  </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  
function  funPhone(value)
{
  
  //alert(value);
   $.ajax({
          type:'GET',
          url:'ajax_phone.php?phone_id='+value,
          //data:"cat_id="+val
          success: function(result){
            //alert(result);
       document.getElementById("phone").innerHTML = result;


    }});

}
function  funEmail(val)
{
  
 // alert(val);
   $.ajax({
          type:'GET',
          url:'ajax_email.php?email_id='+val,
          //data:"cat_id="+val
          success: function(result){
            //alert(result);
       document.getElementById("email").innerHTML = result;


    }});

}

function checkPasswordMatch(){

  var bt = document.getElementById("submit");
  var passWord = (document.getElementById("password").value);
    var confirmPassword = (document.getElementById("confirm_password").value);
    if( passWord == confirmPassword){
      var var1 = "password  match";
      document.getElementById("CheckPasswordMatch").innerHTML = var1;
      bt.disabled = false;
    }else
    {
      bt.disabled = true;
      var var2 = "password doesnot match ";
      document.getElementById("CheckPasswordMatch").innerHTML = var2;
    }

}


/*
 function manage() {
        var bt = document.getElementById('submit');
        var passWord = (document.getElementById("password").value);
      var confirmPassword = (document.getElementById("confirm_password").value);
        if (passWord == confirm_password) {
            bt.disabled = true;
        }
        else {
            bt.disabled = false;
        }
    }*/
    </script>



</body>
</html>