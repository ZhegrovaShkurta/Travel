<?php
 $conn = mysqli_connect('localhost', 'root', '', 'travel')
 or die('Gabim ne lidhje!');
 ?>
 <?php
$p_ID_Ballina = $_GET['ID_Ballina'];
$result = mysqli_query($conn,"CALL deleteballina('$p_ID_Ballina')");
header("Location:ballina.php");
?>
