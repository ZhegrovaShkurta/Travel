<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css"/>
<title>Rezervo Bileten</title>
</head>
<body>
    
    <div id="header"></div>
        <div class="divlogo">
        <img  src="img/logo2.png"/>
        <h2>Travel</h2></div>
    <nav id="menuNav">
<a  href="admin.php">Admin</a>
<a class="active" href="ballina.php">Ballina</a>
<a href="rrethnesh.php">Rreth Nesh</a>
<a   href="sherbimet.php">Sherbimet</a>
<a href="destinacionet.php">Destinacionet</a>
<a href="kontakti.php">Kontankti</a>
<a class="active" style="opacity: 50%;" href="logout.php">Logout</a>
    </nav> <br>
    <div id="content">
    <?php include("check.php"); ?>
<p class="header-bar-email" style="padding-bottom:5px;">
Admin: <?php echo $login_user;?></p><br>

<center><div class="divlogin"><br>
        <h3  style="padding-left: 30px;">Shto te dhena</h3>
        <form method="post" action="addbiletat1.php"  enctype="multipart/form-data">
            <input class="inputA" type="text" name="Titulli" placeholder="Titulli"/>
            <input class="inputA" type="text" name="Pershkrimi" placeholder="Pershkrimi"/><br>
            <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
			     <input name="userfile" type="file" />
            <button class="buttonA" name="submit" >Shto</button><br><br><br><br><br></center>
            
        </form>
    </div>
            
</div>

</body>
</html> 