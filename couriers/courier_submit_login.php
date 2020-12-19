
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="farmer";
$conn = mysqli_connect($servername, $username, $password,$db); 
$id=$_POST['id'];
$pwd=$_POST['pwd'];	
$register=$_POST['register'];
if($register=="SHG")
{
	$sql="select * from shg where shgid='$id' and password='$pwd'"; //QUERY
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_row($result))
		{
			session_start();
			$farmer_id=$row[0];
			$_SESSION['shgid']=$shgid;
			header("Location:index.php");
		}
	}
	else
	{
		header("Location:login.php");
	}
}

elseif($register=="Seller")
{
	$sql="select * from farmer where fid='$id' and password='$pwd'"; //QUERY
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_row($result))
		{
			session_start();
			$farmer_id=$row[0];
			$_SESSION['fid']=$id;
			include_once "uu.php";
		}
	}
	
}
elseif($register=="Buyer")
{
	$sql="select * from consumer where cid='$id' and password='$pwd'"; //QUERY
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_row($result))
		{
			session_start();
			$cid=$row[0];
			$_SESSION['cid']=$cid;
			header("Location:index.php");
		}
	}
	else
	{
		header("Location:login.php");
	}
}



else{
	header("Location:login.php");
}

mysqli_close($conn);

?>