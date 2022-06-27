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
<a href="admin.php">Admin</a>
<a  href="ballina.php">Ballina</a>
<a href="rrethnesh.php">Rreth Nesh</a>
<a href="sherbimet.php">Sherbimet</a>
<a href="destinacionet.php">Destinacionet</a>
<a  class="active" href="kontakti.php">Kontankti</a>
<a class="active" style="opacity: 50%;" href="logout.php">Logout</a>
    </nav> <br>
    <div id="content">
    <?php include("check.php"); ?>
<p class="header-bar-email" style="padding-bottom:5px;">
Admin: <?php echo $login_user;?></p><br>

<form action="" method="post">
		    <input type="text" name="term" id='search' placeholder='&nbsp; KËRKO TË DHËNA'/> 
	        <input type="submit" value="Kerko" id='submit2'/></form><br>
            <table width='95%'  id="tab">
	<tr id='tr'>
		<td style="color:white;">EMRI DHE MBIEMRI</td>
		<td style="color:white;">EMAIL</td>
        <td style="color:white;">MESAZHI</td>
		<td style="color:white;">UPDATE</td>
	</tr>
<?php
	if (!empty($_REQUEST['term'])) {

	$term = mysqli_real_escape_string($conn,$_REQUEST['term']);     
	$sql = mysqli_query($conn,"SELECT * FROM kontakti WHERE Emri LIKE '%".$term."%' OR Email LIKE '%".$term."%'"); 
	while($row = mysqli_fetch_array($sql)) { 		
			echo "<tr>";
			echo "<td>".$row['Emri']."</td>";	
			echo "<td>".$row['Email']."</td>";
            echo "<td>".$row['Mesazhi']."</td>";
			echo "<td>
			<button  id='submit2'> <a style='color:white;' href=\"deletekontakti.php?ID_Kontakti=$row[ID_Kontakti]\" onClick=\"return confirm('A jeni i sigurte qe doni ta fshini?')\">Fshij</center></a></button></td>";
			echo "</tr>";
		}

	}

	?>

	</table>
            
</div>

</body>
</html> 