 <?php
$con=mysqli_connect("localhost","root","","dbbank");
$query  = "INSERT INTO tblbank VALUES ('$_POST[id]', '$_POST[name]', '$_POST[email]', '$_POST[balance]')";

 $data=mysqli_query($con,$query );
 
echo '<meta http-equiv="refresh" content="0;url=http://localhost/bank/viewbank.php">';
?> 