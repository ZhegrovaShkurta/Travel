<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css"/>
<title>Ballina</title>
</head>
<body>
    <div id="header"></div>
            <div class="divlogo">
            <img  src="img/logo2.png"/>
            <h2>Travel</h2></div>
    <nav id="menuNav">
<a href="index.php">Ballina</a>
<a href="rethnesh.php">Rreth Nesh</a>
<a href="sherbimet.php">Sherbimet</a>
<a class="active" href="destinacionet.php">Destinacionet</a>
<a href="kontakti.php">Kontankti</a>
<a class="active" style="opacity: 50%;" href="loginF.php">Login</a>
    </nav><br>
    <div id="Des"><br>

    <center><h1>Destinacionet qe mund ti vizitoni</h1><hr size="4" width="10%" color="#008080"></center>
     <br><br>
     <?php
$result = mysqli_query($conn, "CALL SelectFromDestinacionet()");
while ($row = mysqli_fetch_assoc($result)) {
 extract($row);
if($result==null)
  mysqli_free_result($result);
?>
     <div class="destinacionet">
<?php 
 mysqli_next_result($conn);
if($Image==null){
echo'<img   width="10" height="10">';
}
 else{ echo '<img  alt="" src="data:img/jpeg;base64,'.base64_encode( $row['Image'] ).'" width="100%""/>';} ?>
 <b><p><?php echo $Titulli; ?></p></b></div><?php } ?>
    </div>
    <footer><br>
        <table class="tableF">
            <tr>
                <td><h3>Te Disponueshme</h3></td>
                <td><h3>Rrjetet Sociale</h3></td>
                <td><h3>Kontakti</h3></td>
            </tr>
           <tr>
               <td><a href="index.php">Ballina</a></td>
               <td>Facebook</td>
               <td>example@example.com</td>
           </tr>
           <tr>
            <td><a href="rethnesh.php">Rreth Nesh</a></td>
            <td>Instagram</td>
            <td>+383 44 000 000</td>
        </tr>
        <tr>
            <td><a href="sherbimet.php">Sherbimet</a></td>
            <td></td>
            <td><a  href="kontakti.php"><button>Kontakto</button></a></td>
        </tr>
        <tr>
            <td><a href="destinacionet.php">Destinacionet</a></td>
            <td></td>
            <td></td>
        </tr>
        </table><br>
        Copyright@2022
    </footer>
</body>
</html>