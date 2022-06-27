<?php
	session_start();
	include("config.php"); 
	$error = ""; 
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["username"])|| empty($_POST["password"]))
		{
		$error ="Ju lutem plotesoni te dhenat tuaja.";
		}else
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$sql="SELECT uid FROM users WHERE username='$username' and password='$password'";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array
			($result,MYSQLI_ASSOC);
			
			
			
			
			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['username']= $username; 
				header("location: biletat.php"); 
			}else
			{
				$error = "Emri Perdoruesit ose Fjalekalimi eshte i Papranueshem.";
			}

		}
	}

?>