<?php

	include('login.php');

	if ((isset($_SESSION['username']) != '')) 
	{
		header('Location:admin.php');
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
        <h3  style="padding-left: 30px;">Forma per Kycje</h3>
            <form method="post">
            <input class="inputA" type="text" name="username" placeholder="username"/>
            <input class="inputA" type="password" name="password" placeholder="password"/><br>
            <button class="buttonA" name="submit" value="submit">Login</button><br><br><br><br><br>
            
        </form>
    </div>  <center><?php echo $error;?> </center>

    </div>
</body>
</html>