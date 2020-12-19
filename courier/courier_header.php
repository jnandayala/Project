<html>
<head>
    <title>Couriers</title>
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

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		* {box-sizing: border-box;}
		
		body {
		  margin: 0;
		  font-family: Arial, Helvetica, sans-serif;
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
.chat-popup {
  display: none;
  position:top;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  width: 200px;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 200px;
  padding: 10px;
  background-color: white;
}



/* Set a style for the submit/send button */
.form-container .btn {
  background-color: white;
  color:black;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 45%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: white;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
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
		  
		  .topnav input[type=text] {
			border: 1px solid #ccc;  
		  }
		}
		</style>
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+91 9235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">mycouriers.org@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="courier_index.php">Courier Services</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
				
	          <li class="nav-item active"><a href="courier_index.php" class="nav-link">Home</a></li>
            </li>
            <li class="nav-item active"><a href="courier_order.php" class="nav-link">Orders</a></li>
	          <li class="nav-item"><a href="courier_about.php" class="nav-link">About</a></li>
			    <li>
			  <i class="fa fa-user fa-3x" onclick="openForm()"></i>

<div class="chat-popup" id="myForm">
  <form action="#" class="form-container">
  <table>
  <td>
  <tr>
	<a href="profile_courier.php" class="btn btn-primary">Profile</a>
</tr>
<tr> &nbsp;&nbsp;</tr>
<tr>
       <a href="index.php?logout" class="btn btn-primary">Logout</a>
</tr>
</td>
   </table>
  </form>
</div></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
	 <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
    </html>