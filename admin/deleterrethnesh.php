<?php
 $conn = mysqli_connect('localhost', 'root', '', 'travel')
 or die('Gabim ne lidhje!');
 ?>
 <?php
$p_ID_RrethNesh = $_GET['ID_RrethNesh'];
$result = mysqli_query($conn,"CALL deleterrethnesh('$p_ID_RrethNesh')");
header("Location:rrethnesh.php");
?>
