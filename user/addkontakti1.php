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
	$Emri=$_POST['Emri'];
	$Email=$_POST['Email'];
	$Mesazhi=$_POST['Mesazhi'];
		if(empty($Emri) || empty($Email) || empty($Mesazhi)) {
		if(empty($Emri)) {
			echo "<font color='#ff3300'>EMRI ËSHTË I ZBRAZËT.</font><br/>";
		}
		if(empty($Email)) {
			echo "<font color='#ff3300'>EMAIL ËSHTË I ZBRAZËT.</font><br/>";
		}
		if(empty($Mesazhi)) {
			echo "<font color='#ff3300'>MESAZHI ËSHTË I ZBRAZËT.</font><br/>";
		}
		echo "<br/><button id='buttonshto'><a style='color:white;' href='javascript:self.history.back();'>KTHEHU PRAPA</a></button>";
	} else { 	
		$result = mysqli_query($conn, "CALL insertkontakti('$Emri','$Email','$Mesazhi')");
		
		echo "<font style=' color: #008080;  font-size:25px; padding-top:20px; font-family: Gabriola; '><b>MESAZHI U DERGU ME SUKSES .</b>";
        echo "<script>setTimeout(\"location.href = 'kontakti.php';\",2500);</script>";
	}
}
?>