<?php
 $conn = mysqli_connect('localhost', 'root', '', 'travel')
 or die('Gabim ne lidhje!');
 ?>
 <?php
$p_ID_Sherbimi = $_GET['ID_Sherbimi'];
$result = mysqli_query($conn,"CALL deletesherbimet('$p_ID_Sherbimi')");
header("Location:sherbimet.php");
?>
