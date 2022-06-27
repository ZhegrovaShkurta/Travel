<?php
 $conn = mysqli_connect('localhost', 'root', '', 'travel')
 or die('Gabim ne lidhje!');
 ?>
 <?php
$p_ID_Destinacioni = $_GET['ID_Destinacioni'];
$result = mysqli_query($conn,"CALL deletedestinacionet('$p_ID_Destinacioni')");
header("Location:destinacionet.php");
?>
