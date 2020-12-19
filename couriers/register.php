<!DOCTYPE html>
<html>
<head>
<meta name="viewport">
<link href="img/favicon3.ico" rel="shortcut icon"/>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
     margin-left:30%;
     margin-right: 30%;
     align:"center";
     background-image: url('logbg.jpg');
    background-repeat: no-repeat; 
    background-size: cover;
    background-attachment: fixed;
    background-size: 100% 100%;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>

</head>
<body >

<form action="courier_submit_register.php" onsubmit='return validate()'; method="POST">
  <div class="container">
    <h1 align="center" style="color:red;"><b>Register</b></h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <div id="name_err" style='color:red';></div>  
	 <div id="name_err" style='color:red';></div>  
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Your Name" name="name" id="name">
	 <div id="name_err" style='color:red';></div>  
    <label for="farmer_id"><b>Courier ID</b></label>
    <input type="text" placeholder="Enter Your Name" name="courier_id" id="farmer_id">
	 <div id="farmer_id_err" style='color:red';></div>  
   <div >
      <label><b>Gender: </b></label>
        <input class="w3-input w3-border" type="radio" name="gender" id="Male" value='Male' required>
        <label for='male'>Male</label>
       <input  class="w3-input w3-border" type='radio' name='gender' id='Female' value='Female' required>
       <label for='female'>Female</label>
    </div>
     <div id="name_err" style='color:red';></div> 
      
    <label for="phno"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter mobile Number" name="mobile" id="mobile">
	 <div id="mobile_err" style='color:red';></div>  

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email">
	 <div id="email_err" style='color:red';></div> 
    <?php
     if(isset($_REQUEST['mailerror']))
	  {
	    echo "<center><span style='color:red;'>Email already exists!</span></center>";
      }
    ?>		 

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" id="pwd">
	 <div id="pwd_err" style='color:red';></div>  

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pwd_repeat" id="pwd_repeat">
	 <div id="pwd_repeat_err" style='color:red';></div> 
    <?php
      if(isset($_REQUEST['repeatpwderror']))
       {
	    echo "<center><span style='color:red;'>Password does not match!</span></center>";
      }
    ?>	 
        <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" id="address">
	 <div id="email_err" style='color:red';></div> 
   
   <label for="psw"><b>alternative phoneno</b></label>
    <input type="password" placeholder="Enter Phone number" name="mobile_alt" id="mobile_alt">
	 <div id="pwd_err" style='color:red';></div>  
    <hr>
    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>
    </div>
<script>
function validate()
{
	//var userid=document.getElementById('userid').value;
	var name=document.getElementById('name').value;
	var farmer_id=document.getElementById('courier_id').value;
	var mobile=document.getElementById('mobile').value;
	var email=document.getElementById('email').value;
	var pwd=document.getElementById('pwd').value;
	var pwd_repeat=document.getElementById('pwd_repeat').value;
	
	//document.getElementById('userid_err').innerHTML="";
	document.getElementById('name_err').innerHTML="";
	document.getElementById('courier_id_err').innerHTML="";
	document.getElementById('mobile_err').innerHTML="";
	document.getElementById('email_err').innerHTML="";
	document.getElementById('pwd_err').innerHTML="";
	document.getElementById('pwd_repeat_err').innerHTML="";
	
	/*if(userid== "")
	{
		document.getElementById('userid_err').innerHTML="Userid is Mandatory!";
		return false;
	}*/
	if(name== "")
	{
		document.getElementById('name_err').innerHTML="Name is Mandatory!";
		return false;
	}
	if(farmer_id== "")
	{
		document.getElementById('courier_id_err').innerHTML="Farmer ID is Mandatory!";
		return false;
	}
	if(mobile== "")
	{
		document.getElementById('mobile_err').innerHTML="Mobile is Mandatory!";
		return false;
	}
	if(email== "")
	{
		document.getElementById('email_err').innerHTML="Email is Mandatory!";
		return false;
	}
	if(pwd== "")
	{
		document.getElementById('pwd_err').innerHTML="Password is Mandatory!";
		return false;
	}
	if(pwd_repeat== "")
	{
		document.getElementById('pwd_repeat_err').innerHTML="Password is Mandatory!";
		return false;
	}
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	if(atpos < 2||dotpos<=atpos+2 || dotpos+2 >= email.length)
	{
	  document.getElementById('email_err').innerHTML="Invalid Email address!";
		return false;
	}
	return true;
}
</script>
</body>
</html>
