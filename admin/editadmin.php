<?php
session_start();
include_once("config.php");

if(isset($_POST['update']))
{	
	$uid = $_POST['uid'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	
	$maxsize = 10000000; 
	

	if(empty($username) || empty($password)|| empty($email) ) {	
			
				
		if(empty($username)) {
			echo "<font color='red'>username eshte e zbrazet.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>password eshte e zbrazet.</font><br/>";
		}
		if(empty($email)) {
			echo "<font color='red'>email edhte e zbrazet.</font><br/>";
		
		}

	} else {	
		mysqli_query($conn, "SET @id = ${uid}");
		mysqli_query($conn, "SET @us = '${username}'");
		mysqli_query($conn, "SET @pass = '${password}'");
		
		mysqli_query($conn, "SET @em = '${email}'");
        $result = mysqli_query($conn, "CALL updateadmin (@id, @us, @pass,@em)");
		if($result){
		
		header("Location: admin.php");
		}else{
			die("Couldnt execute procedure!");
		}
	}
}
?>
<?php
$uid = $_GET['uid'];
$result = mysqli_query($conn,"SELECT * FROM admin WHERE uid=$uid");

while($res = mysqli_fetch_array($result))
{
	$username=$res['username'];
	$password=$res['password'];
	$email=$res['email'];
	

}
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
<a class="active" href="admin.php">Admin</a>
<a  href="ballina.php">Ballina</a>
<a href="rrethnesh.php">Rreth Nesh</a>
<a href="sherbimet.php">Sherbimet</a>
<a href="destinacionet.php">Destinacionet</a>
<a href="kontakti.php">Kontankti</a>
<a class="active" style="opacity: 50%;" href="logout.php">Logout</a>
    </nav> <br>
    <div id="content"><br>

<center><div class="divlogin"><br>
        <h3  style="padding-left: 30px;">Ndrysho Admin</h3>
            <form method="post" enctype="multipart/form-data" action="editadmin.php">
            <input class="inputA" type="text" value='<?php echo $username; ?>' name="username" placeholder="username"/>
            <input class="inputA" type="password" value='<?php echo $password;?>' name="password" placeholder="password"/>
            <input class="inputA" type="email" value='<?php echo $email;?>' name="email" placeholder="email"/><br>
            <input type="hidden" name="uid" value='<?php echo $_GET['uid'];?>' />
            <button class="buttonA" name="update" type="submit">Ndrysho</button><br><br><br></center>
            
        </form>
    </div>
            
</div>

</body>
</html> 
