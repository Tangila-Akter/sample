<!DOCTYPE html>
<html>
<head>
  <title>Flower Bank</title>
 <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<img src="head.jpg" alt="" height="225" width="70%"><br>
<h1>Welcome to Flower Bank</h1>
<h2>Open Your Flower Bank Account Now!!!</h2>

<?php
$con = new mysqli("localhost", "root", "", "dbbank");
$sql = "select * from tblbank";
$result=mysqli_query($con,$sql);

  echo "<table border=1>
		<tr><th>User ID</th>
		    <th>User Name</th>
			<th>Email</th>
			<th>Balance</th>
			<th>Action<th>
		</tr>";		
  while ($row=mysqli_fetch_array($result))
    {
		echo "<tr>
			<td>$row[id]</td>
		    <td>$row[name]</td>
			<td>$row[email]</td>
			<td>$row[balance]</td>
			<td><a href='delete.php?id=$row[id]'>Delete</a><br>
			    <a href='updateform.php?id=$row[id]'>Update</a> 
			</td>
		    </tr>";	
	}
	echo "</table>";
  
  
  echo "<br>New Registration? <a href=form.php>Click here</a>.";
?>
</body>
<footer><p>&copy; Copyright 22-05-2020. Designed by <br>
Name:Tangila Akter<br>
ID:201821051012<br>
Batch:51st<p></footer>
</html>