<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="farmer";
$conn = mysqli_connect($servername, $username, $password,$db); 
//$farmer_id=$_POST['userid'];
//$register=$_POST['register'];
$name=$_POST['name'];
$id=$_POST['courier_id'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$pwd_repeat=$_POST['pwd_repeat'];
$address=$_POST['address'];
$mobile_alt=$_POST['mobile_alt'];
// if($register=="SHG")
// {
// $result=mysqli_query($conn,"select * from `shg` where email='$email'");
// if(mysqli_num_rows($result)>0){
// 	header("Location:uu.php?mailerror");
// 	exit;
//   }
// }
// elseif($register=="Seller")
// {
// $result=mysqli_query($conn,"select * from `farmer` where email='$email'");
// if(mysqli_num_rows($result)>0){
// 	header("Location:uu.php?mailerror");
// 	exit;
//   }
// }
// elseif($register=="Buyer")
// {
// $result=mysqli_query($conn,"select * from `consumer` where email='$email'");
// if(mysqli_num_rows($result)>0){
// 	header("Location:register.php?mailerror");
// 	exit;
//   }
// }
if($pwd!=$pwd_repeat)
{
	header("Location:register.php?repeatpwderror");
	exit;
}
$result=mysqli_query($conn,"select * from `courier` where email='$email'");
if(mysqli_num_rows($result)>0){
	header("Location:uu.php?mailerror");
 	exit;
 }





if($register=="SGH")
{
	//echo "yes";
$sql="INSERT INTO `shg`(`shgid`, `name`, `gender`, `mobile`, `email`, `address`, `password`, `mobile_alt`) VALUES ($id,'$name','$gender','$mobile','$email','$address','$pwd','$mobile_alt')"; 
mysqli_query($conn,$sql);
//echo "INSERT INTO user(`farmer_id`,`name`, `email`, `mobile`, `password`) VALUES ('$farmer_id','$name', '$email', '$mobile', '$pwd');";//QUERY
}
elseif($register=="Seller")
{
	$sql="INSERT INTO `farmer`(`fid`, `fname`, `gender`, `mobile`, `email`, `address`, `password`, `mobile_alt`) VALUES ($id,'$name','$gender','$mobile','$email','$address','$pwd','$mobile_alt')";
		//echo "INSERT INTO user(`farmer_id`,`name`, `email`, `mobile`, `password`) VALUES ('$farmer_id','$name', '$email', '$mobile', '$pwd');";//QUERY
		echo "it is inserted";
		mysqli_query($conn,$sql);

    }
	elseif($register=="Buyer")
	{
		$sql="INSERT INTO `consumer`( `cid`, `cname`, `gender`, `mobile`, `email`, `address`, `password`, `mobile_alt`) VALUES ($id,'$name','$gender','$mobile','$email','$address','$pwd','$mobile_alt')";
			//echo "INSERT INTO user(`farmer_id`,`name`, `email`, `mobile`, `password`) VALUES ($id,$name,$gender,$mobile,$email,$address,$pwd,$mobile_alt)";//QUERY
			echo "it is inserted";
			mysqli_query($conn,$sql);
		}
if($register=="SHG")
{
$query="select * from `shg` where email='$email' and password='$pwd'";
$result1=mysqli_query($conn,$query);
if(mysqli_num_rows($result1)>0)
{
	while($row=mysqli_fetch_row($result1))
	{
		session_start();
		$farmer_id=$row[0];
		$_SESSION['farmer_id']=$farmer_id;
		header("Location:about.php?farmer_id=".$farmer_id); 
	}
}
}
elseif($register=="Seller")
{
	$query="select * from `farmer` where email='$email' and password='$pwd'";
$result1=mysqli_query($conn,$query);
if(mysqli_num_rows($result1)>0)
{
	while($row=mysqli_fetch_row($result1))
	{
		session_start();
		$farmer_id=$row[0];
		$_SESSION['farmer_id']=$farmer_id;
		header("Location:uu.php?farmer_id=".$farmer_id); 
	}
}
}
elseif($register=="Buyer")
{
	$query="select * from `consumer` where email='$email' and password='$pwd'";
	$result1=mysqli_query($conn,$query);
	if(mysqli_num_rows($result1)>0)
{
	while($row=mysqli_fetch_row($result1))
	{
		session_start();
		$farmer_id=$row[0];
		$_SESSION['farmer_id']=$farmer_id;
		header("Location:about.php?farmer_id=".$farmer_id); 
	}
}
}
mysqli_close($conn);
?>
