<?php
	$con=mysql_connect("localhost","root","");
	
	$db=mysql_select_db("herbalmedicines");
	
	$sql="select * from feedback";
	
	$result=mysql_query($sql,$con);
	echo"<html><body><table border=1> <tr><th>Name</th> <th>Email</th> <th>Content</th></tr>";
	while($row=mysql_fetch_array($result))
	{
		echo "<tr><td>".$row['name']."</td> <td>".$row['email']."</td><td>".$row['content']."</td></tr>"."<br>";
	}
	
	echo"</td></td></tr></table></body></html>";
	//echo"no of rows in table:".mysql_num_rows($result);
	
	mysql_close($con);
?>

