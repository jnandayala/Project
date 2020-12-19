<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="farmer";
$conn = mysqli_connect($servername, $username, $password,$db); 
session_start();
//$farmer_id=$_POST['userid'];
//$register=$_POST['register'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$pwd_repeat=$_POST['pwd_repeat'];
$street=$_POST['street'];
$city=$_POST['city'];
$pin=$_POST['pin'];
$state=$_POST['state'];
$mobile_alt=$_POST['mobile_alt'];

 	if($pwd!=$pwd_repeat)
	{
	header("Location:courier_register.php?repeatpwderror");
	exit;
	}

else
{
	$query2="select max(courier_id) from courier";
	$result2=mysqli_query($conn,$query2);
	while($row2=mysqli_fetch_array($result2))
	{
	  $courier_id=$row2[0]+1;
      	  
	}
	$sql="INSERT INTO courier(courier_id,name,gender,mobile,email,street,city,pin,state,password,mobile_alt) VALUES ($courier_id,'$name','$gender','$mobile','$email','$street','$city','$pin','$state','$pwd','$mobile_alt')"; 
	
	echo $sql;
	mysqli_query($conn,$sql);
   $sql2="select courier_id from courier where mobile='$mobile'";
   $result3=mysqli_query($conn,$sql2);
   while($row3=mysqli_fetch_array($result3))
   {
	   
		$courier_id=$row[0];
   }
		$_SESSION['courier_id']=$courier_id;
		//header("Location:courier_index.php"); 
		$_SESSION['register']="Registered successfully";
	header('Location:courier_index.php');
}
mysqli_close($conn);
?>
