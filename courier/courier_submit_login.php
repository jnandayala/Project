
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="farmer";
$conn = mysqli_connect($servername, $username, $password,$db); 
$id=$_POST['id'];
$pwd=$_POST['pwd'];	
session_start();
//$register=$_POST['register'];
	$sql="select * from courier where mobile='$id' and password='$pwd'"; //QUERY
	
	echo $sql;
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_row($result))
		{
			
			$courier_id=$row[1];
			$_SESSION['courier_id']=$courier_id;
			//echo $_SESSION['courier_id'];
			$_SESSION['login']="Logged in successfully";
			header("Location:courier_index.php");
		}
	}
	else
	{
		header("Location:courier_login.php?pwderror");
	}


mysqli_close($conn);

?>