<?php
session_start();
 include_once("config.php");

if(isset($_POST['update']))
{	
	$ID_Bileta = $_POST['ID_Bileta'];
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
			
	} else {	
		mysqli_query($conn,"SET @id = ${ID_Bileta}");
		mysqli_query($conn,"SET @tit= '${Titulli}'");
	    mysqli_query($conn,"SET @per= '${Pershkrimi}'");
		mysqli_query($conn,"SET @img= '${Image}'");
		mysqli_query($conn,"SET @emr= '${EmrF0}'");
		$result = mysqli_query($conn,"CALL updatebiletat(@id, @tit, @per, @img, @emr)");
		if($result){
			
		header("Location: biletat.php");
		}else{
			
			die("Coudn't execute update procedure!");
		}
	}
}
?>
<?php
$ID_Bileta = $_GET['ID_Bileta'];
$result = mysqli_query($conn,"SELECT * FROM biletat WHERE ID_Bileta=$ID_Bileta");

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
<a  class="active" href="ballina.php">Ballina</a>
<a  href="rrethnesh.php">Rreth Nesh</a>
<a href="sherbimet.php">Sherbimet</a>
<a href="destinacionet.php">Destinacionet</a>
<a href="kontakti.php">Kontankti</a>
<a class="active" style="opacity: 50%;" href="logout.php">Logout</a>
    </nav> <br>
    <div id="content"><br>

<center><div class="divlogin"><br>
        <h3  style="padding-left: 30px;">Ndrysho Te Dhenat</h3>
            <form method="post" enctype="multipart/form-data" action="editbiletat.php">
            <input class="inputA" type="text" value='<?php echo $Titulli; ?>' name="Titulli" placeholder="Titulli"/>
            <input class="inputA" type="text" value='<?php echo $Pershkrimi;?>' name="Pershkrimi" placeholder="Pershkrimi"/>
            <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
			<input name="userfile" type="file" />
			<input type="hidden" name="ID_Bileta" value='<?php echo $_GET['ID_Bileta'];?>' />
            <button class="buttonA" name="update" type="submit">Ndrysho</button><br><br><br></center>
            
        </form>
    </div>
            
</div>

</body>
</html> 
