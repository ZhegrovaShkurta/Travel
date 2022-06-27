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
<title>Sherbimet</title>
</head>
<body>
    <div id="header"></div>
    <div class="divlogo">
        <img  src="img/logo2.png"/>
        <h2>Travel</h2></div>
    <nav id="menuNav">
<a  href="index.php">Ballina</a>
<a href="rethnesh.php">Rreth Nesh</a>
<a  href="sherbimet.php">Sherbimet</a>
<a href="destinacionet.php">Destinacionet</a>
<a href="kontakti.php">Kontankti</a>
<a class="active" style="opacity: 50%;" href="logout.php">Logout</a>
    </nav><br>
    <div id="content">
    <?php include("check.php"); ?>
<p style="color:#008080" class="header-bar-email" style="padding-bottom:5px;">
Perdoruesi: <?php echo $login_user;?></p><br>
<?php
$result = mysqli_query($conn, "CALL SelectFromBiletat()");
while ($row = mysqli_fetch_assoc($result)) {
 extract($row);
if($result==null)
  mysqli_free_result($result);
?>
        <table class="table1">
            <tr>
                <td>
<?php 
 mysqli_next_result($conn);
 if($Image==null){
echo'<img   width="10" height="10">';
}
else{
echo '<img class="circular--square"  alt="" 
src="data:img/jpeg;base64,'.base64_encode( $row['Image'] ).'" width="100%""/>';} ?></td>
                <td><h2><?php echo $Titulli; ?></h2><?php echo $Pershkrimi; ?></td>
            </tr></table><br><?php } ?>
            <center><h2>Si mund të rezervoni biletën tuaj?</h2>
            <p>Ju mund të rezervoni biletën tuaj online duke ndjekur tre hapat e mëposhtëm.</p></center>

            <div class="rezervimi">
                <div style="background-color: #8789ff"><h4>REZERVIM</h4>
                    <p>Në seksionin rezervo do gjeni linjat dhe oraret ku mund të zgjidhni atë që kërkoni shumë thjesht brenda një afati 24 orësh.</p></div>
                <div style="background-color: #d6b600;"><h4>PAGUAJ BILETËN TËNDE</h4>
                    <p>Drejtohuni në njërin prej dyqaneve tona fizike ku mund te kryeni pagesën brenda 24 orësh, përndryshe rezervimi juaj do të anullohet.</p></div>
                <div style="background-color: #c7a170;"><h4>SHIJO UDHËTIMIN</h4>
                    <p>Pas pagesës ju do të pajiseni me biletën përkatëse. Ne ju urojmë një udhëtim të mbarë.<br>
                        Shijojeni!</p></div>
            </div>
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