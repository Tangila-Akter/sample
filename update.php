<?php
 $con=mysqli_connect("localhost","root","","dbbank");
 $query="update tblbank set name='$_POST[name]', email='$_POST[email]', balance='$_POST[balance]' where id=$_POST[id]";
 $data=mysqli_query($con,$query );
 
 echo "<meta http-equiv=refresh content=0;http://localhost/bank/viewbank.php>";
 ?>