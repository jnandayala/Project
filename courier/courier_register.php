<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
   
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
 margin: 0;
 font-family: Arial, Helvetica, sans-serif;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button:hover {
  opacity: 0.8;
}
span.psw
{
	color: black;
}
.button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}


.topnav a {
 float: left;
 display: block;
 color: black;
 text-align: center;
 padding: 14px 16px;
 text-decoration: none;
 font-size: 17px;
}

.topnav a:hover {
 background-color: #ddd;
 color: black;
}

.topnav a.active {
 background-color: #2196F3;
 color: white;
}

.topnav input[type=text] {
 float: right;
 padding: 6px;
 margin-top: 8px;
 margin-right: 16px;
 border: none;
 font-size: 17px;
}

@media screen and (max-width: 600px) {
 .topnav a, .topnav input[type=text] {
float: none;
display: block;
text-align: left;
width: 100%;
margin: 0;
padding: 14px;
 }
 span.psw {
     display: block;
     float: none;
  }
 .topnav input[type=text] {
border: 1px solid #ccc;  
 }
}
</style>
  </head>
  <body class="goto-here">
  <?php include "header.php";?>
    <!--<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Checkout</h1>
          </div>
        </div>
      </div>
    </div>-->
	<table border=0 align="center" >
<form action="courier_submit_register.php"   onsubmit="return validate();" method="POST">
      <div class="container"  >
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
         <tr><th colspan='2'> <h1 align="center" style="color:red;"><b>Register</b></h1><br>
 <p>Please fill in this form to create an account.</p>
    <hr></th></tr>
         
          
	  
          
			  <div class="form-group" align="center"  >
            <tr><td>   <label for="uname"><b>Name</b></label></td>
   <td> <input type="text" placeholder="Enter Your Name" name="name" id="name">
     	   <span id="name_err" style='color:red';></span></td></tr>
               </div>
			   
			  <div class="form-group" align="center"  >
       <tr>  <td>      <label for="psw"><b>Gender</b></label></td>
   <td> <input  type="radio" name="gender" id="male" value='Male'>
        <label for='male'>Male</label>
       <input type='radio' name='gender' id='female' value='Female'>
       <label for='female'>Female</label>
        	   <span id="gender_err" style='color:red';></span></td></tr>
               </div>
                   
			  <div class="form-group" align="center"  >
       <tr>  <td>      <label for="psw"><b>Mobile</b></label></td>
   <td> <input type="text" placeholder="Enter mobile Number" name="mobile" id="mobile">
        	   <span id="mobile_err" style='color:red';></span></td></tr>
               </div>
               
     <?php
     if(isset($_REQUEST['mobileerror']))
	  {
	    echo "<center><span style='color:red;'>Mobile already exists!</span></center>";
      }
    ?>	
	
	
			  <div class="form-group" align="center"  >
            <tr><td>   <label for="uname"><b>Email</b></label></td>
   <td>  <input type="text" placeholder="Enter Email" name="email" id="email">
     	   <span id="email_err" style='color:red';></span></td></tr>
               </div> 

			   
			  <div class="form-group" align="center"  >
       <tr>  <td>      <label for="psw"><b>Password</b></label></td>
   <td> <input type="password" class="form-control" placeholder="Enter Password" name="pwd" id='pwd'>
        	   <span id="pwd_err" style='color:red';></span></td></tr>
               </div>
                
			  <div class="form-group" align="center"  >
            <tr><td>   <label for="uname"><b>Repeat Password</b></label></td>
   <td>  <input type="password" placeholder="Repeat Password" name="pwd_repeat" id="pwd_repeat">
     	   <span id="pwd_repeat_err" style='color:red';></span></td></tr>
               </div> 
			   <?php
      if(isset($_REQUEST['repeatpwderror']))
       {
	    echo "<center><span style='color:red;'>Password does not match!</span></center>";
      }
    ?>	
			 
			  <div class="form-group" align="center"  >
            <tr><td>   <label for="uname"><b>Street</b></label></td>
   <td> <input type="text" placeholder="Enter Address" name="street" id="street">
     	   <span id="street_err" style='color:red';></span></td></tr>
               </div> 
			   
			  <div class="form-group" align="center"  >
            <tr><td>   <label for="uname"><b>City</b></label></td>
   <td> <input type="text" placeholder="Enter Address" name="city" id="city">
     	   <span id="city_err" style='color:red';></span></td></tr>
               </div> 
			   
			  <div class="form-group" align="center"  >
            <tr><td>   <label for="uname"><b>Pin</b></label></td>
   <td> <input type="text" placeholder="Enter Address" name="pin" id="pin">
     	   <span id="pin_err" style='color:red';></span></td></tr>
               </div>
			
			  <div class="form-group" align="center"  >
            <tr><td>   <label for="uname"><b>State</b></label></td>
   <td> <input type="text" placeholder="Enter Address" name="state" id="state">
     	   <span id="state_err" style='color:red';></span></td></tr>
               </div>
			   
			       
			  <div class="form-group" align="center"  >
       <tr>  <td>      <label for="psw"><b>Alternate Mobile Number</b></label></td>
   <td> <input type="text" placeholder="Enter alternate mobile Number" name="mobile_alt" id="mobile_alt">
        	   <span id="mobile_alt_err" style='color:red';></span></td></tr>
               </div>
			   
          <tr> <td colspan='2' align="center">  <input type="submit" class="button" value="Register"></td></tr>
		  <tr><td colspan='2'  align="center" ><p>Already have an account? <a href="courier_login.php">Sign in</a>.</p><td></tr>
			 	<!-- .section -->
			 </div></div></div>
         <!-- END -->
    
