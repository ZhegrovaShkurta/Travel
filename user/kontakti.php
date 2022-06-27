<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css"/>
<title>Kontakti</title>
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
<a href="destinacionet.php">Destinacionet</a>
<a class="active" href="kontakti.php">Kontankti</a>
<a class="active" style="opacity: 50%;" href="loginF.php">Login</a>
    </nav> <br>
   <div id="contentK"><br><br>
    <div class="divKontakti1"><h3 style="padding-left: 30px;">Lokacioni i Kompanisë</h3><br>
        <center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47094.33568760899!2d21.427190763851176!3d42.4618661906638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13548d28fe87b91d%3A0xab45b8a9d06a705!2sGjilan!5e0!3m2!1sen!2s!4v1464092074210"
        width="90%" height="230" frameborder="0" style="border:0" allowfullscreen></iframe></center>
    <p  style="padding-left: 30px;"> Për cdo informata na kontaktoni: <b>example@example.com</b> |<b> +383 44 000 000</b></p></div>
    <div class="divKontakti2">
        <h3  style="padding-left: 30px;">Kontakto</h3>
        <center><form method="post" action="addkontakti1.php">
            <input type="text" name="Emri" placeholder="Emri dhe Mbiemri"/>
            <input type="email" name="Email" placeholder="Email"/>
            <textarea name="Mesazhi" id="mesazhi" cols="30" rows="2" placeholder="Mesazhi"></textarea>
            <input type="submit" name="submit" value="Dergo"/>
        </form></center>
    </div>   
        
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
    </div>
</body>
</html>