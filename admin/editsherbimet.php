<?php
session_start();
 include_once("config.php");

if(isset($_POST['update']))
{	
	$ID_Sherbimi = $_POST['ID_Sherbimi'];
	$Titulli=$_POST['Titulli'];
	$Pershkrimi=$_POST['Pershkrimi'];
	$Image =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$EmrF0 = $_FILES['userfile']['name'];
	
	$maxsize = 10000000; 
	
		if(empty($Titulli) || empty($Pershkrimi) || empty($EmrF0)) {
		if(empty($Titulli)) {
			echo "<font color='#ff3300'>TITULLI ËSHTË I ZBRAZËT.</font><br/>";
		}
		if(empty($Pershkrimi)) {
			echo "<font color='#ff3300'>PËRSHKRIMI ËSHTËI ZBRAZËT.</font><br/>";
		}
		if(empty($EmrF0)) {
			echo "<font color='#ff3300'>EMRI I FILE-IT ËSHTË I ZBRAZËT.</font><br/>";
		}
			
	} else {	
		mysqli_query($conn,"SET @id = ${ID_Sherbimi}");
		mysqli_query($conn,"SET @tit= '${Titulli}'");
	    mysqli_query($conn,"SET @per= '${Pershkrimi}'");
		mysqli_query($conn,"SET @img= '${Image}'");
		mysqli_query($conn,"SET @emr= '${EmrF0}'");
		$result = mysqli_query($conn,"CALL updatesherbimet(@id, @tit, @per, @img, @emr)");
		if($result){
			
		header("Location: sherbimet.php");
		}else{
			
			die("Coudn't execute update procedure!");
		}
	}
}
?>
<?php
$ID_Sherbimi = $_GET['ID_Sherbimi'];
$result = mysqli_query($conn,"SELECT * FROM sherbimet WHERE ID_Sherbimi=$ID_Sherbimi");

while($res = mysqli_fetch_array($result))
{	$Titulli = $res['Titulli'];
	$Pershkrimi = $res['Pershkrimi'];
	$EmrF0 = $res['EmrF0'];


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
<a  href="admin.php">Admin</a>
<a  href="ballina.php">Ballina</a>
<a  href="rrethnesh.php">Rreth Nesh</a>
<a class="active" href="sherbimet.php">Sherbimet</a>
<a href="destinacionet.php">Destinacionet</a>
<a href="kontakti.php">Kontankti</a>
<a class="active" style="opacity: 50%;" href="logout.php">Logout</a>
    </nav> <br>
    <div id="content"><br>

<center><div class="divlogin"><br>
        <h3  style="padding-left: 30px;">Ndrysho Te Dhenat</h3>
            <form method="post" enctype="multipart/form-data" action="editsherbimet.php">
            <input class="inputA" type="text" value='<?php echo $Titulli; ?>' name="Titulli" placeholder="Titulli"/>
            <input class="inputA" type="text" value='<?php echo $Pershkrimi;?>' name="Pershkrimi" placeholder="Pershkrimi"/>
            <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
			<input name="userfile" type="file" />
			<input type="hidden" name="ID_Sherbimi" value='<?php echo $_GET['ID_Sherbimi'];?>' />
            <button class="buttonA" name="update" type="submit">Ndrysho</button><br><br><br></center>
            
        </form>
    </div>
            
</div>

</body>
</html> 
