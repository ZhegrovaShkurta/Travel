
<?php

include('login.php');

if ((isset($_SESSION['username']) != '')) 
{
    header('Location:biletat.php');
}	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css"/>
<title>Login Forma</title>
</head>
<body>
  <center>
   <div id="contentK" style="height: 640px;"><br><br>
    <div class="divlogin">
        <img  src="img/divinfobc.png" />
        <h3  style="padding-left: 30px;">Login Form</h3>
            <form method="post" >
            <input type="text" name="username" placeholder="username"/>
            <input type="password" name="password" placeholder="password"/><br>
            <button name="submit" value="login">Login</button><br><br>
            <center><?php echo $error;?> </center><br><br><br>
            <a href="index.php">Kthehu prapa</a>  |  <a href="addregjistrohu.php" >Shto perdoruesin</a><br>
          
            
        </form>
    </div>   </center>

    </div>
</body>
</html>