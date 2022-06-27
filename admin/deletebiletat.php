<?php
 $conn = mysqli_connect('localhost', 'root', '', 'travel')
 or die('Gabim ne lidhje!');
 ?>
 <?php
$p_ID_Bileta = $_GET['ID_Bileta'];
$result = mysqli_query($conn,"CALL deletebiletat('$p_ID_Bileta')");
header("Location:biletat.php");
?>
