<?php
 $conn = mysqli_connect('localhost', 'root', '', 'travel')
 or die('Gabim ne lidhje!');
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
<form action="" method="post">  
Kerko: <input type="text" name="term" /><br/>  
<input type="submit" value="Submit" />  
</form>
 
<table wuidth='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Username</td>
		<td>Password</td>
		<td>Email</td>
		<td>Update</td>
	</tr> 
<?php
if (!empty($_REQUEST['term'])) {

$term = mysqli_real_escape_string($conn,$_REQUEST['term']);     

$sql = mysqli_query($conn,"SELECT * FROM admin WHERE username LIKE '%".$term."%' "); 
 

while($row = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$row['username']."</td>";
		echo "<td>".$row['password']."</td>";
		echo "<td>".$row['email']."</td>";	
		echo "<td><a href=\"edit.php?uid=$row[uid]\">Ndrysho</a> | <a href=\"delete.php?uid=$row[uid]\" onClick=\"return confirm('A jeni i sigurte qe doni ta fshini?')\">Fshij</a></td>";		
	}

}

?>
	</table>
    </body>
</html>