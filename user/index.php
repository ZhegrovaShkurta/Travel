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
<a class="active" href="index.php">Ballina</a>
<a href="rethnesh.php">Rreth Nesh</a>
<a href="sherbimet.php">Sherbimet</a>
<a href="destinacionet.php">Destinacionet</a>
<a href="kontakti.php">Kontankti</a>
<a class="active" style="opacity: 50%;" href="loginF.php">Login</a>
    </nav> <br>
    <div id="content">
        <div class="slider-container">
            <div class="menu">
              <label for="slide-dot-1"></label>
              <label for="slide-dot-2"></label>
              <label for="slide-dot-3"></label>
            </div>
            <input id="slide-dot-1" type="radio" name="slides" checked>
            <div class="slide slide-1"><img src="img/slider1.jpg"/></div>
            <input id="slide-dot-2" type="radio" name="slides" checked>
            <div class="slide slide-2"><img src="img/slider2.jpg"/></div>
            <input id="slide-dot-3" type="radio" name="slides" checked>
            <div class="slide slide-3"><img src="img/slider1.jpg"/></div>
          </div><br><br><br><br>
          <center><div id="sherbimet">
             <div class="divsherbimet"><img  src="img/sh1.png"/><p>Udhetime me airoplan komod <br>dhe me standarde evropiane</p></div>
             <div class="divsherbimet"><img  src="img/sh2.png"/><p>Udhetime me autobus komod <br>dhe me standarde evropiane</p></div>
             <div class="divsherbimet"><img  src="img/sh3.png"/><p>Udhetime me anije luksoze <br>dhe me standarde evropiane</p></div>
          </div></center><br><br>
          <div id="divinfo">
          <?php
$result = mysqli_query($conn, "CALL SelectFromBallina()");
while ($row = mysqli_fetch_assoc($result)) {
 extract($row);
if($result==null)
  mysqli_free_result($result);
mysqli_next_result($conn);
?>
            <table class="table1">
                <tr>
                    <td><h2 style="color:white;"><?php echo $Titulli; ?></h2><br>
                           <p style="color:white;">&nbsp; &nbsp; <?php echo $Pershkrimi; ?></p></td>
                    <td><br><?php 
 mysqli_next_result($conn);
        if($Image==null){
                                echo'<img  width="10" height="10">';
                            }
                            else{
                                echo '<img  alt="" src="data:img/jpeg;base64,'.base64_encode( $row['Image'] ).'" width="100%""/>';}
                                    
                                    ?></td></tr></table><?php } ?>
            </div><br><br>
            <center>
            <div style="width:60%">
            <marquee><h2>Rezervo biletën tuaj të udhëtimit përmes internetit</marquee></h2>
            </div>
       <a href="loginF.php"><button>Rezervo</button></a></center>
<br><br>    
            
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