<?php
$con=mysqli_connect("localhost","root","","dbbank");
$sql = "delete from tblbank where id=$_GET[id]";
mysqli_query($con,$sql);
echo '<meta http-equiv="refresh" content="0;url=http://localhost/bank/viewbank.php">';
?>