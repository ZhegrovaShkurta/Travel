<?php
include_once("config.php");
 ?>
 <html>
<head>
	<title>Perdoruesi</title>
</head>
<body>
<?php
include_once("config.php");

if(isset($_POST['submit'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	if(empty($username) || empty($password) || empty($email) ) {
				
		if(empty($username)) {
			echo "<font color='red'>Emri eshte e zbrazet.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>Fjaëkalimi eshte i zbrazet.</font><br/>";
		}
		if(empty($email)) {
			echo "<font color='red'>Email edhte e zbrazet.</font><br/>";
		
		}

		echo "<br/><a href='javascript:self.history.back();'>Kthehu prapa</a>";
	} else { 
	    $query = mysqli_query($conn, "SELECT  * FROM users  WHERE username='".$_POST['username']."'");
	   if(mysqli_num_rows($query) >0){
	    $res=mysqli_fetch_array($query);
		echo "<font style=' color: #ff3300;  font-size:25px; padding-top:20px; font-family: Gabriola; '><b>Ju lutemi provoni një emër tjetër.</b>";
        echo "<script>setTimeout(\"location.href = 'add.php';\",2500);</script>";
		}
	else{	
		$result = mysqli_query($conn, "CALL insertusers('$username','$password','$email')");
		
		echo "<font style=' color: #008080;  font-size:25px; padding-top:20px; font-family: Gabriola; '><b>Mirë se erdhet ne Web App per rezervimin e biletave.</b>";
        echo "<script>setTimeout(\"location.href = 'loginF.php';\",2500);</script>";
	}
}
}
?>

</body>
</html>
