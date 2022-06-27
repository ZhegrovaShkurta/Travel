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
	$Titulli=$_POST['Titulli'];
	$Image =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$EmrF0 = $_FILES['userfile']['name'];
	$maxsize = 10000000; 
		if(empty($Titulli)) {
		if(empty($Titulli)) {
			echo "<font color='#ff3300'>TITULLI ËSHTË I ZBRAZËT.</font><br/>";
		}
		echo "<br/><button id='buttonshto'><a style='color:white;' href='javascript:self.history.back();'>KTHEHU PRAPA</a></button>";
	} else { 	
		$result = mysqli_query($conn, "CALL insertdestinacionet('$Titulli','$Image','$EmrF0')");
		
		echo "<font style=' color: #008080;  font-size:25px; padding-top:20px; font-family: Gabriola; '><b>E DHËNA U SHTUA ME SUKSES .</b>";
        echo "<script>setTimeout(\"location.href = 'destinacionet.php';\",2500);</script>";
	}
}
?>