</form>

</table>

    <footer class="ftco-footer ftco-section">
      
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Vegefoods</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
             <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
               <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
               <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
               <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
               <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
             </ul>
             <ul class="list-unstyled">
               <li><a href="#" class="py-2 d-block">FAQs</a></li>
               <li><a href="#" class="py-2 d-block">Contact</a></li>
             </ul>
           </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
             <ul>
               <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
               <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
               <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
             </ul>
           </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
          </div>
        </div>
      </div>
    </footer>
   
 

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <script>
function validate()
{
	//alert("vfkjvg");
	
	var name=document.getElementById('name').value;
	var male=document.getElementById('male').value;
	var female=document.getElementById('female').value;
	var mobile=document.getElementById('mobile').value;
	var email=document.getElementById('email').value;
	var pwd=document.getElementById('pwd').value;
	var pwd_repeat=document.getElementById('pwd_repeat').value;
	var street=document.getElementById('street').value;
	var city=document.getElementById('city').value;
	var pin=document.getElementById('pin').value;
	var state=document.getElementById('state').value;
	var mobile_alt=document.getElementById('mobile_alt').value;
	
   
	document.getElementById('name_err').innerHTML="";
	document.getElementById('gender_err').innerHTML="";
	document.getElementById('mobile_err').innerHTML="";
	document.getElementById('email_err').innerHTML="";
	document.getElementById('pwd_err').innerHTML="";
	document.getElementById('pwd_repeat_err').innerHTML="";
	document.getElementById('street_err').innerHTML="";
	document.getElementById('city_err').innerHTML="";
	document.getElementById('pin_err').innerHTML="";
	document.getElementById('state_err').innerHTML="";
	document.getElementById('mobile_alt_err').innerHTML="";
	
	
	if(name== "")
	{
		document.getElementById('name_err').innerHTML="Name is Mandatory!";
		return false;
	}
	
	if(male=="" && female=="")
	{
		document.getElementById('gender_err').innerHTML="Gender is Mandatory!";
		return false;
	}
	if(mobile== "")
	{
		document.getElementById('mobile_err').innerHTML="Mobile is Mandatory!";
		return false;
	}
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	if(atpos < 2||dotpos<=atpos+2 || dotpos+2 >= email.length)
	{
	  document.getElementById('email_err').innerHTML="Invalid Email address!";
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
	if(city== "")
	{
		document.getElementById('city_err').innerHTML="Please select city!";
		return false;
	}
	if(pin== "")
	{
		document.getElementById('pin_err').innerHTML="Please select pin!";
		return false;
	}
	if(state== "")
	{
		document.getElementById('state_err').innerHTML="Please select state!";
		return false;
	}
	return true;
}
</script>
</body>
</html>