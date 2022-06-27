<?php
 $conn = mysqli_connect('localhost', 'root', '', 'travel')
 or die('Gabim ne lidhje!');
 ?>
 <?php
$p_ID_Kontakti = $_GET['ID_Kontakti'];
$result = mysqli_query($conn,"CALL deletekontakti('$p_ID_Kontakti')");
header("Location:kontakti.php");
?>
