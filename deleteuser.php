<?php
	$con=mysql_connect("localhost","root","");
	
	mysql_select_db("herbalmedicines");
	
	
	$userid=$_GET['removeuser'];
	echo $userid;
	$sql="delete from registration where User_Id=".$userid."";
	
	$result=mysql_query($sql,$con);
	
	
?>
	<script type="text/javascript">
	window.location="manageuser.php";
	</script>
	
