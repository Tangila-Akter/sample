
<?php
 $con=mysqli_connect("localhost","root","","dbbank");
 $query="select * from tblbank where id=$_GET[id]";
 $data=mysqli_query($con,$query );

$r=mysqli_fetch_array($data);

	echo "<form action=update.php method=post>
		  ID:<input type=text name=id value='$r[id]' disabled><br>
		     <input type=hidden name=id value='$r[id]'>
		  Name:<input type=text name=name value='$r[name]'><br>
		  Email:<input type=text name=email value='$r[email]'><br>
		  Balance:<input type=text name=balance value='$r[balance]'><br>
		  <input type=submit value=Update>
	      </form> 
		 ";
 ?>