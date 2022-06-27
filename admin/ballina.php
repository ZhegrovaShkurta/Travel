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
<a class="active"  href="ballina.php">Ballina</a>
<a  href="rrethnesh.php">Rreth Nesh</a>
<a href="sherbimet.php">Sherbimet</a>
<a href="destinacionet.php">Destinacionet</a>
<a href="kontakti.php">Kontankti</a>
<a class="active" style="opacity: 50%;" href="logout.php">Logout</a>
    </nav> <br>
    <div id="content">
    <?php include("check.php"); ?>
<p class="header-bar-email" style="padding-bottom:5px;">
Admin: <?php echo $login_user;?></p><br>

<form action="" method="post">
		    <input type="text" name="term" id='search' placeholder='&nbsp; KËRKO TË DHËNA'/> 
	        <input type="submit" value="Kerko" id='submit2'/></form>
            <br><a id="submit2" href="addballina.php">Shto te Dhena</a>
            <a id="submit2" href="biletat.php">Biletat</a><br><br>
            <table width='95%' border=0 id="tab">
	<tr id='tr'>
		<td style="color:white;">TITULLI</td>
		<td style="color:white;">PËRSHKRIMI</td>
		<td style="color:white;">FOTO</td>
		<td style="color:white;">EMRI I FILE-IT</td>
		<td style="color:white;">UPDATE</td>
	</tr> 

<?php
	if (!empty($_REQUEST['term'])) {

	$term = mysqli_real_escape_string($conn,$_REQUEST['term']);     
	$sql = mysqli_query($conn,"SELECT * FROM ballina WHERE Titulli LIKE '%".$term."%' OR Pershkrimi LIKE '%".$term."%'  OR EmrF0 LIKE '%".$term."%'");  
	while($row = mysqli_fetch_array($sql)) { 		
			echo "<tr>";
			echo "<td>".$row['Titulli']."</td>";
			echo "<td>".$row['Pershkrimi']."</td>";
			echo "<td><img src=data:image/jpeg;base64,".base64_encode($row['Image'])." width='100'  height='100'/></td>";;	
			echo "<td>".$row['EmrF0']."</td>";
			echo "<td><button id='submit2'> <a style='color:white;' href=\"editballina.php?ID_Ballina=$row[ID_Ballina]\"><center>Ndrysho</a></button> <br> <button id='submit2'> <a style='color:white;' href=\"deleteballina.php?ID_Ballina=$row[ID_Ballina]\" onClick=\"return confirm('Je i sigurte qe doni ta fshini?')\">Fshij</center></a></button></td>";
			echo "</tr>";
		}

	}

	?>

	</table>
            
</div>

</body>
</html> 