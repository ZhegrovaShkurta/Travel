<?php
include_once("config.php");
?>
<html>
<head>
	<title>Travel</title>
</head>
<body>
<?php
include_once("config.php");
if(isset($_POST['submit'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	 $maxsize = 10000000; 
	if(empty($username) || empty($password) || empty($email) ) {
				
		if(empty($username)) {
			echo "<font color='#ff3300'>EMRI ËSHTË I ZBRAZËT.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font  color='#ff3300'>FJALËKALIMI ËSHTË I ZBRAZËT.</font><br/>";
		}
		if(empty($email)) {
			echo "<font color='#ff3300'>EMAIL ËSHTË E ZBRAZËT.</font><br/>";
		
		}

		echo "<br/><button id='buttonshto'><a style='color:white;' href='javascript:self.history.back();'>KTHEHU PRAPA</a></button>";
	} else { 
			
		$result = mysqli_query($conn, "CALL insertadmin('$username','$password','$email')");
		
		echo "<font style=' color: #008080;  font-size:25px; padding-top:20px; font-family: Gabriola; '><b>E DHËNA U SHTUA ME SUKSES .</b>";
        echo "<script>setTimeout(\"location.href = 'admin.php';\",2500);</script>";
	}
}
?>

</body>
</html>
