<?php
 $conn = mysqli_connect('localhost', 'root', '', 'travel')
 or die('Gabim ne lidhje!');
 ?>
 <?php
$p_uid = $_GET['uid'];
$result = mysqli_query($conn,"CALL deleteadmin('$p_uid')");
header("Location:admin.php");
?>
